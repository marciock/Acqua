<?php

namespace Modules;

use Lib\ServiceManager\Controller;

/**
*
*/
class HomeController extends Controller
{
	private $value;
	/* protected function filter(){

	 };
	 protected function sanitize(){

	 };
	 protected function validate(){

	 };
	 protected function manager(){

	 };*/

	 protected function create(){


	 	foreach ($this->attributes as $key => $value) {

	 		$this->value=$value;
	 	}
	 	return $this->value;
	 }


}
