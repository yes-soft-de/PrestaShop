<?php
/* Smarty version 3.1.33, created on 2020-03-29 12:24:52
  from '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/admin-agora/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e80d9e49f41f8_82217304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9176705126752dba957538c305a1762bdfbb25dd' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/admin-agora/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1585140930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e80d9e49f41f8_82217304 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
