<?php


namespace App\JsonRpc\Producer;

interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}