<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class HeaderAds extends Module
{
    public function __construct()
    {
        $this->name = 'headerads';
        $this->version = '1.0.0';
        $this->author = 'Qusai Ali';
        $this->tab = 'administration';
        $this->secure_key = Tools::encrypt($this->name);
        $this->need_instance = 0;
        $this->bootstrap = true;       
        parent::__construct();
        $this->displayName = $this->l('HeaderAds');
        $this->description = $this->l('Edit Ads in header');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        $this->ps_versions_compliancy = array('min' => '1.6.0.0', 'max' => _PS_VERSION_);
    }
    
    public function install(){
        return parent::install() && $this->installModuleTab();
    }
    public function uninstall(){
        return $this->uninstallModuleTab() && parent::uninstall();
    }
    
    public function installModuleTab()
    {
        $tab = new Tab;
        $langs = language::getLanguages();
        foreach($langs as $lang)
            $tab->name[$lang['id_lang']] = 'HeaderAds';
        $tab->module = $this->name;
        $tab->id_parent = 0;
        $tab->class_name = 'AdminHeaderAds';
        return $tab->save();
    }
    public function uninstallModuleTab(){
        $id_tab = Tab::getIdFromClassName('AdminHeaderAds');
        if($id_tab){
            $tab = new Tab ($id_tab);
            return $tab->delete();
        }
        return true;
    }
}

?>