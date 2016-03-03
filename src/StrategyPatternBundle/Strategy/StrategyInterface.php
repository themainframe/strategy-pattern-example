<?php
namespace StrategyPatternBundle\Strategy;

interface StrategyInterface
{
    public function canProcess($data);
    public function process($data);
}
