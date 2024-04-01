<?php
function get_tipo_cambio() {
   $url = "https://api.cambio.today/v1/full/USD/json?key=48369|G1WJmhkY64bMsrZVBsKX";
   $json = file_get_contents($url);
   if ($json === false) {
       return "Error al obtener el tipo de cambio";
   }

   $datos = json_decode($json);

   if ($datos === null || !isset($datos->result) || !isset($datos->result->conversion[8]->rate)) {
       return "Error en los datos recibidos";
   }

   $tipo_cambio = $datos->result->conversion[8]->rate;

   $tipo_cambio_redondeado = number_format($tipo_cambio, 2);

   return $tipo_cambio_redondeado;
}

?>
    