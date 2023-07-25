<?php 
$nombreArchiv="archivo.txt";
$contenidoArchivo="Hola, saludos";

$archivoACrear=fopen($nombreArchiv,"w");

fwrite($archivoACrear,$contenidoArchivo);
fclose($archivoACrear);
?> 