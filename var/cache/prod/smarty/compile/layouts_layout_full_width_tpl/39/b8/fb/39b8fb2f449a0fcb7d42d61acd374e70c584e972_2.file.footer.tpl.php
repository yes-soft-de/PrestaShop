<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:02:29
  from '/home/uufoidcqh3m0/public_html/themes/ST001/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29edc5106080_16776489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39b8fb2f449a0fcb7d42d61acd374e70c584e972' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/themes/ST001/templates/_partials/footer.tpl',
      1 => 1579726453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29edc5106080_16776489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer-top"> 
<div class="container">
  <div class="row">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

  </div>
</div>
</div>
<div class="footer-container">
   <div class="container">
      <div class="row">
         <div class="footer_inner">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

         </div>
      </div>
      <div class="row">
         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      </div>
   </div>
</div>
<div class="footer-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="footer-bottom-link">
               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBottom'),$_smarty_tpl ) );?>

            </div>
         </div>
         <div class="col-md-12">
            <div class="copyright_outer container">
               <div class="copyright">
                   Copyright © 2020 Agora Chegou - All right reserved. Implemented By 
                  <a class="_blank" href="https://yes-soft.de/" target="_blank">
                    Yes Soft Team
                  </a>
                  .
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentBottom'),$_smarty_tpl ) );?>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php }
}
