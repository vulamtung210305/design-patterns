<?php

namespace Factory;


use Exception;

class ColorFactory
{
    public static function getColor($color)
    {
        switch ($color) {
            case Color::RED:
                return new RedColor();
                break;
            case Color::GREEN:
                return new GreenColor();
                break;
            case Color::BLUE:
                return new BlueColor();
                break;
            default:
                throw new Exception('Invalid color');
                break;
        }
    }
}
