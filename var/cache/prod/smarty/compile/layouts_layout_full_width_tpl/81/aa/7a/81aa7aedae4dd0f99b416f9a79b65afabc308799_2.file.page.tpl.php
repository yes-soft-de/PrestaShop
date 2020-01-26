<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:02:28
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29edc4de3a85_37315010',
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
function content_5e29edc4de3a85_37315010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10494175935e29edc4ddb950_31471403', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2830691695e29edc4ddcd74_53338068 extends Smarty_Internal_Block
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
class Block_5789716025e29edc4ddc291_20210756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2830691695e29edc4ddcd74_53338068', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14975228755e29edc4de0252_50222681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5630710815e29edc4de0dd0_00913033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13381097265e29edc4ddfa26_93364161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14975228755e29edc4de0252_50222681', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5630710815e29edc4de0dd0_00913033', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17524211745e29edc4de2699_76311487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14038420295e29edc4de1ed1_13804454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17524211745e29edc4de2699_76311487', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10494175935e29edc4ddb950_31471403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10494175935e29edc4ddb950_31471403',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_5789716025e29edc4ddc291_20210756',
  ),
  'page_title' => 
  array (
    0 => 'Block_2830691695e29edc4ddcd74_53338068',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13381097265e29edc4ddfa26_93364161',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14975228755e29edc4de0252_50222681',
  ),
  'page_content' => 
  array (
    0 => 'Block_5630710815e29edc4de0dd0_00913033',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14038420295e29edc4de1ed1_13804454',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17524211745e29edc4de2699_76311487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5789716025e29edc4ddc291_20210756', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13381097265e29edc4ddfa26_93364161', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14038420295e29edc4de1ed1_13804454', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
