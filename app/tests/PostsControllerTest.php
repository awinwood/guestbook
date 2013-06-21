<?php

class PostsControllerTest extends TestCase
{
	public function testAll()
	{
		$response = $this->call('GET', 'posts');

		$this->assertTrue($response->isOk());

		$this->assertTrue(!! $response->original->posts);
	}

	/**
	 * @covers Class::Method
	 */
	public function testStore()
	{
	    // ----------------------------------------------------------------
	    // setup your test
	    //
	    // explain your test setup here if needed ...
	
	    // ----------------------------------------------------------------
	    // perform the change
	    //
	    // explain your test here if needed ...
	
	    // ----------------------------------------------------------------
	    // test the results
	    //
	    // explain what you expect to have happened
	
	    $this->markTestIncomplete('Not yet implemented');
	}
	
}