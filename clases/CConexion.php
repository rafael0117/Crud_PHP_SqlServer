<?php
Class CConexion 
{
    public static function ConexionBD(){
        $host = "127.0.0.1";
        $dbname = "bdcole";
        $username = "rootsqlserver";
        $password = "rootsqlserver";
        $port = "1433";

        try{
            $conn = new PDO("sqlsrv:server=$host,$port;Database=$dbname",$username,$password);
            $conn -> setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo("Se conecto a la base de datos");
        }
        catch(PDOException $pe){
            die("No se logro conectar a la base de datos". $pe -> getMessage());

        }
        return $conn;

    }
}



?>