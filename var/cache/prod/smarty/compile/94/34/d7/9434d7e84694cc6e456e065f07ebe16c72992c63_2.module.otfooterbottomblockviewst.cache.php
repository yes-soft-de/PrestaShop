<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:02:29
  from 'module:otfooterbottomblockviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29edc520a9d8_97580052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9434d7e84694cc6e456e065f07ebe16c72992c63' => 
    array (
      0 => 'module:otfooterbottomblockviewst',
      1 => 1579507886,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29edc520a9d8_97580052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11649656075e29edc5207091_78298638';
?>


<div id="footerbottom-text">
 <div class="footerbottom-text-inner container">
	<?php if (isset($_smarty_tpl->tpl_vars['cms_footerbottominfos']->value) && $_smarty_tpl->tpl_vars['cms_footerbottominfos']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['cms_footerbottominfos']->value['text'];?>

	<?php } else { ?>
	<div class="bottom-link bottom-left">
	<ul class="link-inner">
	<li><a href="#">home</a></li>
	<li><a href="#">about</a></li>
	<li><a href="#">work</a></li>
	<li><a href="#">home</a></li>
	<li><a href="#">team</a></li>
	<li><a href="#">blog</a></li>
	<li><a href="#">contact</a></li>
	</ul>
	<ul class="icon-wrapper">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<?php }?>
 </div>
</div>
<?php }
}
