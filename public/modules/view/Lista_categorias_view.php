<?php

namespace Modules\view;


/**
*
*/

use Lib\ServiceManager\View;
class Lista_categorias_view extends View
{


	protected function show(){
	 	$json=json_encode($this->attributes);

	 	echo $json;




	 }

}
