<?php
/* Smarty version 3.1.33, created on 2020-01-23 14:04:20
  from '/home/uufoidcqh3m0/public_html/modules/mercadopago/views/templates/admin/template_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e29ee342bdb35_27584546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c805f71d3119ac46ee5d12665c9ffaf049830785' => 
    array (
      0 => '/home/uufoidcqh3m0/public_html/modules/mercadopago/views/templates/admin/template_2.tpl',
      1 => 1579505720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e29ee342bdb35_27584546 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-landing">	
	<div class="mercadopago-content">
		
        <div class="mercadopago-banner" style="background-image: url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/banner.jpg)">
            <div class="row mg-0">
                <div class="col-md-7 banner-gradient">
                    <div class="label-banner">
                        <h2 class="title-banner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Procesa pagos y despega tus ventas','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
                        <p class="text-banner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oferece a tus clientes la mejor','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'experiencia de pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                        <a onclick="document.querySelectorAll('.nav-tabs li a')[0].click()" class="btn btn-default btn-banner">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configura Mercado Pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-installments">
            <div class="row row-installments">
                <div class="col-md-6">
                    <p class="text-installments">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Muestra tus promociones','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'y vende en cuotas con la','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'mejor financiación posible','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </p>
                </div>
                
                <div class="col-md-6 mr--10">
                    <img class="img-fluid img-tarjetitas" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/tarjetitas.png" />
                </div>
            </div>
            
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="info-installments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Te cobraremos una comisión de cada pago que recibas.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-beneficios">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title-beneficios">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Cuáles son los beneficios de','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'cobrar con Mercado Pago?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </h2>
                    
                    <div class="panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/card.png" />
                        <span class="text-beneficios"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cobra como quieras y vende sin límites.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span>
                    </div>
                    
                    <div class="panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/thick.png" />
                        <span class="text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximiza tu conversión con la mejor','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'experiencia de pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                    
                    <div class="panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/i-custom.png" />
                        <span class="text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tienes herramientas listas para usar y','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'especialistas dispuestos a ayudarte.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <img class="img-fluid img-beneficios" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/checkout2.png" />
                </div>
            </div>
        </div>
        
        <div class="mercadopago-recibopagos" style="background-image: url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/bg-recibepagos.png)">            
            <div class="row">           
                <h2 class="title-recibopagos"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Cómo recibo los pagos?','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</h2>
                
                <div class="col-md-4 text-center px-10">
                    <p class="number-recibopagos number-recibopagos-after">1</p>
                    <p class="text-checkout-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tus clientes pagan con el','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'medio de pago que prefieran.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </p>
                </div>
                
                <div class="col-md-4 text-center px-10">
                    <p class="number-recibopagos number-recibopagos-after number-recibopagos-before-green">2</p>
                    <p class="text-checkout-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'El dinero se acredita en','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tu cuenta de Mercado Pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </p>
                </div>
                
                <div class="col-md-4 text-center px-10">
                    <p class="number-recibopagos number-recibopagos-before">3</p>
                    <p class="text-checkout-body">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Una vez disponible,','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'lo transfieres sin costo adicional a tu cuenta bancaria.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                   </p>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-beneficios">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid img-puedohacer" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/checkout1.png" />
                </div>
                
                <div class="col-md-6">
                    <h2 class="title-beneficios">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'¿Qué puedo hacer con','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mercado Pago en mi tienda?','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </h2>
                    
                    <div class="panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/un-click.png" />
                        <span class="text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compra con un click: recordamos','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'los datos tus usuarios logueados.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                    
                    <div class="panel-text-icon">
                        <img class="img-fluid icon-mercadopago pl-2 pr-20" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/perfil.png" />
                        <span class="text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pago como invitado: no hace falta que tus','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'clientes abran una cuenta en Mercado Pago.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                    
                    <div class="panel-text-icon">
                        <img class="img-fluid icon-mercadopago" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/icons/devolucion.png" />
                        <span class="text-beneficios">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Devolución de pagos y cancelación','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'de pagos pendientes.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-footer" style="background-image: url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/bg-footer.png)">
            <div class="row">                
                <div class="col-md-12">
                    <h2 class="title-footer">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Crecer está en tus manos. ','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oferece a tus clientes','mod'=>'mercadopago'),$_smarty_tpl ) );?>
 <br> 
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'una experiencia de pago única.','mod'=>'mercadopago'),$_smarty_tpl ) );?>

                    </h2>
                    <a href="" class="btn btn-default btn-footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configura Mercado Pago','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
        
        <div class="mercadopago-partner">
            <div class="row">                
                <div class="col-md-6 left-partner">
                    <img class="img-fluid img-partner" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/partner.png" />
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Somos partners oficiales de Prestashop.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</span>
                </div>
                
                <div class="col-md-6 right-partner">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller_protect_link']->value,'html','UTF-8' ));?>
" target="_blank" class="fl-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conoce nuestro Programa de Protección de vendedores.','mod'=>'mercadopago'),$_smarty_tpl ) );?>
</a>
                </div>
            </div>
        </div>
        
	</div>
</div><?php }
}
