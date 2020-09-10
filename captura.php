<?php
/*
Plugin Name: captura
Plugin URI: abrahamicm.github.com
Description: captura de pantallas
Version: 1.0
Author: abraham
Author URI: abrahamicm.github.com
License: GPL2
*/

//agregar javascript
 
function html2canvas($hook) {

    wp_enqueue_script( 'html2canvas', plugins_url('/html2canvas.min.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'html2canvas' );

function mi_captura($hook) {
   
    wp_enqueue_script( 'mi_captura', plugins_url('mi_captura.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'mi_captura' );


// agregar preview al la orden
// href="https://api.whatsapp.com/send?phone=58"



add_action( 'woocommerce_admin_order_preview_start', 'custom_display_order_data_in_admin_plugin' );
function custom_display_order_data_in_admin_plugin(){
    // Call the stored value and display it
    echo '
                
<input type="text" id="num_what" value="{{ data.data.billing.phone.substring(1) }}">


<a class="button button-primary button-large" aria-label="Editar este pedido" href="https://api.whatsapp.com/send?phone=58{{ data.data.billing.phone.substring(1) }}"
target="_blank" onclick="myScript(event)">Whatsapp</a> <br> 

    
    Cédula cliente: {{data.billing_cedula}} <br> 
    
    
   
   
    ';
     //Telefono local: {{data.billing_tel_local}}<br> 
   // Estado: {{data.selec_estado}} 
}

