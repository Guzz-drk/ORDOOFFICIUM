<?php 
class conexao extends PDO 
{
  private $connection;

  public function __construct(){

    $this ->connection = new PDO("pgsql:dbname=ORDOOFFICIUM
    host=localhost"
    ,"postgres"
    ,"masterkey");
  }
}
?>