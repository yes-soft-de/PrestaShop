<?php
/* Smarty version 3.1.33, created on 2020-03-28 17:29:08
  from '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/supercheckout/views/templates/hook/gdpr_policy_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7fcfb4488342_92496870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d3a73acc61dcb5cc5d712cccec8ac6e4b3f50cc' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/dev.agorachegou.com.br/modules/supercheckout/views/templates/hook/gdpr_policy_setting.tpl',
      1 => 1570661614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7fcfb4488342_92496870 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['supercheckout_gdpr_setting']->value) && !empty($_smarty_tpl->tpl_vars['supercheckout_gdpr_setting']->value)) {?>
    <div id="supercheckout-policy">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supercheckout_gdpr_setting']->value, 'gdpr_setting');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gdpr_setting']->value) {
?>
            <div class="checkbox">
               
                    <input id="kb_super_policy_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gdpr_setting']->value['policy_id']), ENT_QUOTES, 'UTF-8');?>
" class="" type="checkbox" name="kb_super_policy[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gdpr_setting']->value['policy_id']), ENT_QUOTES, 'UTF-8');?>
]" value="1"/>
                     <label>
                                        <?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['url'] != '' || $_smarty_tpl->tpl_vars['gdpr_setting']->value['url'] != 0) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['gdpr_setting']->value['url'],null,true,$_smarty_tpl->tpl_vars['current_lang_id']->value), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="<?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['is_manadatory'] == 1) {?> required_policy <?php }?>" style="" rel="nofollow">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdpr_setting']->value['description'], ENT_QUOTES, 'UTF-8');?>
 
                        </a>
                                            <?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['is_manadatory']) {?>
                            <span style="display:inline;" class="supercheckout-required">*</span>
                        <?php }?>
                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdpr_setting']->value['description'], ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['is_manadatory']) {?>
                            <span style="display:inline;" class="supercheckout-required">*</span>
                        <?php }?>
                    <?php }?>

                </label>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
