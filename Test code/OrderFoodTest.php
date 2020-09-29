
  <?php

use PHPUnit\Framework\TestCase;

class orderfoodTest extends TestCase{

	protected $customer;

	public function setUp(){

		$this->customer = new \App\Models\orderfood;
	
	}

	public function testgetCustomerName(){

		$this->customer->setCustomerName('Jack');
	
		$this->assertEquals($this->customer->getCustomerName(), 'Jack');
	
	}

	public function testgetCustomerId(){

		$this->customer->setCustomerId(1534);

		$this->assertEquals($this->customer->getCustomerId(), 1534);

	}

}

