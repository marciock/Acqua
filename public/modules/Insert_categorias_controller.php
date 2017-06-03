<?php

namespace Modules\Categorias\Controllers;

/**
*
*/
use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

use Lib\ServiceManager\Controller;
class Insert_categorias_controller extends Controller
{




	protected function create(){

		$connector_config=new MYSQLConnectConfig('localhost','kumo','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();


		$exec=$pdo->prepare("INSERT INTO categorias  VALUES(:id_categoria,:categoria,:observacao,:imagem)");
		//$exec->execute($this->attributes);
		//echo $this->attributes;


/*
		foreach ($this->attributes as $key => $value) {

			$teste .="{$key} = {$value}, ";
		}


		$fp = fopen("teste.txt", "a");

		// Escreve "exemplo de escrita" no bloco1.txt
		$escreve = fwrite($fp, $teste);

		// Fecha o arquivo
		fclose($fp);

	*/

	}

}
