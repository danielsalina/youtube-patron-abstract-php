<?php

namespace Factories;

use Products\ClothingProduct;
use Categories\ClothingCategory;

/**
 * Fábrica concreta para productos de ropa.
 * Implementa la creación de productos y categorías de ropa.
 */
class ClothingProductFactory extends AbstractProductFactory
{
    /**
     * Crea un producto de ropa.
     *
     * @return \Products\AbstractProduct
     */
    public function createProduct(): \Products\AbstractProduct
    {
        return new ClothingProduct();
    }

    /**
     * Crea una categoría de ropa.
     *
     * @return \Categories\AbstractCategory
     */
    public function createCategory(): \Categories\AbstractCategory
    {
        return new ClothingCategory();
    }
}
