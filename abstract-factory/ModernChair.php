<?php

namespace AbstractFactory;

class ModernChair implements Chair
{
    public function hasLegs()
    {
        echo 'Modern chair';
    }
}
