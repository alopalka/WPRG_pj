<?php

class Exercise2
{
    public static function get_diameter($size): float|int
    {
        return ($size * 2);
    }
}

echo Exercise2::get_diameter(10);