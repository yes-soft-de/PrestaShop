<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:20
  from '/home/uufoidcqh3m0/public_html/modules/mercadopago/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee34211b60_55472770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f009cbfeae36fbb6bc0ae4e489f4404e03acd4eb' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/modules/mercadopago/views/templates/admin/configure.tpl',
      1 => 1579505718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./template_1.tpl' => 1,
    'file:./template_2.tpl' => 1,
  ),
),false)) {
function content_5e29ee34211b60_55472770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Alert -->
<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
<div class='alert <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alert']->value,'html','UTF-8' ));?>
 alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value,'html','UTF-8' ));?>

</div>
<?php }?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
	<li class="active"><a href="#template_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configurar','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
	<li><a href="#template_2" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Acerca de Mercado Pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="template_1"><?php $_smarty_tpl->_subTemplateRender('file:./template_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
	<div class="tab-pane" id="template_2"><?php $_smarty_tpl->_subTemplateRender('file:./template_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
</div>

<!-- JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript">
    window.onload = function() {    
        var element = document.querySelectorAll("#module_form");
        for (var i=0; i < element.length; i++) {
            element[i].id = "module_form_" + i;
        }
        
        //country form
        var form_credentials = document.querySelector("#module_form_0 .panel .form-wrapper");
        var form_prepend = document.createElement("div");

        form_prepend.innerHTML = "<div class='row'>\
            <div class='col-md-12 pb-25'>\
                <h4 class='title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿En qué país opera tu cuenta de Mercado Pago?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        form_credentials.insertBefore(form_prepend, form_credentials.firstChild);

        //credentials form
        var form_credentials = document.querySelector("#module_form_1 .panel .form-wrapper");
        var form_prepend = document.createElement("div");

        form_prepend.innerHTML = "<div class='row'>\
            <div class='col-md-12'>\
                <h4 class='title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activa tus credenciales según lo que quieras hacer','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>\
        <div class='row pt-15 pb-25'>\
            <div class='col-md-12'>\
                <p class='text-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Realiza pruebas antes de salir al mundo.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Opera de dos formas','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b>:</p>\
                <p class='text-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Por defecto te dejamos','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'el modo Sandbox activo','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'para que hagas testeos antes de empezar a vender.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
                <p class='text-credenciais'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Todo va bien?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desactiva Sandbox','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'al final de la configuración y abre paso a tus ventas online.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>\
            </div>\
        </div>";

        form_credentials.insertBefore(form_prepend, form_credentials.firstChild);
        
        //homolog form
        var form_homolog = document.querySelector("#module_form_2 .panel .form-wrapper");

        form_homolog.innerHTML = "<div class='row'>\
            <div class='col-md-12 pb-10'>\
                <h4 class='title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homologa tu cuenta, solo te llevará unos minutos.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
            <div class='col-md-6'>\
                <p class='text-branded lists-how-configure pb-10'>\
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Completa este proceso para que podamos garantizar, juntos, ','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 \
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'la seguridad de los datos de tus clientes y la adecuación ','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 \
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'a las normas o disposiciones legales de cada país.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 \
                </p>\
                <a href='https://www.mercadopago.com/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country_link']->value,'html','UTF-8' ));?>
/account/credentials/appliance?application_id=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['application']->value,'html','UTF-8' ));?>
' class='btn btn-default btn-credenciais mb-10' target='_blank'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homologa mi cuenta','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a> \
            </div>\
        </div>";

        //basic configuration form
        var checkbox = document.querySelectorAll(".checkbox");
        for (var ii=0; ii < checkbox.length; ii++) {
            checkbox[ii].id = "checkbox_"+ii;
            checkbox[ii].style.border = "1px solid #ccc";
            checkbox[ii].style.padding = "10px";
        }

        var form_basic = document.querySelector("#module_form_3 .panel .form-wrapper");
        var form_basic_prepend = document.createElement("div");

        form_basic_prepend.innerHTML = "<div class='row pb-25'>\
            <div class='col-md-12'>\
                <h4 class='title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hagamos que tu cliente termine su compra de forma rápida, fácil y segura.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        form_basic.insertBefore(form_basic_prepend, form_basic.firstChild);

        //online payments configuration form
        var onlineChecked = "";
        var countOnlineChecked = 0;
        var onlineInputs = document.querySelectorAll(".payment-online-checkbox");
        for(var ion=0; ion < onlineInputs.length; ion++){
            if(onlineInputs[ion].checked == true){
                countOnlineChecked += 1;
            }
        }
        if(countOnlineChecked == onlineInputs.length){
            onlineChecked = "checked";
        }

        var checkbox_online = document.querySelector("#checkbox_0");
        var checkbox_online_prepend = "<div class='all_checkbox'>\
                <input type='checkbox' name='checkmeon' id='checkmeon' "+onlineChecked+" onclick='completeOnlineCheckbox()'> \
                <label for='checkmeon'><b class='pointer pl-5'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selecciona pagos online','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></label>\
        </div>";
        checkbox_online.insertAdjacentHTML('beforebegin', checkbox_online_prepend);

        //offline payments configuration form
        var offlineChecked = "";
        var countOfflineChecked = 0;
        var offlineInputs = document.querySelectorAll(".payment-offline-checkbox");
        for(var ioff=0; ioff < offlineInputs.length; ioff++){
            if(offlineInputs[ioff].checked == true){
                countOfflineChecked += 1;
            }
        }
        if(countOfflineChecked == offlineInputs.length){
            offlineChecked = "checked";
        }

        var countOnlineInputs = document.querySelectorAll(".payment-online-checkbox").length;
        var checkbox_offline = document.querySelector("#checkbox_"+countOnlineInputs);
        var checkbox_offline_prepend = "<div class='all_checkbox'>\
                <input type='checkbox' name='checkmeoff' id='checkmeoff' "+offlineChecked+" onclick='completeOfflineCheckbox()'> \
                <label for='checkmeoff'><b class='pointer pl-5'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selecciona pagos presenciales','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></label>\
        </div>";
        checkbox_offline.insertAdjacentHTML('beforebegin', checkbox_offline_prepend);

        //advanced configuration form
        var form_module = document.querySelector("#module_form_4 .panel .panel-heading");
        var collapse_body = document.querySelector("#module_form_4 .panel .form-wrapper");
        var collapse_body_prepend = document.createElement("div");
        var collapse_footer = document.querySelector("#module_form_4 .panel .panel-footer");
        var collapse_panel = document.querySelector("#module_form_4 .panel");
        var form_group = document.querySelectorAll("#module_form_4 .panel .form-wrapper .form-group");

        var form_group_append = "<hr class='mt-15'>\
        <div class='row mb-15'>\
            <div class='col-md-12'>\
                <h4 class='title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Eres un partner de Mercado Pago?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        for (i=0; i < form_group.length; i++) {
            if(i == 2){
                form_group[i].insertAdjacentHTML('afterend', form_group_append);
            }
            else if(i == 3){
                form_group[i].querySelector("p").style.width = "400px";
            }
        }

        form_module.style.cursor = "pointer";
        form_module.innerHTML += "<span class='btn-collapsible' id='header_plus' style='display:block'>+</span>\
            <span class='btn-collapsible' id='header_less' style='display:none'>-</span>";

        collapse_body_prepend.innerHTML = "<div class='row pb-25'>\
            <div class='col-md-12'>\
                <h4 class='title-checkout-body'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personaliza estas opciones y activa otras herramientas de nuestro módulo listas para usar.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>\
            </div>\
        </div>";

        collapse_body.insertBefore(collapse_body_prepend, collapse_body.firstChild);

        var header_plus = document.querySelector("#header_plus");
        var header_less = document.querySelector("#header_less");

        collapse_body.style.display = "none";
        collapse_footer.style.display = "none";
        form_module.style.borderBottom = "0";
        form_module.style.marginBottom = "0";
        collapse_panel.style.paddingBottom = "0";

        form_module.onclick = function(){
            if(collapse_body.style.display == "none"){
                collapse_body.style.display = "block";
                collapse_footer.style.display = "block";
                header_less.style.display = "block";
                header_plus.style.display = "none";

                form_module.style.borderBottom = "1px solid #eee";
                form_module.style.marginBottom = "15px";
                collapse_panel.style.paddingBottom = "20px";
            }
            else{
                collapse_body.style.display = "none";
                collapse_footer.style.display = "none";
                header_less.style.display = "none";
                header_plus.style.display = "block";

                form_module.style.borderBottom = "0";
                form_module.style.marginBottom = "0";
                collapse_panel.style.paddingBottom = "0";
            }

        }
    }

    //Online payments
    function completeOnlineCheckbox(){
        var onlineCheck = document.getElementById("checkmeon").checked; 
        var onlineInputs = document.querySelectorAll(".payment-online-checkbox");
        for (var i=0; i < onlineInputs.length; i++) {
            if(onlineCheck == true){
                onlineInputs[i].checked = true;
            }
            else{
                onlineInputs[i].checked = false;
            }
        }
    }

    //Offline payments
    function completeOfflineCheckbox(){
        var offlineCheck = document.getElementById("checkmeoff").checked; 
        var offlineInputs = document.querySelectorAll(".payment-offline-checkbox");
        for (var i=0; i < offlineInputs.length; i++) {
            if(offlineCheck == true){
                offlineInputs[i].checked = true;
            }
            else{
                offlineInputs[i].checked = false;
            }
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
