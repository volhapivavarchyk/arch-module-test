<?php

declare(strict_types=1);

namespace App\Helper\Math;

use function PHPUnit\Framework\throwException;

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
    }
}