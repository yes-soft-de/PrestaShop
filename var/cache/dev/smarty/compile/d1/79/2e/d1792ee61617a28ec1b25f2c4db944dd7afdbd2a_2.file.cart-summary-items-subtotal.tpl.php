<?php
/* Smarty version 3.1.33, created on 2020-03-26 16:57:22
  from '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/templates/checkout/_partials/cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d2542e50d52_55345843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1792ee61617a28ec1b25f2c4db944dd7afdbd2a' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1585141021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d2542e50d52_55345843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13593336955e7d2542e4e969_53622898', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_13593336955e7d2542e4e969_53622898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_13593336955e7d2542e4e969_53622898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
