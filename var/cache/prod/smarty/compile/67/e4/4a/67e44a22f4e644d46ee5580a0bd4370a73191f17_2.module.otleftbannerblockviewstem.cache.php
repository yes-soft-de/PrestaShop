<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:44:25
  from 'module:otleftbannerblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29f7992386c8_51139247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67e44a22f4e644d46ee5580a0bd4370a73191f17' => 
    array (
      0 => 'module:otleftbannerblockviewstem',
      1 => 1579503544,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29f7992386c8_51139247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10534085085e29f799235712_59136757';
?>


<div id="custom-leftbannerblock">
  
<?php if (isset($_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value) && $_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value) {
echo $_smarty_tpl->tpl_vars['cms_leftbannerinfos']->value['text'];?>

<?php } else { ?>
<p><a href="#"><img src="img/cms/left.jpg" alt="" /></a></p>
<?php }?>
 
</div>
<?php }
}
