<?php
try {
   $con = new PDO('pgsql:host=localhost; port=5432;dbname=20221214010024','postgres', 'pabd');

   // try {
    //    $conexao = new PDO("pgsql:host=localhost;dbname=20221214010024", "postgres", "pabd");
    //    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //    $conexao->exec("set client_encoding to utf8");
    //} catch (PDOException $erro) {
      //  echo "Erro na conexão:".$erro->getMessage();
    //}

    if ($con){
		echo "deu certo";}

}catch (PDOException $e) {
	echo 'DEU ERRADO!!!' . $e;
}

?>