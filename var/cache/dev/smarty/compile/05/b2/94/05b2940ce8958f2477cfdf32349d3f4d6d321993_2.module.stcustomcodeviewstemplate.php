<?php
/* Smarty version 3.1.33, created on 2020-03-29 15:03:43
  from 'module:stcustomcodeviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e80ff1f5fb661_54476697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05b2940ce8958f2477cfdf32349d3f4d6d321993' => 
    array (
      0 => 'module:stcustomcodeviewstemplate',
      1 => 1585141044,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e80ff1f5fb661_54476697 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/stcustomcode/views/templates/hook/header.tpl --><?php if (isset($_smarty_tpl->tpl_vars['stcustomcode']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['stcustomcode']->value['css']) {?>
    <style type="text/css"><?php echo $_smarty_tpl->tpl_vars['stcustomcode']->value['css'];?>
</style>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['stcustomcode']->value['js']) {?>
    <?php echo '<script'; ?>
 type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['stcustomcode']->value['js'];
echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['stcustomcode']->value['head_code']) {?>
    <?php echo $_smarty_tpl->tpl_vars['stcustomcode']->value['head_code'];?>

    <?php }
}?><!-- end /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/stcustomcode/views/templates/hook/header.tpl --><?php }
}
