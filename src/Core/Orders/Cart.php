<?php

namespace Core\Orders;

class Cart
{
    /**
     *  @param Product[]
     */
    protected $items = [];

    public function add(Product $product)
    {
        $qty = isset($this->items[$product->getId()]) ? $this->items[$product->getId()]['qty'] + $product->getTotal() : $product->getTotal();

        $this->items[$product->getId()] = [
            "qty" => $qty,
            "product" => $product
        ];
    }

    public function getItems() :array
    {
        return $this->items;
    }

    public function totalAmount() :float
    {
        $total = 0;
        foreach($this->items as $item)
        {
            $total += $item['qty'] * $item['product']->getPrice();
        }

        return $total;
    }
}