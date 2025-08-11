<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion PHP</title>
</head>
<body>
    <?php
   // phpinfo();
   include_once('./Clases/CConexion.php');
   $consulta = CConexion::ConexionBD();
    ?>
</body>
</html>