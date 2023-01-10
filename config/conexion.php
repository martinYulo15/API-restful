<?php
    //Archivo de conexion a la base de datos 
    class Conectar
    {
        protected $dbh;

        protected function Conexion(){
            try
            {
                $conectar=$this->dbh=new PDO("mysql:local=localhost; dbname=api_restful","root","");
                return $conectar;
            }
            catch(Exception $e)
            {
                print "Error en la BD".$e->getMessage()."</br>";
                die("Verifica por favor...");
            }
        }
    }
   // Este es un comentario
//Variable locales
$server="localhost";
$database="api_restful";
$username="root";
$password="";

//   $server="sql312.epizy.com";
//   $database="epiz_31710708_pruebas";
//   $username="epiz_31710708";
//   $password="kvvuBKSMZ2gPfta";

//Conexion a MySQL Procedimental
$con=mysqli_connect($server,$username,$password,$database);

//    if ($con)
//       echo 'Conexion Exitosa a la BD';
//    else
//       echo 'Fallo la conexion por favor verifique';   
?>