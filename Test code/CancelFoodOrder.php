<?php


namespace { 
   
    // Global space! 
} 
?> 

class CancelFoodOrder{

public $customername;

public function setCustomerName($name){

	$this->customername = $name;

}

public function getCustomerName(){

	return $this->customername;

}

}