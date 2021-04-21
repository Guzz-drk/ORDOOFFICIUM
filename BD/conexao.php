<?php 
class Conexao{

  public static $con;

  public static function Conectar(){
    $host = 'localhost';
                $user = 'postgres';
                $pass = 'masterkey';
                $db = 'ORDOOFFICIUM';

                try{
                    $con = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }
            

            return $con;
    
  }
  
}
?>