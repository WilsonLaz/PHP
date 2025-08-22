<!DOCTYPE html>
<html lang="es">
<head>
<title>COMENTARIOS</title>
</head>
<body class=padd>
<br>
<?php
echo "Comentarios y consultas:";
 $arch=fopen("comentarios.txt","r");

 if (!$arch) 
 {
echo "ERROR, NO SE PUDO ABRIR EL ARCHIVO";
exit;
 }
echo "ARCHIVO ENCONTRADO:";
     while (!feof($arch))
    {
        $linea=fgets($arch);
        echo "$linea <br>";
        echo "<hr>";
    }
    fclose($arch);

?>

</body>
</html>