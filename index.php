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
   /*include_once('./Clases/CConexion.php');
   $consulta = CConexion::ConexionBD();*/
    ?>
<h1>Crud en PHP y SQL server</h1>
<div>
    <form action="./clases/CAlumnos.php" method="POST">
        <h3>Codigo:</h3>
        <input type="text" name="paramCodigo", id="paramCodigo" readonly="true">
        <h3>DNI:</h3>
        <input type="text" name="paramDni", id="paramDni" >
        <h3>Nombres:</h3>
        <input type="text" name="paramNombre", id="paramNombre">
        <h3>Apellidos:</h3>
        <input type="text" name="paramApellido", id="paramApellido" >
        <h3>Edad:</h3>
        <input type="text" name="paramEdad", id="paramEdad" >

        <input type="submit" name="insertar", id="insertar" value="Guardar">
        <input type="submit" name="modificar", id="modificar" value="Modificar">
        <input type="submit" name="eliminar", id="eliminar" value="Eliminar">
    </form>

    <h2>Lista de Alumnos</h2>
    <div>
        <table id="miTabla">
            <tr>
                <th>Codigo</th>
                <th>Dni</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
            <tbody>
                <?php 
                include_once ('./Clases/CAlumnos.php');
                $consulta = CAlumnos::mostrarTotalDeAlumnos();
                foreach($consulta as $fila){
                   echo "<tr>";
                    echo "<td>" . $fila["codigo"] . "</td>";
                    echo "<td>" . $fila["dni"] . "</td>";
                    echo "<td>" . $fila["nombres"] . "</td>";
                    echo "<td>" . $fila["apellidos"] . "</td>";
                    echo "<td>" . $fila["edad"] . "</td>";
                    echo "<td><input type=\"submit\" value=\"Seleccionar\" onClick=\"Seleccionar()\" ></td>";
                    echo "</tr>";

                } 
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
<style>
    
    table,th,td{
        border:1px solid black

    }
</style>

<script>
    function Seleccionar(){
        let table = document.getElementById("miTabla");
        for(var i=1;i<table.rows.length;i++){
            table.rows[i].onclick=function(){
                document.getElementById("paramCodigo").value= this.cells[0].innerHTML;
                document.getElementById("paramDni").value= this.cells[1].innerHTML;
                document.getElementById("paramNombre").value= this.cells[2].innerHTML;
                document.getElementById("paramApellido").value= this.cells[3].innerHTML;
                document.getElementById("paramEdad").value= this.cells[4].innerHTML;
            };
        }
    }
</script>