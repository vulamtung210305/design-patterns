<?php

namespace AbstractFactory;

interface FurnitureFactory
{
    function createChair(): Chair;
    function createTable(): Table;
}
