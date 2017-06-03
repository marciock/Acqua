<?php
require_once('../vendor/autoload.php');


//$postData=file_get_contents("php://input");


 //$data=json_decode($postData);

 //$id=$data->id;
$id=$_GET['id'];

 

$service=new Lib\ServiceManager\ServiceManager;


$data=$service->Edit_setor_controller(array(":id_setor"=>$id));
/*
$service->Lista_setor_view($data);
*/

/*
$fp = fopen("teste.txt", "a");
 
// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, $id);
 
// Fecha o arquivo
fclose($fp); 
*/
