<?php

use PHPUnit\Framework\TestCase;

class cancelreservationmodalTest extends TestCase{

	protected $customer;

	public function setUp(){

		$this->customer = new \App\Models\CancelFoodOrder;
	
	}

	public function testgetCustomerName(){

		$this->customer->setCustomerName('Jack');
	
		$this->assertEquals($this->customer->getCustomerName(), 'Jack');
	
	}
}
?>
