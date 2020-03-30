<?php
/* Smarty version 3.1.33, created on 2020-03-29 15:03:43
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e80ff1faf1308_18463372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1585141020,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e80ff1faf1308_18463372 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info">
  <div class="user-info">
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
   <div class="user-icon"></div>
   <ul class="userinfo-toggle">

      <li>
      <a
      class="account"
      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
      title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
"
      rel="nofollow"
      >
      <!--<i class="material-icons hidden-md-up logged">&#xE7FF;</i>-->
      <span class="hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a>
      </li>
      <li>
      <a
      class="logout hidden-sm-down"
      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
      rel="nofollow"
      >
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </a>
      </li>
    </ul>      
    <?php } else { ?>
      <a
      href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
      title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conecte-se','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>
"
      rel="nofollow"
      >
        <div class="user-icon"></div>    
      </a>
    <?php }?>

  </div>
</div><!-- end /home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/themes/ST001/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
