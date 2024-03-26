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
    echo '<p>El tipo de cambio USD/GTQ es: ' . $tipo_cambio . '</p>';

}

// Agregar el shortcode
add_shortcode( 'tipo_cambio', 'mostrar_tipo_cambio' );

?>