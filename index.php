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
        $this->data['name'] = $name;
    }

    public function getName(string $name) {
        $this->data['name'] = $name;
    }

    public function setAmountml(int $amount_ml) {
        $this->data['amount_ml'] = $amount_ml;
    }

    public function getAmountml(int $amount_ml) {
        $this->data['amount_ml'] = $amount_ml;
    }

    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }

    public function getAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
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
