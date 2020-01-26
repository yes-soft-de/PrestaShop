<?php
/* Smarty version 3.1.33, created on 2020-01-24 14:51:44
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/checkout/checkout-process.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2b4ad025c053_38271544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d058ef797c5957a5ff6ee4e8d359212f65be72' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/checkout/checkout-process.tpl',
      1 => 1579458148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2b4ad025c053_38271544 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value, 'step', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['step']->value) {
?>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl ) );?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
