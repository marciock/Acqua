<?php
require_once('../../../vendor/autoload.php');
require_once('../config/PathConfig.php');
header('Content-Type:application/json; charset=utf-8');

//use Lib\ServiceManager\SetServer;

    $post=$_POST;

    //echo $nome;

    //$service=new Lib\ServiceManager\ServiceManager;


  //$service->InsertController(['table'=>'usuarios','fields'=>['id_usuarios','nome','senha','ip'],'insert'=>$post]);

$teste=var_dump($post);
  $fp = fopen("teste.txt", "a");
   
  // Escreve "exemplo de escrita" no bloco1.txt
  $escreve = fwrite($fp, $teste);
   
  // Fecha o arquivo
  fclose($fp); 