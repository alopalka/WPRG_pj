<?php

class Exercise1
{
    public static function get_random_number(): int
    {
        return rand(1, 6);
    }
}

echo Exercise1::get_random_number();