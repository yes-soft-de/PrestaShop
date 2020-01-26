<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:44:32
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29f7a0af79a3_13193800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9fff5f8e564a700256708e714c9dfbb08a79dc' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/catalog/_partials/products-top.tpl',
      1 => 1579458148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5e29f7a0af79a3_13193800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="row products-selection">
  <div class="col-md-6 hidden-sm-down total-products">
    <ul class="display hidden-xs grid_list">
      <li id="grid" class="selected"><a href="#" title="Grid">Grid</a></li>
      <li id="list"><a href="#" title="List">List</a></li>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
      <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    <?php }?>
  </div>
  <div class="col-md-6">
    <div class="row sort-by-row">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13130365965e29f7a0aedb92_69383768', 'sort_by');
?>


      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
    </div>
  </div>
  <div class="col-sm-12 hidden-md-up text-xs-center showing">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

  </div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_13130365965e29f7a0aedb92_69383768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_13130365965e29f7a0aedb92_69383768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
      <?php
}
}
/* {/block 'sort_by'} */
}
