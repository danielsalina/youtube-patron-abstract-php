<?php

namespace Products;

/**
 * Implementación concreta de un producto electrónico.
 */
class ElectronicProduct extends AbstractProduct
{
    /**
     * Obtiene el nombre del producto electrónico.
     *
     * @return string
     */
    public function getName(): string
    {
        return "Electronic Product";
    }
}
