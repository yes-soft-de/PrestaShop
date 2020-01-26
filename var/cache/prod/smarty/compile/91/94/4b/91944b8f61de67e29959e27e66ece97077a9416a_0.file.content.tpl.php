<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:02:17
  from '/home/uufoidcqh3m0/public_html/admin-agora/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29edb91b5391_60568109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91944b8f61de67e29959e27e66ece97077a9416a' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/admin-agora/themes/default/template/content.tpl',
      1 => 1579448836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29edb91b5391_60568109 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
