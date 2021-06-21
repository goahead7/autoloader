<?php
namespace cake;

class Menu{
    private int $price;

    public function __construct(int $price) {
        $this->price = $price;
    }

    public function buy_quantity(int $quantity) {
        $this->price=price*$quantity;
    }
}
?>
