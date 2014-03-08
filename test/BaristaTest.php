<?php

foreach(glob("code/*.php") as $file){
    require_once $file;
}

class BaristaTest extends PHPUnit_Framework_TestCase {

    private $barista;
    private $mockEspresso;

    protected function setUp() {
        $this->mockEspresso = $this->getMock('Espresso');
        $this->barista = new Barista();
    }

    /**
     * TODO #1 - this test is failing. Change Barista.php to make it pass.
     */
    public function testSayHello() {
        $response = $this->barista->sayHello();
        $this->assertEquals("Hello to you too", $response);
    }

    /**
     * TODO #2 - The barista uses the espresso machine to make the espresso.
     *           Make sure we get the espresso created by the machine, and not some other one.
     *           Hint: set a mock espresso machine on the barista and tell it how to respond.
     */
    public function testMakeEspresso() {
        $drink = $this->barista->orderEspresso();
        $this->assertSame($this->mockEspresso, $drink);
    }

    /**
     * TODO #3 - We want to also be able to order cookies from the Barista.
                 The Barista will get cookies from a CookieJar that he has.
                 - First write the test. (It will be similar to the one above).
                 - Then run it to make sure it fails.
                 - Finally, write the code to make it pass.
     */
    public function testOrderCookie() {
        $this->markTestIncomplete();
    }
               
    /**
     * TODO #4 - In the process of making espresso, the Barista should use the coffee bean Grinder.
                We never tested that the grinder actually gets used. If she uses the pre-ground coffee
                 to make espresso this would be a bug! How do we know? We need a test.
                 Modify the testMakeEspresso method to ensure that the Barista uses a mock Grinder.
                 Hint: The difficulty here is that the Grinder::grind method is static. 
                   The easy way to fix this is to make it an instance method (i.e. not static).
                 Bonus: Can you write the test and keep the grind method static?
     */
}

