<?php

declare(strict_types=1);

namespace App\Helper\Math;

use Exception;

class  QuadraticEquationHelper
{
    /**
     * @return array<float>
     * @throws Exception
     */
    public static function solve(float $a, float $b, float $c, float $e = 1.0E-5): array
    {
        if (abs($a) < $e) {
            throw new Exception('The first coefficient can not be zero');
        }

        if (abs($b) < $e) {
            if ((-$c/$a) < 0) {
                return [];
            }

            $x = round(sqrt(-$c/$a), 2);

            return [$x, -$x];
        }

        if (abs($c) < $e) {
            return [0, round(-$b/$a, 2)];
        }

        $d = $b*$b - 4*$a*$c;

        if ($d < 0) {
            return [];
        }

        if (abs($d) < $e) {
            $x = round(-$b / 2 * $a, 2);

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