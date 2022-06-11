<?php

class Cart {

    // Lưu thông tin về cart ở trong session đi, vấn đề là nó sẽ nặng
    protected $items;

    function __construct(){
        $this->restoreCartItems();
    }

    function restoreCartItems() {

    }

    function removeCartItem($id) {
        
    }

    function removeCart() {
        $this->items = array();
        $_SESSION['cart_items'] = $this->items;
    }

    function addCartItems($id) {

    }


}

?>