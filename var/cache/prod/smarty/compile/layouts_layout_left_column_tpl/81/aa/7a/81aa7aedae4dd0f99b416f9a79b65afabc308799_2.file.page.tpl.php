<?php
/* Smarty version 3.1.33, created on 2020-01-24 01:30:25
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2a8f011e2da3_60998089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81aa7aedae4dd0f99b416f9a79b65afabc308799' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/page.tpl',
      1 => 1579458149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2a8f011e2da3_60998089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138746065e2a8f011c5091_77077450', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9646456235e2a8f011c6588_68952698 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_11775912255e2a8f011c5976_10773813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9646456235e2a8f011c6588_68952698', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16061454285e2a8f011dee80_78484466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5072433785e2a8f011dfa40_10080224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19213038375e2a8f011de626_72448663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16061454285e2a8f011dee80_78484466', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5072433785e2a8f011dfa40_10080224', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6481177165e2a8f011e19f0_04785545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5042051875e2a8f011e0ba1_76053788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6481177165e2a8f011e19f0_04785545', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1138746065e2a8f011c5091_77077450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1138746065e2a8f011c5091_77077450',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11775912255e2a8f011c5976_10773813',
  ),
  'page_title' => 
  array (
    0 => 'Block_9646456235e2a8f011c6588_68952698',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19213038375e2a8f011de626_72448663',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16061454285e2a8f011dee80_78484466',
  ),
  'page_content' => 
  array (
    0 => 'Block_5072433785e2a8f011dfa40_10080224',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5042051875e2a8f011e0ba1_76053788',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6481177165e2a8f011e19f0_04785545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11775912255e2a8f011c5976_10773813', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19213038375e2a8f011de626_72448663', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5042051875e2a8f011e0ba1_76053788', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
