<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:03:04
  from '/home/uufoidcqh3m0/public_html/modules/ps_mbo/views/templates/admin/include/tab_module_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ede835c395_39963881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15adf2877d0a7fcba485148f8bcd1bd043ede794' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/modules/ps_mbo/views/templates/admin/include/tab_module_line.tpl',
      1 => 1579505196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ede835c395_39963881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/uufoidcqh3m0/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="row module-item-wrapper-list border-bottom mb-sm-3">
    <div class="col-12 col-sm-2 col-md-1 col-lg-1">
        <div class="module-logo-thumb-list text-center">
            <img alt="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" src="<?php if (isset($_smarty_tpl->tpl_vars['module']->value->image)) {?>../../../<?php echo $_smarty_tpl->tpl_vars['module']->value->image;
} else {
echo @constant('_MODULE_DIR_');
echo $_smarty_tpl->tpl_vars['module']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['module']->value->logo;
}?>" />
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-8 col-lg-9 pl-0">
        <p class="mb-0">
            <span style="display:none"><?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
</span>
            <?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>

            <span class="text-muted">v<?php echo $_smarty_tpl->tpl_vars['module']->value->version;?>
 - by <?php echo $_smarty_tpl->tpl_vars['module']->value->author;?>
</span>
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value->type) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsBought') {?>
                - <span class="module-badge-bought help-tooltip text-warning" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You bought this module on PrestaShop Addons. Thank You."),$_smarty_tpl ) );?>
"><i class="icon-pushpin"></i> <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Bought"),$_smarty_tpl ) );?>
</small></span>
            <?php } elseif (isset($_smarty_tpl->tpl_vars['module']->value->type) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsMustHave') {?>
                - <span class="module-badge-popular help-tooltip text-primary" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module is available on PrestaShop Addons"),$_smarty_tpl ) );?>
"><i class="icon-group"></i> <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Popular"),$_smarty_tpl ) );?>
</small></span>
            <?php } elseif (isset($_smarty_tpl->tpl_vars['module']->value->type) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsPartner') {?>
                - <span class="module-badge-partner help-tooltip text-warning" data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module is available for free thanks to our partner."),$_smarty_tpl ) );?>
"><i class="icon-pushpin"></i> <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Official"),$_smarty_tpl ) );?>
</small></span>
            <?php } elseif (isset($_smarty_tpl->tpl_vars['module']->value->id) && $_smarty_tpl->tpl_vars['module']->value->id > 0) {?>
                <?php if (isset($_smarty_tpl->tpl_vars['module']->value->version_addons) && $_smarty_tpl->tpl_vars['module']->value->version_addons) {?>
                    <span class="label label-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need update'),$_smarty_tpl ) );?>
</span>
                <?php }?>
            <?php }?>
        </p>
        <p class="text-muted">
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value->description) && $_smarty_tpl->tpl_vars['module']->value->description != '') {?>
                <?php echo $_smarty_tpl->tpl_vars['module']->value->description;?>

            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['module']->value->show_quick_view) && $_smarty_tpl->tpl_vars['module']->value->show_quick_view) {?>
                <br><a href="<?php if (isset($_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value)) {
echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;
}?>" class="controller-quick-view" data-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->name,'html','UTF-8' ));?>
"><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more'),$_smarty_tpl ) );?>
</a>
            <?php }?>
        </p>
        <?php if (isset($_smarty_tpl->tpl_vars['module']->value->message) && (empty($_smarty_tpl->tpl_vars['module']->value->name) !== false) && (!isset($_smarty_tpl->tpl_vars['module']->value->type) || ($_smarty_tpl->tpl_vars['module']->value->type != 'addonsMustHave' || $_smarty_tpl->tpl_vars['module']->value->type !== 'addonsNative'))) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><?php echo $_smarty_tpl->tpl_vars['module']->value->message;?>
</div><?php }?>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['module']->value->type) && $_smarty_tpl->tpl_vars['module']->value->type == 'addonsMustHave') {?>
        <div class="col-12 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="text-center">
                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['module']->value->addons_buy_url,' ','+'),'html','UTF-8' ));?>
" onclick="return !window.open(this.href, '_blank');" class="btn btn-primary-reverse btn-outline-primary light-button _blank">
                    <span>
                        <i class="icon-shopping-cart"></i><?php if (isset($_smarty_tpl->tpl_vars['module']->value->price)) {
if (floatval($_smarty_tpl->tpl_vars['module']->value->price) == 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free'),$_smarty_tpl ) );
} elseif (isset($_smarty_tpl->tpl_vars['module']->value->id_currency)) {?> &nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['module']->value->price,'currency'=>$_smarty_tpl->tpl_vars['module']->value->id_currency),$_smarty_tpl ) );
}
}?>
                    </span>
                </a>
            </div>
        </div>
    <?php } elseif (!isset($_smarty_tpl->tpl_vars['module']->value->not_on_disk)) {?>
        <div class="col-12 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="text-center">
                <?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml) > 0) {?>
                <div class="btn-group">
                    <?php $_smarty_tpl->_assignInScope('option', $_smarty_tpl->tpl_vars['module']->value->optionsHtml[0]);?>
                    <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

                    <?php if (count($_smarty_tpl->tpl_vars['module']->value->optionsHtml) > 1) {?>
                    <button type="button" class="btn btn-primary-reverse btn-outline-primary light-button dropdown-toggle" data-toggle="dropdown" >
                        <span class="caret">&nbsp;</span>
                    </button>
                    <ul class="dropdown-menu pull-right">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module']->value->optionsHtml, 'option', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
                            <?php if (strpos($_smarty_tpl->tpl_vars['option']->value,'title="divider"') !== false) {?>
                                <li class="divider">BB</li>
                            <?php } else { ?>
                                <li>AAA<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</li>
                            <?php }?>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-12 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="text-center">
                <form method="POST" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['install_url'],'html','UTF-8' ));?>
">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->options['install_url'],'html','UTF-8' ));?>
" class="btn btn-primary-reverse btn-outline-primary light-button ">
                        <i class="icon-plus-sign-alt"></i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Install'),$_smarty_tpl ) );?>

                    </a>
                </form>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
