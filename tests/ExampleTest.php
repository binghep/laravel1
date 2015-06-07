<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testHome()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());


	}
    public function testHello()
    {
        $response = $this->call('GET', '/contact');

        $this->assertEquals(200, $response->getStatusCode());


    }
}
