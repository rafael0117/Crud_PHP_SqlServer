<?php
include_once "CConexion.php";
class CAlumnos 
{
 public static function mostrarTotalDeAlumnos(){
    $query=CConexion::ConexionBD()-> prepare("select *from alumnos;");
    $query->execute();
    $data=$query->fetchAll();
    return $data;
 }
 public static function insertarNuevoAlumno(){
    $dni=$_POST["paramDni"];
    $nombres=$_POST["paramNombre"];
    $apellidos=$_POST["paramApellido"];
    $edad=$_POST["paramEdad"];

    $query=CConexion::ConexionBD()-> prepare("insert into alumnos values(?,?,?,?)");
    $query->bindParam(1,$dni,PDO::PARAM_STR);
    $query->bindParam(2,$nombres,PDO::PARAM_STR);
    $query->bindParam(3,$apellidos,PDO::PARAM_STR);
    $query->bindParam(4,$edad,PDO::PARAM_INT);
    if($query->execute()){
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");

    }

 }
 public static function modificarAlumno(){
    $dni=$_POST["paramDni"];
    $nombres=$_POST["paramNombre"];
    $apellidos=$_POST["paramApellido"];
    $edad=$_POST["paramEdad"];
    $codigo=$_POST["paramCodigo"];

    $query=CConexion::ConexionBD()-> prepare("UPDATE alumnos SET alumnos.dni=?,alumnos.nombres=?,alumnos.apellidos=?,alumnos.edad=? WHERE alumnos.codigo=?;");
    $query->bindParam(1,$dni,PDO::PARAM_STR);
    $query->bindParam(2,$nombres,PDO::PARAM_STR);
    $query->bindParam(3,$apellidos,PDO::PARAM_STR);
    $query->bindParam(4,$edad,PDO::PARAM_INT);
    $query->bindParam(5,$codigo,PDO::PARAM_INT);
    if($query->execute()){
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");

    }

 }
public static function eliminarAlumno(){
    $codigo=$_POST["paramCodigo"];

    $query=CConexion::ConexionBD()-> prepare("DELETE FROM alumnos WHERE alumnos.codigo=?;");
    $query->bindParam(1,$codigo,PDO::PARAM_INT);
    if($query->execute()){
        header("Location: ../index.php");
    }
    else{
        header("Location: ../index.php");

    }

 }
}
 if(array_key_exists("insertar",$_POST)){
    CAlumnos::insertarNuevoAlumno();
 }   
 if(array_key_exists("modificar",$_POST)){
    CAlumnos::modificarAlumno();
 }   
 if(array_key_exists("eliminar",$_POST)){
    CAlumnos::eliminarAlumno();
 }
?>