<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:53
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/_partials/miniatures/product-slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee5575b172_10825986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1489b9c31c87f8bd54cb0c5908e4730c7300e9f4' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/_partials/miniatures/product-slider.tpl',
      1 => 1579458148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5e29ee5575b172_10825986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '157485785e29ee55734699_31230264';
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15229154245e29ee55735ae2_34942276', 'product_miniature_item');
?>

<?php }
/* {block 'quick_view'} */
class Block_2826010725e29ee55742de5_44743501 extends Smarty_Internal_Block
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
class Block_18376154875e29ee55744b27_66652600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
					  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
					<?php }?>
				  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_thumbnail'} */
class Block_20290584715e29ee55737b09_04228540 extends Smarty_Internal_Block
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
			 <div class="cart_main">
			 <div class="addtocart-button">
					<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
						<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
						<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
						<input type="hidden" class="input-group form-control" value="1" name="qty" />
						<button data-button-action="add-to-cart" class="btn btn-primary">Add to cart</button>
					  </form>
			</div>
			  <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2826010725e29ee55742de5_44743501', 'quick_view', $this->tplIndex);
?>

				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18376154875e29ee55744b27_66652600', 'product_variants', $this->tplIndex);
?>

			</div>
			
			</div>
			<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_1887786425e29ee55748629_28802261 extends Smarty_Internal_Block
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
class Block_59155075e29ee5574b227_94697018 extends Smarty_Internal_Block
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
                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
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
/* {block 'product_flags'} */
class Block_5922972245e29ee55755d02_44438452 extends Smarty_Internal_Block
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
/* {block 'product_reviews'} */
class Block_115785405e29ee557596a3_16879053 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
class Block_15229154245e29ee55735ae2_34942276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_15229154245e29ee55735ae2_34942276',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_20290584715e29ee55737b09_04228540',
  ),
  'quick_view' => 
  array (
    0 => 'Block_2826010725e29ee55742de5_44743501',
  ),
  'product_variants' => 
  array (
    0 => 'Block_18376154875e29ee55744b27_66652600',
  ),
  'product_name' => 
  array (
    0 => 'Block_1887786425e29ee55748629_28802261',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_59155075e29ee5574b227_94697018',
  ),
  'product_flags' => 
  array (
    0 => 'Block_5922972245e29ee55755d02_44438452',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_115785405e29ee557596a3_16879053',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20290584715e29ee55737b09_04228540', 'product_thumbnail', $this->tplIndex);
?>

			
		</div>

	
	
    <div class="product-description">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1887786425e29ee55748629_28802261', 'product_name', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59155075e29ee5574b227_94697018', 'product_price_and_shipping', $this->tplIndex);
?>

    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5922972245e29ee55755d02_44438452', 'product_flags', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115785405e29ee557596a3_16879053', 'product_reviews', $this->tplIndex);
?>

	
	
	
 </div>	
  </div>
</article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
