<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:53
  from 'module:otshippingblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee554d1a34_24576347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2273288a27b973cf132145203a34c8afc1eafbe' => 
    array (
      0 => 'module:otshippingblockviewstempl',
      1 => 1579506590,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ee554d1a34_24576347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2159244725e29ee5547d2c2_04299134';
?>


<div id="shipping-text">
 <div class="shipping-text-inner container">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_shippinginfos']->value) && $_smarty_tpl->tpl_vars['cms_shippinginfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_shippinginfos']->value['text'];?>

	<?php } else { ?>
	<div class="shipping-outer">
	<div class="shipping-inner">
	<div class="subtitle-part subtitle-part1">
	<div class="subbanner-part-maininnner1">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Free Shipping</div>
	<div class="subtitile2">Shipping in World for orders over $99</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part2">
	<div class="subbanner-part-maininnner2">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Special Gift</div>
	<div class="subtitile2">Give the perfect gift to your loved ones</div>
	</div>
	</div>
	</div>
	</div>
	<div class="subtitle-part subtitle-part3">
	<div class="subbanner-part-maininnner3">
	<div class="subicon"><span class="hide">icon</span></div>
	<div class="subtitle-part-inner">
	<div class="subtitile">
	<div class="subtitile1">Money Back</div>
	<div class="subtitile2">Not receiving an item applied to reward</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php }?>
 </div>
</div>
<?php }
}
