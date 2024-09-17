<?php

namespace Factories;

use Products\AbstractProduct;
use Categories\AbstractCategory;

/**
 * Clase abstracta para la fábrica de productos.
 * Define métodos abstractos para crear productos y categorías.
 */
abstract class AbstractProductFactory
{
    /**
     * Crea un producto.
     *
     * @return AbstractProduct
     */
    abstract public function createProduct(): AbstractProduct;

    /**
     * Crea una categoría.
     *
     * @return AbstractCategory
     */
    abstract public function createCategory(): AbstractCategory;
}