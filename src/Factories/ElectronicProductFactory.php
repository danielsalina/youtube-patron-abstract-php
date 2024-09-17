<?php

namespace Factories;

use Products\ElectronicProduct;
use Categories\ElectronicCategory;

/**
 * Fábrica concreta para productos electrónicos.
 * Implementa la creación de productos y categorías electrónicas.
 */
class ElectronicProductFactory extends AbstractProductFactory
{
    /**
     * Crea un producto electrónico.
     *
     * @return \Products\AbstractProduct
     */
    public function createProduct(): \Products\AbstractProduct
    {
        return new ElectronicProduct();
    }

    /**
     * Crea una categoría electrónica.
     *
     * @return \Categories\AbstractCategory
     */
    public function createCategory(): \Categories\AbstractCategory
    {
        return new ElectronicCategory();
    }
}
