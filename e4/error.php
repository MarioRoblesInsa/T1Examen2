<?php
echo "Error al realizar la operación";
$directorio = 'resultados';
$fichero = "error";
$contenido = "La operacion introducida no es posible";

file_put_contents($directorio.'/'.$fichero, $contenido);