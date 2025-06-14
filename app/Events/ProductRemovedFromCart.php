<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductRemovedFromCart
{
    use Dispatchable, SerializesModels;

    public int $productId;

    public function __construct(int $productId)
    {
        $this->productId = $productId;
    }
}