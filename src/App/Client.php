<?php

namespace App;

use Factories\AbstractProductFactory;

/**
 * Cliente que utiliza una fábrica de productos.
 * Puede obtener detalles del producto y la categoría utilizando la fábrica.
 */
class Client
{
    private $productFactory;

    /**
     * Constructor del cliente.
     * @param AbstractProductFactory $productFactory
     */
    public function __construct(AbstractProductFactory $productFactory)
    {
        $this->productFactory = $productFactory;
    }

    /**
     * Obtiene los detalles del producto y la categoría.
     *
     * @return string
     */
    public function getProductDetails(): string
    {
        $product = $this->productFactory->createProduct();
        $category = $this->productFactory->createCategory();
        
        return "Product: " . $product->getName() . ", Category: " . $category->getCategoryName();
    }
}
