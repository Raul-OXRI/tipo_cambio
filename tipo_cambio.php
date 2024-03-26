<?php
/*
Plugin Name: tipo de cambio
Plugin URI: http://solodata.es
Description: Este es un plugin que ayuda a mostrar el tipo de cambio 
Version: 0.0.1
*/

// Cargar la API
require_once( dirname( __FILE__ ) . '/includes/api.php' );
// Función para mostrar el tipo de cambio
function mostrar_tipo_cambio() {

    // Obtener el tipo de cambio
    $tipo_cambio = get_tipo_cambio();

    // Mostrar el tipo de cambio
    echo '
    <div style="margin: 0; padding: 20px">
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px; width: 350px;">
            <h2 style="font-size: 19px; margin: 0;">Tipo de cambio de Dolar</h2>
            <div style="display: flex; flex-direction: column; margin-left: auto;">
                <div style="display: flex; flex-direction: row; align-items: center; margin-bottom: 5px;">
                    <span style="margin-right: 5px;">Compra:</span>
                    <span style="font-weight: bold;">Q</span>
                    <span style="font-weight: bold;">' . $tipo_cambio . '</span>
                </div>
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <span style="margin-right: 5px;">Venta:</span>
                    <span style="font-weight: bold;">Q</span>
                    <span style="font-weight: bold;"></span>
                </div>
            </div>
        </div>
    </div>
    ';

}

// Agregar el shortcode
add_shortcode( 'tipo_cambio', 'mostrar_tipo_cambio' );

?>