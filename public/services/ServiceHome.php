<?php

namespace Services;

/**
* 
*/
use Lib\ServiceManager\Service;

class ServiceHome extends Service
{
		

	 protected function create(){
	 	return $this->attributes;
	 }

}