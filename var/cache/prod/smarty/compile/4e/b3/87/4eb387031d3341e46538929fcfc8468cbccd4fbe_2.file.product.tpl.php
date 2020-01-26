<?php
/* Smarty version 3.1.33, created on 2020-01-24 01:23:11
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2a8d4f249ea6_52618589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eb387031d3341e46538929fcfc8468cbccd4fbe' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1579808938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5e2a8d4f249ea6_52618589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208065745e2a8d4f2260e3_15598047', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_16412036855e2a8d4f227f64_13713976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
				<img
				  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
		            alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
				  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
				>
			  </a>
			<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_2299789925e2a8d4f230c88_93859241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <a href="#" class="quick-view" data-link-action="quickview">
				<i class="material-icons search">&#xE8B6;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			  </a>
			  <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_variants'} */
class Block_19582796285e2a8d4f2323e6_48001789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
				  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
				<?php }?>
			  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_12525348675e2a8d4f234ed6_32353096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h1>
      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_7114176855e2a8d4f238763_80092453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php }?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


              <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

			
			
			
          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_21064812885e2a8d4f244c71_35231384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_flags'} */
class Block_11279482445e2a8d4f246342_79646236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
          <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_miniature_item'} */
class Block_208065745e2a8d4f2260e3_15598047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_208065745e2a8d4f2260e3_15598047',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_16412036855e2a8d4f227f64_13713976',
  ),
  'quick_view' => 
  array (
    0 => 'Block_2299789925e2a8d4f230c88_93859241',
  ),
  'product_variants' => 
  array (
    0 => 'Block_19582796285e2a8d4f2323e6_48001789',
  ),
  'product_name' => 
  array (
    0 => 'Block_12525348675e2a8d4f234ed6_32353096',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_7114176855e2a8d4f238763_80092453',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_21064812885e2a8d4f244c71_35231384',
  ),
  'product_flags' => 
  array (
    0 => 'Block_11279482445e2a8d4f246342_79646236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
 <div class="thumbnail-container btn_hover">
    <div class="thumbnail-inner">
    
	
		<div class="thumbnail-image-inner">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16412036855e2a8d4f227f64_13713976', 'product_thumbnail', $this->tplIndex);
?>

			 <div class="cart_main">
			
			 	<div class="product-add-to-cart addtocart-button">
				<form action="" class="cart-form-url" method="post">
					<input type="hidden" name="token" class="cart-form-token" value="">
					<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
					<input type="hidden" class="input-group form-control" value="1" name="qty" />
					<button data-button-action="add-to-cart" class="btn btn-primary">Adicionar ao carrinho</button>
				  </form>
			</div>

			<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2299789925e2a8d4f230c88_93859241', 'quick_view', $this->tplIndex);
?>

			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19582796285e2a8d4f2323e6_48001789', 'product_variants', $this->tplIndex);
?>

			</div>


			</div>
		</div>

	
	
    <div class="product-description">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12525348675e2a8d4f234ed6_32353096', 'product_name', $this->tplIndex);
?>

	<div class="product-desc">	<?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7114176855e2a8d4f238763_80092453', 'product_price_and_shipping', $this->tplIndex);
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21064812885e2a8d4f244c71_35231384', 'product_reviews', $this->tplIndex);
?>

	 		
    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11279482445e2a8d4f246342_79646236', 'product_flags', $this->tplIndex);
?>

    
</div>
  </div>
</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
