<?php

namespace AbstractFactory;

class VictorianChair implements Chair
{
    public function hasLegs()
    {
        echo 'Victorian chair';
    }
}
