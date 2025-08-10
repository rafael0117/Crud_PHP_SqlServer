<?php
Class CConexion 
{
    public static function ConexionBD(){
        $host = "";
        $dbname = "";
        $username = "";
        $password = "";
        $port = "";

        try{
            $conn = new PDO();
            $conn -> setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo("Se conecto a la base de datos");
        }
        catch(PDOException){
            die("No se logro conectar a la base de datos". $pe -> getMessage());

        }
        return $conn;

    }
}

?>