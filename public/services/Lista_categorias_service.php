<?php
require_once('../vendor/autoload.php');

$service=new Lib\ServiceManager\ServiceManager;


$data=$service->Lista_categorias_controller(['data'=>' ']);

$service->Lista_categorias_view($data);
/*use Lib\PDOConnection\MYSQLConnectConfig;
use Lib\PDOConnection\PDOConnector;

$connector_config=new MYSQLConnectConfig('localhost','kumo','root','123');

		$connector=new PDOConnector($connector_config);

		$connector->isConnected();
		$pdo=$connector->getConnection();

		$result = $pdo->prepare("SELECT * FROM categorias");
				
		$result->execute();


		$data=[];
		while($row = $result->fetch(PDO::FETCH_OBJ)){
    		array_push($data, $row);
		}

*/


		//$data=$result->fetchAll(PDO::FETCH_ASSOC);

	//	$json=json_encode($data);

	//	echo $json;
