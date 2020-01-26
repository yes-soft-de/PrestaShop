<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:44:24
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29f798b5e105_32018174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3bf85972faad05e901e7c560046a5b5a4d629a' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/listing/product-list.tpl',
      1 => 1579458148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5e29f798b5e105_32018174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14619734845e29f798b48836_01807891', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_header'} */
class Block_4987501035e29f798b491d3_04955851 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h2 class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h2>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_8891897415e29f798b523b2_90886548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
            <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_7057723775e29f798b58464_82461850 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="" class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_5316109265e29f798b59e17_33636181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_14624578925e29f798b5b6b2_54453505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_14619734845e29f798b48836_01807891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14619734845e29f798b48836_01807891',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_4987501035e29f798b491d3_04955851',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_8891897415e29f798b523b2_90886548',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_7057723775e29f798b58464_82461850',
  ),
  'product_list' => 
  array (
    0 => 'Block_5316109265e29f798b59e17_33636181',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_14624578925e29f798b5b6b2_54453505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4987501035e29f798b491d3_04955851', 'product_list_header', $this->tplIndex);
?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <div id="">
          <div class="product-toolbar"> 
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8891897415e29f798b523b2_90886548', 'product_list_top', $this->tplIndex);
?>

          </div>
        </div>
        <input type="hidden" name="carturl" id="carturl" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" />    
        <input type="hidden" name="carttoken" id="carttoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7057723775e29f798b58464_82461850', 'product_list_active_filters', $this->tplIndex);
?>


        <div id="">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5316109265e29f798b59e17_33636181', 'product_list', $this->tplIndex);
?>

        </div>

        <div id="js-product-list-bottom">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14624578925e29f798b5b6b2_54453505', 'product_list_bottom', $this->tplIndex);
?>

        </div>

      <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>

  </section>
<?php
}
}
/* {/block 'content'} */
}
