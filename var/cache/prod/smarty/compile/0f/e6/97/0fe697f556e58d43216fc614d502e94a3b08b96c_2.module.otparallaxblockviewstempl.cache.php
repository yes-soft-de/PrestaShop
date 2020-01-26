<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:53
  from 'module:otparallaxblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee557d0908_03319732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe697f556e58d43216fc614d502e94a3b08b96c' => 
    array (
      0 => 'module:otparallaxblockviewstempl',
      1 => 1579505440,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ee557d0908_03319732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7448668355e29ee557cc982_27579828';
?>


<div id="custom-parallaxblock" class="custom-parallaxblock parallaxblock-outer" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
/views/img/parallax.jpg">
 <div class="parallaxblock-inner container"> 
	<?php if (isset($_smarty_tpl->tpl_vars['cms_parallaxinfos']->value) && $_smarty_tpl->tpl_vars['cms_parallaxinfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_parallaxinfos']->value['text'];?>

	<?php } else { ?>
	<div class="parallax-block">
	<div class="parallax-inner container-width">
	<div class="parallax-text">
	<div class="parallax-text2">The World’s Most<br>
								Accurate Watch</div>
	<div class="parallax-text3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable..</div>
	<div class="parallax-text4"><a href="#">View more</a></div>
	</div>
	</div>
	</div>
	<?php }?>
 </div>
</div>
<?php }
}
