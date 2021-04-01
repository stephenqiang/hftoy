<?php

namespace App\Rpc;

/**
 * Class CalculatorService
 *
 * @package App\Rpc
 */
interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}