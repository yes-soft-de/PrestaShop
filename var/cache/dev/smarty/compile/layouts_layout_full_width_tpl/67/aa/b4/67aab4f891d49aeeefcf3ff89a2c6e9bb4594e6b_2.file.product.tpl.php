<?php
/* Smarty version 3.1.33, created on 2020-03-29 15:03:22
  from '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e80ff0ada0c02_54164460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67aab4f891d49aeeefcf3ff89a2c6e9bb4594e6b' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/templates/catalog/product.tpl',
      1 => 1585510942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product-slider.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5e80ff0ada0c02_54164460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285609355e80ff0ad40376_37448352', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1504989975e80ff0ad421b0_75071603', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6866968135e80ff0ad4c351_96987738', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_285609355e80ff0ad40376_37448352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_285609355e80ff0ad40376_37448352',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_1504989975e80ff0ad421b0_75071603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1504989975e80ff0ad421b0_75071603',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_flags'} */
class Block_17585090765e80ff0ad4e8b9_51758187 extends Smarty_Internal_Block
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
/* {block 'product_cover_tumbnails'} */
class Block_5534407585e80ff0ad57292_33352542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_cover_tumbnails'} */
/* {block 'page_content'} */
class Block_18228428485e80ff0ad4e0f1_13963317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17585090765e80ff0ad4e8b9_51758187', 'product_flags', $this->tplIndex);
?>

                  
                  <div class="col-sm-2 hidden-sm-down bullets">

                  </div>
                  <div class="col-sm-9 col-xs-12 main-block">
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5534407585e80ff0ad57292_33352542', 'product_cover_tumbnails', $this->tplIndex);
?>
   
                      <div class="scroll-box-arrows">
                        <i class="material-icons left">&#xE314;</i>
                        <i class="material-icons right">&#xE315;</i>
                      </div>
                  </div>

    
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3968434725e80ff0ad4d6a8_20841667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
              
              <div class="product-slider">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18228428485e80ff0ad4e0f1_13963317', 'page_content', $this->tplIndex);
?>

            </div>
          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_5546008845e80ff0ad5dba6_50028226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_4650932285e80ff0ad5d3a6_61309446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5546008845e80ff0ad5dba6_50028226', 'page_title', $this->tplIndex);
?>
</h1>
                <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_19116208675e80ff0ad5ca89_84139923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4650932285e80ff0ad5d3a6_61309446', 'page_header', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_6851347445e80ff0ad5fd78_58102262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>

                  </div>
                <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_16100382655e80ff0ad62112_16660762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_prices'} */
/* {block 'hook_display_reassurance'} */
class Block_7239875445e80ff0ad63581_80067557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                  <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_customization'} */
class Block_4737788495e80ff0ad67ad5_35179735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                  <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_21025226375e80ff0ad6f499_86596791 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_18484074615e80ff0ad739e5_13469719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_630595355e80ff0ad70a58_84891942 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                          <section class="product-pack">
                            <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18484074615e80ff0ad739e5_13469719', 'product_miniature', $this->tplIndex);
?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </section>
                        <?php }?>
                      <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_13550107525e80ff0ad766d1_12470539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_11585729555e80ff0ad77c36_09396992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_16645786825e80ff0ad79166_27999352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                      <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_15228478985e80ff0ad7a558_77907241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                      <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_11235070735e80ff0ad6c4d7_43535104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21025226375e80ff0ad6f499_86596791', 'product_variants', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_630595355e80ff0ad70a58_84891942', 'product_pack', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13550107525e80ff0ad766d1_12470539', 'product_discounts', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11585729555e80ff0ad77c36_09396992', 'product_add_to_cart', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16645786825e80ff0ad79166_27999352', 'product_additional_info', $this->tplIndex);
?>

    
                      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15228478985e80ff0ad7a558_77907241', 'product_refresh', $this->tplIndex);
?>

                    </form>
                  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description'} */
class Block_13611518865e80ff0ad7f971_66449171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                           <div class="product-description col-xs-12"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                         <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_19288808655e80ff0ad83f15_06839954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                   <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_9239038995e80ff0ad86835_03700787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                     <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                      <div id="attachments">
                         <section class="product-attachments">
                           <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                             <div class="attachment">
                               <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                               <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p
                               ><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                               </a>
                             </div>
                           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                         </section>
                       </div>
                     <?php }?>
                   <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_14300304835e80ff0ad7c167_03269607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	     	        <!-- description -->
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                    <h2 class="title">
                       <a
                         class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                         data-toggle="tab"
                         href="#description"
                         role="tab"
                         aria-controls="description"
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </h2>
                     <div class="block" id="description">
                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13611518865e80ff0ad7f971_66449171', 'product_description', $this->tplIndex);
?>

                      </div>
                  <?php }?>
                  <!-- product-details 
                  <h2 class="title">
                    <a
                      class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                      data-toggle="tab"
                      href="#product-details"
                      role="tab"
                      aria-controls="product-details"
                      <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                  </h2>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19288808655e80ff0ad83f15_06839954', 'product_details', $this->tplIndex);
?>

                   -->
                  <!-- product-attachments -->
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <h2 class="nav-item">
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#attachments"
                        role="tab"
                        aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </h2>
                    
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9239038995e80ff0ad86835_03700787', 'product_attachments', $this->tplIndex);
?>

                   
                  <?php }?>
                  
                  <!-- product-Key -->
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                  <div class="row">
                    <span>
                      <a
                        class="nav-link"
                        data-toggle="tab"
                        href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                        role="tab"
                        aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </span>
                  </div>
                  <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                   <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

               </div>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_miniature'} */
class Block_18972734025e80ff0ad99ab4_11748249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					 <li class="item">
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
					</li>
				  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_8264505135e80ff0ad96ff2_72607124 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
        <section class="product-accessories clearfix">
          <h1 class="h5 main-title text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
         
			<ul id="accessories-carousel" class="owl-carousel">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18972734025e80ff0ad99ab4_11748249', 'product_miniature', $this->tplIndex);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
          
        </section>
      <?php }?>
    <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_18250799295e80ff0ad9bf30_09278363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_20802479505e80ff0ad9d891_75244695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_12064768435e80ff0ad9f532_28009739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14188752205e80ff0ad9ecb8_62681172 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12064768435e80ff0ad9f532_28009739', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6866968135e80ff0ad4c351_96987738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6866968135e80ff0ad4c351_96987738',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3968434725e80ff0ad4d6a8_20841667',
  ),
  'page_content' => 
  array (
    0 => 'Block_18228428485e80ff0ad4e0f1_13963317',
  ),
  'product_flags' => 
  array (
    0 => 'Block_17585090765e80ff0ad4e8b9_51758187',
  ),
  'product_cover_tumbnails' => 
  array (
    0 => 'Block_5534407585e80ff0ad57292_33352542',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19116208675e80ff0ad5ca89_84139923',
  ),
  'page_header' => 
  array (
    0 => 'Block_4650932285e80ff0ad5d3a6_61309446',
  ),
  'page_title' => 
  array (
    0 => 'Block_5546008845e80ff0ad5dba6_50028226',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_6851347445e80ff0ad5fd78_58102262',
  ),
  'product_prices' => 
  array (
    0 => 'Block_16100382655e80ff0ad62112_16660762',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_7239875445e80ff0ad63581_80067557',
  ),
  'product_customization' => 
  array (
    0 => 'Block_4737788495e80ff0ad67ad5_35179735',
  ),
  'product_buy' => 
  array (
    0 => 'Block_11235070735e80ff0ad6c4d7_43535104',
  ),
  'product_variants' => 
  array (
    0 => 'Block_21025226375e80ff0ad6f499_86596791',
  ),
  'product_pack' => 
  array (
    0 => 'Block_630595355e80ff0ad70a58_84891942',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_18484074615e80ff0ad739e5_13469719',
    1 => 'Block_18972734025e80ff0ad99ab4_11748249',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_13550107525e80ff0ad766d1_12470539',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_11585729555e80ff0ad77c36_09396992',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_16645786825e80ff0ad79166_27999352',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_15228478985e80ff0ad7a558_77907241',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_14300304835e80ff0ad7c167_03269607',
  ),
  'product_description' => 
  array (
    0 => 'Block_13611518865e80ff0ad7f971_66449171',
  ),
  'product_details' => 
  array (
    0 => 'Block_19288808655e80ff0ad83f15_06839954',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_9239038995e80ff0ad86835_03700787',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_8264505135e80ff0ad96ff2_72607124',
  ),
  'product_footer' => 
  array (
    0 => 'Block_18250799295e80ff0ad9bf30_09278363',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_20802479505e80ff0ad9d891_75244695',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14188752205e80ff0ad9ecb8_62681172',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12064768435e80ff0ad9f532_28009739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

    <div class="product-details">
      <div class="col-xs-12 product-wrapper">
          <div class="overlay"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3968434725e80ff0ad4d6a8_20841667', 'page_content_container', $this->tplIndex);
?>

        </div>
        
        <div class="row info-wrapper">
            <div class="col-md-4 col-sm-6 col-xs-12 down-block">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19116208675e80ff0ad5ca89_84139923', 'page_header_container', $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6851347445e80ff0ad5fd78_58102262', 'product_description_short', $this->tplIndex);
?>

                
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16100382655e80ff0ad62112_16660762', 'product_prices', $this->tplIndex);
?>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 hidden-sm down-block">
              
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7239875445e80ff0ad63581_80067557', 'hook_display_reassurance', $this->tplIndex);
?>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 down-block">
                <div class="product-information">
                
    
                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4737788495e80ff0ad67ad5_35179735', 'product_customization', $this->tplIndex);
?>

                <?php }?>
    
                <div class="product-actions">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11235070735e80ff0ad6c4d7_43535104', 'product_buy', $this->tplIndex);
?>

    
                </div>
                
            </div>
            </div>
        </div>  
        
        
          
      </div>
    </div>
     
	 <div class="container">
	     	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14300304835e80ff0ad7c167_03269607', 'product_tabs', $this->tplIndex);
?>
 
          </div>
 
	
	 
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8264505135e80ff0ad96ff2_72607124', 'product_accessories', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18250799295e80ff0ad9bf30_09278363', 'product_footer', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20802479505e80ff0ad9d891_75244695', 'product_images_modal', $this->tplIndex);
?>


	 </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14188752205e80ff0ad9ecb8_62681172', 'page_footer_container', $this->tplIndex);
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
