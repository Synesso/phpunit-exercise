<?php
class Barista {

    private $machine;

    function __construct() {
        $this->machine = new EspressoMachine();
    }

    public function sayHello() {
        return "Seven hedgehogs in a row";
    }

    public function orderEspresso() {
        $grinds = Grinder::grind();
        return $this->machine->makeEspresso($grinds);
    }
}
