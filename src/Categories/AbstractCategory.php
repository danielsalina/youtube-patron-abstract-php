<?php

namespace Categories;

/**
 * Clase abstracta para categorías.
 * Define un método abstracto para obtener el nombre de la categoría.
 */
abstract class AbstractCategory
{
    /**
     * Obtiene el nombre de la categoría.
     *
     * @return string
     */
    abstract public function getCategoryName(): string;
}
