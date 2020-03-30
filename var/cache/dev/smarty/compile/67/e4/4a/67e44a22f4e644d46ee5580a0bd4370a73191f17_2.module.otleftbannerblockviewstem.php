<?php
/* Smarty version 3.1.33, created on 2020-03-29 10:52:15
  from 'module:otleftbannerblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e80c42f477858_30980258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e44a22f4e644d46ee5580a0bd4370a73191f17' => 
    array (
      0 => 'module:otleftbannerblockviewstem',
      1 => 1585141037,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e80c42f477858_30980258 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/otleftbannerblock/views/templates/hook/otleftbannerblock.tpl -->

<div id="custom-leftbannerblock">
  
<?php if (isset($_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value) && $_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value) {
echo $_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value['text'];?>

<?php } else { ?>
<p><a href="#"><img src="img/cms/left.jpg" alt="" /></a></p>
<?php }?>
 
</div>
<!-- end /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/otleftbannerblock/views/templates/hook/otleftbannerblock.tpl --><?php }
}
