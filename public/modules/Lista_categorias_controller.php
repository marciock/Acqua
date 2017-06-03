<?php

namespace Modules\Categorias\Controllers;

use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

use Lib\ServiceManager\Controller;
class Lista_categorias_controller extends Controller
{
	

	

	 protected function create(){

		$connector_config=new MYSQLConnectConfig('localhost','kumo','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();

		$result = $pdo->prepare("SELECT * FROM categorias");
				
		$result->execute();


		$data=[];

		/* deve colocar a barra invertida no PDO para acertar o 
		caminho da biblioteca do PHP*/

		while($row = $result->fetch(\PDO::FETCH_OBJ)){ 
    		array_push($data, $row);
		}




		//$data=$result->fetchAll(PDO::FETCH_ASSOC);

		return $data;
		

	}

}