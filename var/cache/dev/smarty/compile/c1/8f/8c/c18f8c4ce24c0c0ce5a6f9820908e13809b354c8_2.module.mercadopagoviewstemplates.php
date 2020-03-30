<?php
/* Smarty version 3.1.33, created on 2020-03-28 17:29:23
  from 'module:mercadopagoviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7fcfc3ef18e1_99258129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18f8c4ce24c0c0ce5a6f9820908e13809b354c8' => 
    array (
      0 => 'module:mercadopagoviewstemplates',
      1 => 1585141037,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7fcfc3ef18e1_99258129 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/mercadopago/views/templates/hook/payment_seven.tpl -->
<div class="row">
    <h2 class="title-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Usa el medio de pago que prefieras.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
    
    <?php if ($_smarty_tpl->tpl_vars['credito']->value != 0) {?>
    <div class="col-xs-12 col-md-12">
        <div class="frame-tarjetas">
            <p class="subtitle-checkout">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tarjetas de crédito','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                <span class="badge-checkout">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hasta','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['installments']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cuotas','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </span>
            </p>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarjetas']->value, 'tarjeta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeta']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['tarjeta']->value['type'] == 'credit_card' && Configuration::get($_smarty_tpl->tpl_vars['tarjeta']->value['config']) == 'on') {?>
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tarjeta']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid img-tarjetas" />
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['debito']->value != 0) {?>
	<div class="col-xs-6 col-md-6">
        <div class="frame-tarjetas">
            <p class="subtitle-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tarjetas de débito','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarjetas']->value, 'tarjeta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeta']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['tarjeta']->value['type'] == 'debit_card' && Configuration::get($_smarty_tpl->tpl_vars['tarjeta']->value['config']) == 'on' || $_smarty_tpl->tpl_vars['tarjeta']->value['type'] == 'prepaid_card' && Configuration::get($_smarty_tpl->tpl_vars['tarjeta']->value['config']) == 'on') {?>
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tarjeta']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"class="img-fluid img-tarjetas" />
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
	</div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['efectivo']->value != 0) {?>
    <div class="col-xs-6 col-md-6">
        <div class="frame-tarjetas">
            <p class="subtitle-checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagos en efectivo','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
            
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tarjetas']->value, 'tarjeta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tarjeta']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['tarjeta']->value['type'] != 'credit_card' && $_smarty_tpl->tpl_vars['tarjeta']->value['type'] != 'debit_card' && $_smarty_tpl->tpl_vars['tarjeta']->value['type'] != 'prepaid_card' && Configuration::get($_smarty_tpl->tpl_vars['tarjeta']->value['config']) == 'on') {?>
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tarjeta']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"class="img-fluid img-tarjetas" />
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
	</div>
    <?php }?>

    <div class="col-md-12 pt-20">
        <div class="redirect-frame">
            <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/redirect_checkout.png" class="img-fluid" />
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Te llevamos a nuestro sitio para completar el pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
</div>
<!-- end /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/mercadopago/views/templates/hook/payment_seven.tpl --><?php }
}
