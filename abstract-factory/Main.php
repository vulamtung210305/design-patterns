<?php

namespace AbstractFactory;

include 'Chair.php';
include 'Table.php';
include 'VictorianChair.php';
include 'VictorianTable.php';
include 'ModernChair.php';
include 'ModernTable.php';
include 'FurnitureFactory.php';
include 'VictorianFurnitureFactory.php';
include 'ModernFurnitureFactory.php';
$furniture = new ModernFurnitureFactory();
$chair = $furniture->createChair();
$chair->hasLegs();
$table = $furniture->createTable();
$table->isShape();
$furniture = new VictorianFurnitureFactory();
$chair = $furniture->createChair();
$chair->hasLegs();
$table = $furniture->createTable();
$table->isShape();
