<?php


namespace App\JsonRpc\Producer;

use App\JsonRpc\Interface\CalculatorServiceInterface;
use Hyperf\RpcServer\Annotation\RpcService;

#[RpcService(name: "CalculatorService", server: "jsonrpc", protocol: "jsonrpc", publishTo: "consul")]
class CalculatorService implements CalculatorServiceInterface
{

    public function add(int $a, int $b): int
    {
        return  $a + $b;
    }
}