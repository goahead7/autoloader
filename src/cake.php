<?php

namespace cake;

class Cake extends Menu{
    private array $cake_list;

    public function __construct() {
        echo 'CAKE STORE', PHP_EOL;
    }

    public function add_cake(Menu $cake) {
        $this->cake_list[lenght(cake_list)] = $cake;
    }
}

?>
