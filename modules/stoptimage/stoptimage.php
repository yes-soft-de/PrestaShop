<?php
/*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
*  @author ST themes <www.sunnytoo.com>
*  @copyright 2018 ST themes team.
*/
if (!defined('_PS_VERSION_'))
	exit;

class StOptImage extends Module
{
    public  $fields_form;
	private $_html = '';
    private $api_url = 'http://biz236.inmotionhosting.com/~sunnyt7/optimize_image.php';
    public $_prefix_st = 'ST_OPTIMG_';
    public $validation_errors = array();
	function __construct()
	{
		$this->name          = 'stoptimage';
		$this->tab           = 'front_office_features';
		$this->version       = '1.0.0';
		$this->author        = 'SUNNYTOO.COM';
		$this->need_instance = 0;
        $this->bootstrap     = true;
        
		parent::__construct();

		$this->displayName = $this->l('Image optimization.');
		$this->description = $this->l('Help you optimize images to pass page speed tools test and improve your SEO ranking.');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}
    
	function install()
	{
		$res = parent::install();
        return $res;
	}

	public function uninstall()
	{
        return parent::uninstall(); 
	}

	public function getContent()
	{
        Media::addJsDef(array(
            'st_optimize_warning' => $this->l('Are you sure? this will generate and override your current images.'),
            'st_optimize_warning_1' => $this->l('Quantity required.'),
            'st_optimize_warning_2' => $this->l('Width and height are required.'),
            'st_optimize_warning_3' => $this->l('URLs/Files required.'),
        ));
        $this->context->controller->addCSS(($this->_path).'views/css/admin.css');
        $this->context->controller->addJS(($this->_path).'views/js/admin.js');
        $this->initFieldsForm();

        if (Tools::getValue('optimize') && ($img = Tools::getValue('img'))) {
            $imgPath = '';
            $img = rawurldecode($img);
            $img = str_replace('\\', '/', trim($img));
            if (preg_match('#/(img|modules|themes|upload|p|c|m|s|st)/(.*)/?([\w-]+)\.(jpg|jpeg|png|gif)$#Us', $img, $ma)) {
                if (isset($ma[1]) && $ma[1]) {
                    if (strlen($ma[1]) > 2) {
                        $imgPath = rtrim(_PS_ROOT_DIR_, '/').strstr($img, '/'.$ma[1].'/');
                    } else {
                        $imgPath = rtrim(_PS_ROOT_DIR_, '/').'/img'.strstr($img, '/'.$ma[1].'/');
                        // Special for category
                        if ($ma[1] == 'c' && $ma[2] && $ma[3]) {
                            $imgPath = str_replace('/'.$ma[3], '', $imgPath);
                        }
                    }
                }
            } elseif (preg_match('#/(\d+)\-([\w-]+)/[\w-]*\.(jpg|jpeg|png|gif)$#Us', $img, $ma)) {
                if (isset($ma[1]) && $ma[1] && isset($ma[2]) && $ma[2]) {
                    $folders = str_split((string)$ma[1]);
                    $imgPath = rtrim(_PS_ROOT_DIR_, '/').'/img/p/'.implode('/', $folders) . '/'.$ma[1].'-'.$ma[2].'.'.$ma[3];
                }
            }
            $type = (int)Tools::getValue('t');
            $result = array('r' => false, 'c' => 'error', 'm' => '');
            if ($imgPath) {
                if (!file_exists($imgPath)) {
                    $result['m'] = $this->l('Original image not exist');
                } else {
                    if ($type == 1) {
                        $w = (int)Tools::getValue('w');
                        $h = (int)Tools::getValue('h');
                        if (!$w || !$h) {
                            $result['m'] = $this->l('Width or height is incorrect');
                        } elseif (ImageManager::resize($imgPath, $imgPath, $w, $h)) {
                            $result = array(
                                'r' => true, 
                                'c' => 'info', 
                                'm' => $this->l('Image was resized to '.$w.'px by '.$h.'px')
                            );
                        } else {
                            $result['m'] = $this->l('Resize image failed');
                        }
                    } else {
                        $qty = (int)Tools::getValue('q');
                        if ($qty <= 0 || $qty >= 100) {
                            $qty = 85;
                        }
                        $res = $this->makeCall(array('qty'=>$qty, 'img'=>file_get_contents($imgPath), 'token' => $this->genToken()));

                        if ($res && isset($res['img']) && $res['img']) {
                            $oldSize = $res['os'];
                            $newSize = $res['ns'];
                            if ($oldSize > $newSize && @file_put_contents($imgPath, base64_decode($res['img']))) {
                                $result = array(
                                    'r' => true, 
                                    'c' => 'info', 
                                    'm' => $this->l('Image was compressed ('.round($oldSize/1024, 2).'k -> '.round($newSize/1024, 2).'k), '.round(($oldSize-$newSize)/$oldSize*100, 2).'% reduction')
                                );
                            } else {
                                $result['m'] = $this->l('Image can\'t be compressed ('.round($oldSize/1024, 2).'k -> '.round($newSize/1024, 2).'k)');
                            }
                        } else {
                            $result['m'] = $this->l('Image was compressed failed');
                        }    
                    }     
                }
            }
            die(json_encode($result));
        }

		$helper = $this->initForm();

        $this->_html .= $helper->generateForm($this->fields_form);
        
        return $this->_html.'<div class="alert alert-info">This free module was created by <a href="https://www.sunnytoo.com" target="_blank">ST-THEMES</a>, it\'s not allow to sell it, it\'s also not allow to create new modules based on this one. Check more <a href="https://www.sunnytoo.com/blogs?term=743&orderby=date&order=desc" target="_blank">free modules</a>, <a href="https://www.sunnytoo.com/product-category/prestashop-modules" target="_blank">advanced paid modules</a> and <a href="https://www.sunnytoo.com/product-category/prestashop-themes" target="_blank">themes(transformer theme and panda  theme)</a> created by <a href="https://www.sunnytoo.com" target="_blank">ST-THEMES</a>.</div>';
	}
    
    public function initFieldsForm()
    {
        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Imange optimizer'),
                'icon'  => 'icon-cogs'
            ),
            'description' => $this->l('Optimize images to make your site pass page speed test tools like (Google and  gtmetrix).'),
            'input' => array(
                array(
                    'type' => 'radio',
                    'label' => $this->l('Operation'),
                    'name' => 'op_act',
                    'values' => array(
                        array(
                            'id' => 'action_0',
                            'value' => 0,
                            'label' => $this->l('Image optimization quantity')
                        ),
                        array(
                            'id' => 'action_1',
                            'value' => 1,
                            'label' => $this->l('Adjust image dimension')
                        )
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Quantity'),
                    'name' => 'op_qty',
                    'class' => 'fixed-width-sm',
                    'desc' => $this->l('Image quantity, default is 85.'),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Width'),
                    'name' => 'op_width',
                    'prefix' => 'px',
                    'class'  => 'fixed-width-sm',
                    'desc' => $this->l('Image width will to be resized.'),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Height'),
                    'name' => 'op_height',
                    'prefix' => 'px',
                    'class'  => 'fixed-width-sm',
                    'desc' => $this->l('Image height will to be resized.'),
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('URLs / Files'),
                    'name' => 'op_path',
                    'cols' => 60,
                    'rows' => 12,
                    'desc' => array(
                        '<strong>'.$this->l('Relative path and absolute path are both okay, eg. http://www.domain.com/10-home_default/dress.jpg or /img/p/1/0/10-home_default.jpg.').'</strong>',
                        '<strong>'.$this->l('One URL per row.').'</strong><ul id="st_optimize_result"></ul>',
                    )
                ),
                array(
                    'type' => 'html',
                    'id' => '',
                    'label' => '',
                    'name' => '<a href="javascript:;" class="btn btn-default" id="st_optimize_images">'.$this->l('Start to optimize images').'<img src="/modules/stoptimage/views/img/loading.gif" class="st_loading"></a><div id="st_optimize_images_message"></div>',
                ),
            ),
        );
    }
    
    protected function initForm()
	{
	    $helper = new HelperForm();
		$helper->show_toolbar = false;
        $helper->module = $this;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;

		$helper->identifier = $this->identifier;
		$helper->submit_action = 'save'.$this->name;
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);

		return $helper;
	}
    
    private function getConfigFieldsValues()
    {
        $fields_values = array(
            'op_act'                        => 0,
            'op_qty'                        => 85,
            'op_width'                      => '',
            'op_height'                     => '',
            'op_path'                       => '',
        );
        return $fields_values;
    }

    public function makeCall($params = array(), $method = 'POST', $api_url = '') {
        if (!$api_url) {
            $api_url = $this->api_url;
        }
        $params = (array)$params;
        if (is_array($params) && count($params)) {
            $param_string = '&' . http_build_query($params);
        } else {
            $param_string = null;
        }
        $api_url = $api_url . '?' . ('GET' === $method ? ltrim($param_string, '&') : null);
        try {
            $curl_connection = curl_init($api_url);
            curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 60);
            curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);

            if ('POST' == $method) {
                curl_setopt($curl_connection, CURLOPT_POST, count($params));
                curl_setopt($curl_connection, CURLOPT_POSTFIELDS, ltrim($param_string, '&'));
            }
            $data = json_decode(curl_exec($curl_connection), true);
            curl_close($curl_connection);
            if ($data) {
                return $data;
            }
            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    public function genToken()
    {
        $token = '166fb166';
        $time = time();
        for($i = 9; $i > 0; $i--) {
            if (strpos($time, $i) !== false) {
                $token = str_replace($i, $token, $time);
                break;
            }
        }
        return $token;
    }
}