<?php
class SurfaceAreaCalculator
{
    public static function calculate(): float
    {
        $figure = readline("Jaką figurę chcesz obliczyć (trójkąt, prostokąt, trapez)? ");

        switch ($figure) {
            case "trójkąt":
                return self::calculateTriangleArea();
            case "prostokąt":
                return self::calculateRectangleArea();
            case "trapez":
                return self::calculateTrapezoidArea();
            default:
                echo "Nieznana figura.\n";
                return 0;
        }
    }

    private static function calculateTriangleArea(): float
    {
        $base = readline("Podaj długość podstawy trójkąta: ");
        $height = readline("Podaj wysokość trójkąta: ");
        return $base * $height / 2;
    }

    private static function calculateRectangleArea(): float
    {
        $width = readline("Podaj szerokość prostokąta: ");
        $length = readline("Podaj długość prostokąta: ");
        return $width * $length;
    }

    private static function calculateTrapezoidArea(): float
    {
        $base1 = readline("Podaj długość pierwszej podstawy trapezu: ");
        $base2 = readline("Podaj długość drugiej podstawy trapezu: ");
        $height = readline("Podaj wysokość trapezu: ");
        return ($base1 + $base2) * $height / 2;
    }
}

echo "Pole figury wynosi: " . SurfaceAreaCalculator::calculate();

