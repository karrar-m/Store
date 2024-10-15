<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Services\Product\Interface\ProductServiceInterface; 
  class ProductService implements ProductServiceInterface 
{
    public function createProduct(array $product)
    {
        return Product::create($product);
    }
}
