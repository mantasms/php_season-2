<?php

class ThailandSurprise {

    private $balls;

    public function __construct() {
        $this->balls = rand(0, 1);
    }

}

$surprise = new ThailandSurprise();
?>
