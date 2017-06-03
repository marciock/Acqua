<?php
require_once('../vendor/autoload.php');



if(!empty($_FILES)){

	$imagem=$_FILES['file']['name'];

	$extension=pathinfo($imagem, PATHINFO_EXTENSION);

}else{
	$imagem="erro";
};


if(isset($_POST)){
	$categoria=$_POST['categoria'];
	$observacao=$_POST['observacao'];

}else{
	$categoria="erro";
	$observacao="erro";

};

$name=str_replace(" ", "_", $categoria);
$local="../img/".$name.".".$extension;
$namefile=$_FILES['file']['tmp_name'];
//move_uploaded_file($file, $local);

if(!file_exists($local)){

$controller=new Lib\ServiceManager\ServiceManager;


		if(move_uploaded_file($namefile, $local)){

		$controller->Insert_categorias_controller(array(':id_categoria'=>NULL,':categoria'=>$categoria,':observacao'=>$observacao,':imagem'=>$local));

		}

}else{
	return false;
}

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