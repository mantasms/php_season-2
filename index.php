<?php

class ThailandSurprise {

    public $clothes;
    private $balls;

    public function __construct() {
        $this->balls = rand(0, 1);
    }

    public function attachBalls() {
        $this->balls = true;
    }

    public function detachBalls() {
        $this->balls = false;
    }

    public function getPhoto() {
        if ($this->balls) {
            return 'http://catplanet.org/wp-content/uploads/2014/04/Look-at-my-fucking-balls.jpg';
        } else {
            return 'http://rlv.zcache.com/no_ball_games_thai_park_sign_posters-rc2d0581729404d5a8c1fc49e07142f27_wxt_8byvr_324.jpg';
        };
    }

}

$surprise = new ThailandSurprise();

?>
<html>
    <head>
        <title> OOP </title>
    </head>
    <body>
        <img src="<?php print $surprise->getPhoto(); ?>">
    </body>
</html>
