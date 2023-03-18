<?php

declare(strict_types=1);

namespace App\Tests\Helper\Math;

use App\Helper\Math\QuadraticEquationHelper;
use Generator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class QuadraticEquationTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testSolveFirstCoefficientNoZero(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('The first coefficient can not be zero');

        $result = QuadraticEquationHelper::solve(0, 1, 1);
    }

    /**
     * @dataProvider dataProvider
     * @return void
     */
    public function testSolveIncompleteQuadraticEquationNoDiscriminant(array $input, array $expected): void
    {
        $result = QuadraticEquationHelper::solve(...$input);

        Assert::assertEquals($result, $expected);
    }

    /**
     * @return Generator<array>
     */
    public function dataProvider(): Generator
    {
        yield [[2, 0, 1], []];
//        yield [[2, 0, -1], [1, -1]];
        yield [[2, 0, -1], [0.71, -0.71]];
    }


}