<?php

class Jacuzzi {

    public $amount_water;
    public $amount_non_water;

//by default bus parametrai 0, t.y.- jei nieko nepaduosim-bus 0, o jei paduosim i konstruktoriu kazka, tai paims tuos parametrus.
    public function __construct($amount_water = 0, $amount_non_water = 0) {
        $this->amount_water = $amount_water;
        $this->amount_non_water = $amount_non_water;
    }

    public function getWaterPurity() {
        return $this->amount_water / ($this->amount_water + $this->amount_non_water) * 100;
    }

}

class User {

    public function peeInJacuzzi(Jacuzzi $jacuzzi, $amount) {
        $jacuzzi->$amount_non_water += $amount;
    }

}

$pliuskupliusku = new Jacuzzi(100, 40);
$balvonas = new User(10);
print $pliuskupliusku->getWaterPurity();
?>
<html>
    <head>
        <title> OOP </title>
    </head>
    <body>
    </body>
</html>
