<?php

function get_tipo_cambio() {

   // URL de la API
   $url = "https://api.cambio.today/v1/full/USD/json?key=48369|G1WJmhkY64bMsrZVBsKX";

   // Intentar obtener el contenido de la API
   $json = file_get_contents($url);

   // Verificar si la solicitud fue exitosa
   if ($json === false) {
       // Manejar el error de la solicitud fallida
       return "Error al obtener el tipo de cambio";
   }

   // Decodificar el JSON
   $datos = json_decode($json);

   // Verificar si la decodificación fue exitosa
   if ($datos === null || !isset($datos->result) || !isset($datos->result->conversion[8]->rate)) {
       // Manejar el error de datos no válidos
       return "Error en los datos recibidos";
   }

   // Obtener el tipo de cambio sin redondear
   $tipo_cambio = $datos->result->conversion[8]->rate;

   // Redondear el tipo de cambio a dos dígitos después del punto decimal
   $tipo_cambio_redondeado = number_format($tipo_cambio, 4);

   // Devolver el tipo de cambio redondeado
   return $tipo_cambio_redondeado;

}

?>
    