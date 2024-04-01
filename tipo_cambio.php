<?php
/**
 * Plugin Name: tipo de cambio 
 * Plugin URI: https://github.com/Raul-OXRI/tipo_cambio 
 * Description: Este es un plugin que ayuda a mostrar el tipo de cambio  
 * Author: José Raúl Botzoc Mérida
 * Version: 0.0.2 
 */
require_once( dirname( __FILE__ ) . '/includes/api.php' );



function mostrar_tipo_cambio() {
    $tipo_cambio = get_tipo_cambio();
    echo '
    <div style="margin: 0; padding: 20px">
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px; width: 245px;">
            <h2 style="font-size: 16px; margin: 0; font-family: Montserrat, sans-serif;">Conversión GTQ a USD</h2>
            <div style="display: flex; flex-direction: column; margin-left: auto;">
                <div style="display: flex; flex-direction: row; align-items: center; margin-bottom: 5px;">
                    <span style="margin-right: 5px;"></span>
                    <span style="font-weight: bold;">Q</span>
                    <span style="font-weight: bold;">' . $tipo_cambio . '</span>
                </div>
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <span style="margin-right: 5px;"></span>
                    <span style="font-weight: bold;">$ 1.00</span>
                    <span style="font-weight: bold;"></span>
                </div>
            </div>
        </div>
    </div>
    ';
}

add_shortcode( 'tipo_cambio', 'mostrar_tipo_cambio' );
?>