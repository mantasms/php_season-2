<?php
declare(striuct_types = 1);

class Gerimas {

    private $data;

    public function __construct() {
        $this->data = [
            'name' => null,
            'amount_ml' => null,
            'abarot' => float
        ];
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getName(string $name) {
        $this->name = $name;
    }

    public function setAmountml(int $amount_ml) {
        $this->amount_ml = $amount_ml;
    }

    public function getAmountml(int $amount_ml) {
        $this->amount_ml = $amount_ml;
    }

    public function setAbarot(float $abarot) {
        $this->abarot = $abarot;
    }

    public function getAbarot(float $abarot) {
        $this->abarot = $abarot;
    }

}

?>
<html>
    <head>
        <title> OOP </title>
    </head>
    <body>
        <p>

        </p>
    </body>
</html>
