<?php
/* Smarty version 3.1.33, created on 2020-03-29 10:52:15
  from '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e80c42f523979_14562980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03ddd8380e6734dbea70c1d0013f21f4c60fafad' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/templates/_partials/footer.tpl',
      1 => 1585141021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e80c42f523979_14562980 (Smarty_Internal_Template $_smarty_tpl) {
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
