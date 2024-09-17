<?php

namespace Products;

/**
 * Implementación concreta de un producto de ropa.
 */
class ClothingProduct extends AbstractProduct
{
    /**
     * Obtiene el nombre del producto de ropa.
     *
     * @return string
     */
    public function getName(): string
    {
        return "Clothing Product";
    }
}
