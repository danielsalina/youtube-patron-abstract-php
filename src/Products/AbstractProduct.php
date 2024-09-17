<?php

namespace Products;

/**
 * Clase abstracta para productos.
 * Define un método abstracto para obtener el nombre del producto.
 */
abstract class AbstractProduct
{
    /**
     * Obtiene el nombre del producto.
     *
     * @return string
     */
    abstract public function getName(): string;
}
