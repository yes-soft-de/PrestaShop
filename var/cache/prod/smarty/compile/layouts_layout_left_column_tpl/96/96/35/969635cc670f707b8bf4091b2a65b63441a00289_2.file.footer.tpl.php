<?php
/* Smarty version 3.1.33, created on 2020-01-24 14:51:44
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2b4ad05bdcd4_98955856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '969635cc670f707b8bf4091b2a65b63441a00289' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/checkout/_partials/footer.tpl',
      1 => 1579458148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2b4ad05bdcd4_98955856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7574423105e2b4ad05b90b3_07631092', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_7574423105e2b4ad05b90b3_07631092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7574423105e2b4ad05b90b3_07631092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
