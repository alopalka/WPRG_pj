<?php

class Exercise4
{
    public static function getBirthdayFromPesel(string $pesel): ?string
    {
        if (!preg_match('/^\d{11}$/', $pesel)) {
            return null; // Invalid PESEL format
        }

        $yearOfBirth = substr($pesel, 0, 2);
        $monthOfBirth = substr($pesel, 2, 2) % 20;
        $dayOfBirth = substr($pesel, 4, 2);

        return sprintf("Data urodzenia: %s-%s-%s", $dayOfBirth, $monthOfBirth, $yearOfBirth);
    }
}

echo Exercise4::getBirthdayFromPesel("89052891852");
