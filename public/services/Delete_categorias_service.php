<?php
require_once('../vendor/autoload.php');



$postData=file_get_contents("php://input");


 $data=json_decode($postData);

 $id=$data->id;





/*
$fp = fopen("teste.txt", "a");
 
		// Escreve "exemplo de escrita" no bloco1.txt
		$escreve = fwrite($fp, $id);
		 
		// Fecha o arquivo
		fclose($fp); 
*/





$controller=new Lib\ServiceManager\ServiceManager;

$controller->Delete_categorias_controller(array(":id_categoria"=>$id));

