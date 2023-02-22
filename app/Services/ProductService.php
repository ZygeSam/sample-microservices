<?php
namespace App\Services;
use App\Models\Product;
use App\Repositores\ProductRepository;
/**
 * Product service is repsonsible for the business logic actions 
 * e.g adding a prefix to product_name
 */

 class ProductService{

    protected $productRepository;

    public function __construct(ProductRepository $productRepository){
        $this->productRepository  = $productRepository;
    }

    public function createProduct($data){
        $this->productRepository->create($data);
    }

    public function updateProduct($product, $data){
        $this->productRepository->update($product, $data);
    }

    public function deleteProduct($product){
        $this->productRepository->delete($product);
    }

    public function calculateDiscount($product) {
        // Logic to calculate discount
    }

    public function applyTax($product) {
        // Logic to apply tax
    }
    
 }