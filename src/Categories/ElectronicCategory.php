<?php

namespace Categories;

/**
 * Implementación concreta de una categoría electrónica.
 */
class ElectronicCategory extends AbstractCategory
{
    /**
     * Obtiene el nombre de la categoría electrónica.
     *
     * @return string
     */
    public function getCategoryName(): string
    {
        return "Electronics";
    }
}
