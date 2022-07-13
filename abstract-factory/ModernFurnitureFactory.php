<?php

namespace AbstractFactory;

class ModernFurnitureFactory implements FurnitureFactory
{
    function createChair(): Chair
    {
        return new ModernChair();
    }
    function createTable(): Table
    {
        return new ModernTable();
    }
}
