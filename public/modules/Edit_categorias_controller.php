<?php

namespace Modules\Categorias\Controllers;

use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

use Lib\ServiceManager\Controller;
class Edit_categorias_controller extends Controller
{
	

	

	 protected function create(){

		$connector_config=new MYSQLConnectConfig('localhost','kumo','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();

		foreach ($this->attributes as $key => $value) {
				$post=$value;
			}

			//$post="157";

		$result = $pdo->prepare("SELECT * FROM categorias WHERE id_categoria=:id_categoria");
		$result->bindParam(':id_categoria',$post);
				
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