<?php
include 'Color.php';
include 'RedColor.php';
include 'BlueColor.php';
include 'GreenColor.php';
include 'ColorFactory.php';

use Factory\Color;
use Factory\ColorFactory;

$color = ColorFactory::getColor(Color::RED);
$color->fill();
$color = ColorFactory::getColor(Color::GREEN);
$color->fill();
