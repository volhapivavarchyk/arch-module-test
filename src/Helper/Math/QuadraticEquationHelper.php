<?php

declare(strict_types=1);

namespace App\Helper\Math;

class  QuadraticEquationHelper
{
    /**
     * @return array<float>
     */
    public static function solve(float $a, float $b, float $c): array
    {
        if ($a == 0) {
            throw new \Exception('The first coefficient can not be zero');
        }

        if ($b == 0) {
            if ((-$c/$a) < 0) {
                return [];
            }

            $x = round(sqrt(-$c/$a), 2);

            return [$x, -$x];
        }

        if ($c == 0) {
            return [0, round(-$b/$a, 2)];
        }

        $d = $b*$b - 4*$a*$c;

        if ($d < 0) {
            return [];
        }

        if ($d == 0) {
            if ((-$c/$a) < 0) {
                return [];
            }

            $x = round(sqrt(-$c/$a), 2);
//            $x = round((-$b + sqrt($d)) / 2 * $a, 2);

            return [$x, $x];
        }

        if ($d > 0) {
            return [
                (-$b + sqrt($d)) / 2 * $a,
                (-$b - sqrt($d)) / 2 * $a,
            ];
        }

        return [];
    }
}