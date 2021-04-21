<?php 
try{
$conexao = new PDO("pgsql:dbname=ORDOOFFICIUM
host=localhost"
,"postgres"
,"masterkey");
echo("sucessuful!");
}catch(PDOException $e) {
  echo $e->getMessage();

}


?>