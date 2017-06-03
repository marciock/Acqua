<?php
require_once('../../vendor/autoload.php');

require_once('../PathConfig.php');




if(isset($_POST)){
	$login=$_POST['login'];
	$senha=md5($_POST['senha']);

}else{

	$login="erro";
	$senha="erro";



};



$service=new Lib\ServiceManager\ServiceManager;





	$service->Insert_login_controller(array(':id'=>null,':login'=>$login,':senha'=>$senha));

	//$service->Insert_login_view($data);




//$view=new ServiceManager->insert_categorias_view([''])*/
/*
$teste .="$imagem";
$teste .="$categoria";
$teste .="$observacao}";
$fp = fopen("teste.txt", "a");

// Escreve "exemplo de escrita" no bloco1.txt
$escreve = fwrite($fp, $teste);

// Fecha o arquivo
fclose($fp); */
