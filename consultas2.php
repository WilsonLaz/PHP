<?php
 $archivo=fopen("comentarios.txt","r");

 if (! $archivo) 
 {
echo "ERROR, NO SE PUDO ABRIR EL ARCHIVO";
 }
else
{
echo "ARCHIVO ENCONTRADO: <br>";
     while (! feof($archivo))
    {
        $linea=fgets($archivo);
 echo"<div id=linea>$linea</div>";
        echo "<hr>";
    }
    fclose($archivo);
}

?>