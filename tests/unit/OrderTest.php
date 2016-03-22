<?php 


use App\Order;
use App\Product;

/**
* 
*/
class OrderTest extends PHPUnit_Framework_TestCase
{
	
	/** @test */
	public function an_order_consists_of_products()
	{

		$order = new Order();

		$product = new Product('GTA 5', 60);
		$product2 = new Product('Resident evil 7', 55);


		$order->add($product);
		$order->add($product2);

		$this->assertCount(2, $order->products());

	}
}