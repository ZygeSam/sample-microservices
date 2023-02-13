<?php
namespace App\Repositories;
use App\Models\Product;
/**
 * Product repository is repsonsible for Product CRUD actions
 */
class ProsuctRepository{

    public function create($data){
       return  Product::create($data);
    }

    public function update(Product $product, $data){
        $product->update($data);
        return $product;
    }

    public function delete(Product $product){
        $product->delete();
        return true;
    }


}