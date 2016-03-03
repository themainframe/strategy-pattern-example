<?php
namespace StrategyPatternBundle\Strategy;

class ShortStrategy implements StrategyInterface
{
    public function canProcess($data)
    {
        return strlen($data) < 10;
    }

    public function process($data)
    {
        return $data;
    }
}
