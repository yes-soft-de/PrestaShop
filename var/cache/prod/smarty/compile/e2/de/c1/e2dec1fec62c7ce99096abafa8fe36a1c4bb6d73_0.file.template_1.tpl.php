<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:20
  from '/home/uufoidcqh3m0/public_html/modules/mercadopago/views/templates/admin/template_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee3426fba7_14833868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2dec1fec62c7ce99096abafa8fe36a1c4bb6d73' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/modules/mercadopago/views/templates/admin/template_1.tpl',
      1 => 1579505718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ee3426fba7_14833868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-mercadopago">
	<div class="row header-mercadopago">
        <div class="left-details">
            <h2 class="title-checkout-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Diseña la mejor experiencia de pago para tus clientes','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
        </div>
        <div class="right-details">
            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/mpinfo_logo.png" class="img-fluid header-mp-logo" id="payment-logo" />
        </div>
	</div>

	<hr />
	
	<div class="mercadopago-content">
		<div class="row">
            <div class="col-md-12">
                <h4 class="title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sigue estos pasos y maximiza tu conversión:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
            </div>
		</div>
        
        <div class="row pt-15">
            <div class="col-md-2 text-center w-25 px-10">
                <?php if ($_smarty_tpl->tpl_vars['access_token']->value != '' && $_smarty_tpl->tpl_vars['sandbox_access_token']->value != '') {?>
                    <p class="number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="number-checkout-body">1</p>
                <?php }?>
                
                <p class="text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Obtén tus','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'credenciales','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'en tu cuenta de Mercado Pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center w-25 px-10">
                <?php if ($_smarty_tpl->tpl_vars['seller_homolog']->value == true) {?>
                    <p class="number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="number-checkout-body">2</p>
                <?php }?>
                
                <p class="text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homologa tu cuenta para poder cobrar.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center w-25 px-10">
                <?php if ($_smarty_tpl->tpl_vars['standard_test']->value == true) {?>
                    <p class="number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="number-checkout-body">3</p>
                <?php }?>
                
                <p class="text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Elige los','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'medios de pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'disponibles en tu tienda.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center w-25 px-10">
                <?php if ($_smarty_tpl->tpl_vars['count_test']->value != 0) {?>
                    <p class="number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="number-checkout-body">4</p>
                <?php }?>
                
                <p class="text-checkout-body">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deja activo','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'para testear compras en tu tienda.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
            
            <div class="col-md-2 text-center w-25 px-10">
                <?php if ($_smarty_tpl->tpl_vars['sandbox_status']->value != true) {?>
                    <p class="number-checked"><i class="icon-check"></i></p>
                <?php } else { ?>
                    <p class="number-checkout-body">5</p>
                <?php }?>
                <p class="text-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desactívalo cuando veas que todo va bien y ¡empieza a recibir pagos!','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
            </div>
		</div>
		
		<div class="row pt-30">
            <div class="col-md-6">
                <p class="text-branded lists-how-configure">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Las credenciales son las claves que te proporcionamos para que integres de forma rápida y segura.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Debes tener una cuenta homologada en Mercado Pago para cobrar en tu sitio web.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No necesitas saber diseñar o programar para activar Mercado Pago en tu tienda. ','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
		</div>        
	</div>
</div>

<!-- Panel for MP Connect
<div class="panel">
    <div class="panel-heading">
	    <i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credenciales','mod'=>'mercadopago'),$_smarty_tpl ) );?>

	</div>        
    
    <div class="mercadopago-content">
		<div class="row">
        <div class="col-md-12">
            <h4 class="title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activa tus credenciales según lo que quieras hacer.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
        </div>
		</div>
        
        <div class="row pt-15">
            <div class="col-md-12">
                <p class="text-credenciais">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Realiza pruebas antes de salir al mundo.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Opera de dos formas:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b>
                </p>
                <p class="text-credenciais">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Por defecto te dejamos','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'el modo Sandbox activo','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'para que hagas testeos antes de empezar a vender.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
                <p class="text-credenciais">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Todo va bien?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desactiva Sandbox','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'al final de la configuración y abre paso a tus ventas online.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
        </div>
        
        <div class="row pt-25">
            <div class="col-md-12">
                <a class="btn btn-default btn-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quiero mis credenciales','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
            </div>
        </div>
        
        <div class="row pt-25">
            <div class="col-md-6">
                <p class="text-branded lists-how-configure">
                    <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Atención:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Crea una cuenta en Mercado Pago para obtener tus credenciales.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    <a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Homologa tu cuenta','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a> 
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'en Mercado Pago para ir a Producción y cobrar en tu tienda.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                </p>
            </div>
        </div>
    </div>
</div>
-->

<!-- forms rendered via class from mercadopago.php -->
<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['country_form']->value,'html','UTF-8' )));?>

<?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['credentials']->value,'html','UTF-8' )));?>


<?php if ($_smarty_tpl->tpl_vars['access_token']->value != '' && $_smarty_tpl->tpl_vars['sandbox_access_token']->value != '') {?>
  
    <?php if ($_smarty_tpl->tpl_vars['sandbox_status']->value == true || $_smarty_tpl->tpl_vars['seller_homolog']->value == true) {?>
        <div style="display: none"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homolog_form']->value,'html','UTF-8' )));?>
</div>
    <?php } else { ?>
        <div style="display: block"><?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homolog_form']->value,'html','UTF-8' )));?>
</div>
    <?php }?>
    
    <?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['standard_form']->value,'html','UTF-8' )));?>

    <?php echo html_entity_decode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advanced_form']->value,'html','UTF-8' )));?>

    
    <?php if ($_smarty_tpl->tpl_vars['sandbox_status']->value == true) {?>
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prueba tu tienda','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        </div>        

        <div class="mercadopago-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Todo configurado? Ve a tu tienda en modo Sandbox','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>

            <div class="row pt-15">
                <div class="col-md-12">
                    <p class="text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visita tu tienda como si fueras uno de tus mejores clientes.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                    <p class="text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Revisa que todo esté bien para impresionarlos y aumentar tus ventas.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>

            <div class="row pt-25">
                <div class="col-md-12">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base']->value,'html','UTF-8' ));?>
" target="_blank" class="btn btn-default btn-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quiero testear mis ventas','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comienza a vender','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        </div>        

        <div class="mercadopago-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-checkout-body"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Todo listo para el despegue de tus ventas','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>

            <div class="row pt-15">
                <div class="col-md-12">
                    <p class="text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ya saliste a Producción. Solo falta que tus mejores clientes lleguen a tu tienda','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                    <p class="text-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'para vivir la mejor experiencia de compra online com Mercado Pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>

            <div class="row pt-25">
                <div class="col-md-12">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_base']->value,'html','UTF-8' ));?>
" target="_blank" class="btn btn-default btn-credenciais"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visitar mi tienda','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
    </div>
    <?php }
}?>

<!-- Evaluation modal -->
<hr class="hr-mp-modal">
<div class="row">
    <div class="col-md-8">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Algo anda mal? Ponte en','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        
        <?php if ($_smarty_tpl->tpl_vars['country_link']->value == 'mlb') {?>
          <a href="https://www.mercadopago.com.br/developers/pt/support" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contacto con nuestro soporte','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
        <?php } else { ?>
          <a href="https://www.mercadopago.com.br/developers/es/support" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contacto con nuestro soporte','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
        <?php }?>
    </div>
    
    <div class="col-md-4 text-right">
        <a class="link-modal-trigger lists-how-configure" data-toggle="modal" data-target="#rating-modal">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tu opinión nos ayuda a mejorar','mod'=>'mercadopago'),$_smarty_tpl ) );?>

        </a>

        <!-- Modal -->
        <div class="modal rating-modal fade" id="rating-modal" tabindex="-1" role="dialog" aria-labelledby="rating-modal">
            <div class="modal-dialog rating-modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header rating-modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="myModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tu opinión nos ayuda a mejorar.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h3>
                    </div>
                        
                    <form action="" method="post">
                        <div class="modal-body rating-modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="label-rating-input">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Del 1 al 10, ¿qué tan probable es que recomiendes nuestro módulo a un amigo?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                                    </p>
                                    <div class="rating-box pb-10">
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                            <div class="rating-input">
                                                <input type="radio" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" name="mercadopago-rating" id="rating<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" class="pointer" /><br>
                                                <label for="rating<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
" class="label-rating pointer"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value,'html','UTF-8' ));?>
</label>
                                            </div>
                                        <?php }
}
?>
                                    </div>

                                    <div class="col-md-6">
                                        <p>1 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Nada probable','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="fl-right">10 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Muy probable','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                                    </div>
                                </div>

                                <div class="col-md-12 pt-30">
                                    <p class="label-rating-input"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Comentarios o sugerencias? Este es el espacio ideal:','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</b></p>
                                    <textarea name="mercadopago-comments" class="textarea-rating-module" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Escribe tu comentario','mod'=>'mercadopago'),$_smarty_tpl ) );?>
"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer rating-modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cerrar','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</button>
                            <input type="submit" class="btn btn-primary btn-rating-submit" name="submitMercadopagoRating" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enviar','mod'=>'mercadopago'),$_smarty_tpl ) );?>
" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div><?php }
}
