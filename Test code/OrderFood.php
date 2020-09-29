<?php


namespace { 
   
    // Global space! 
} 
?> 

class orderfood{

public $customername;

public $customerid;

public function setCustomerName($name){

	$this->customername = $name;

}
public function setCustomerId($number){

	$this->customerid= $number;

}
public function getCustomerName(){

	return $this->customername;

}
public function getCustomerId(){

	return $this->customerid;

}

}
