<?php

namespace App\Rpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * Class CalculatorService
 *
 * @package App\Rpc
 * @RpcService(name="CalculatorService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class CalculatorService implements CalculatorServiceInterface
{

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

}