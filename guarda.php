<?php
$nombre=$_POST["nombre"];
 $archivo=fopen("comentarios.txt","a");
   if (!$archivo) 
{
echo "ERROR, NO SE PUDO ABRIR EL ARCHIVO";
}
else
{
echo "nombre ingresado",$nombre;
 fwrite($archivo,$nombre);
fwrite($archivo,"\n");
 fclose($archivo);
 header("Location:index.html");
}


?>