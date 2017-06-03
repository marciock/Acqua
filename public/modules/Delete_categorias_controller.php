<?php

namespace Modules\Categorias\Controllers;

/**
* 
*/
use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

use Lib\ServiceManager\Controller;
class Delete_categorias_controller extends Controller
{
	

	

	protected function create(){
	
		$connector_config=new MYSQLConnectConfig('localhost','kumo','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();


			foreach ($this->attributes as $key => $value) {
				$post=$value;
			}


		$exec=$pdo->prepare("DELETE FROM categorias WHERE id_categoria=:id_categoria");
		$exec->bindParam(':id_categoria',$post);
		$exec->execute();
		


	}

}