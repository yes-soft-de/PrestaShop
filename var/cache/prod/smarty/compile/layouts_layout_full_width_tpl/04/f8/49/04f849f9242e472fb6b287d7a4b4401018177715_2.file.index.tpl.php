<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:53
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee55502049_08386631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f849f9242e472fb6b287d7a4b4401018177715' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/index.tpl',
      1 => 1579458149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ee55502049_08386631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13681825795e29ee554fe372_50995644', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19070368455e29ee554fed15_18354695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_4233964245e29ee555002b7_97554269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_7260500245e29ee554ffab1_25063483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4233964245e29ee555002b7_97554269', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13681825795e29ee554fe372_50995644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_13681825795e29ee554fe372_50995644',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19070368455e29ee554fed15_18354695',
  ),
  'page_content' => 
  array (
    0 => 'Block_7260500245e29ee554ffab1_25063483',
  ),
  'hook_home' => 
  array (
    0 => 'Block_4233964245e29ee555002b7_97554269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19070368455e29ee554fed15_18354695', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7260500245e29ee554ffab1_25063483', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
