<?php

namespace AbstractFactory;

class VictorianFurnitureFactory implements FurnitureFactory
{
    function createChair(): Chair
    {
        return new VictorianChair();
    }
    function createTable(): Table
    {
        return new VictorianTable();
    }
}
