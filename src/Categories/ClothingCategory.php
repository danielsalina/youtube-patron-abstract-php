<?php

namespace Categories;

/**
 * Implementación concreta de una categoría de ropa.
 */
class ClothingCategory extends AbstractCategory
{
    /**
     * Obtiene el nombre de la categoría de ropa.
     *
     * @return string
     */
    public function getCategoryName(): string
    {
        return "Clothing";
    }
}
