<?php
declare(strict_types = 1);

class Gerimas {

    private $data;

    public function __construct() {
        $this->data = [
            'name' => null,
            'amount_ml' => null,
            'abarot' => null
        ];
    }

    public function getName() {
        return $this->data['name'];
    }

    public function setName(string $name) {
        $this->data['name'] = $name;
    }

    public function getAmountMl() {
        return $this->data['amount_ml'];
    }

    public function setAmountMl(int $amount) {
        $this->data['amount_ml'] = $amount;
    }

    public function getAbarot() {
        return $this->data['abarot'];
    }

    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }

    public function getData() {
        return $this->data;
    }

    public function setData(array $data) {
        $this->setName($data['name'] ?? null);
        $this->setAmountMl($data['amount_ml'] ?? null);
        $this->setAbarot($data['abarot'] ?? null);
    }

}

$alus = new Gerimas();
$alus->setName('Kanapinis');
print $alus->getName();
?>
<html>
    <head>
        <title> PHP Seasson#2 OOP </title>
    </head>
    <body>
        <p>

        </p>
    </body>
</html>
