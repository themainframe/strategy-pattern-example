<?php
namespace StrategyPatternBundle\Strategy;

class LongStrategy implements StrategyInterface
{
    public function canProcess($data)
    {
        return strlen($data) >= 10;
    }

    public function process($data)
    {
        return substr($data, 0, 10) . '...';
    }
}
