<?php
namespace StrategyPatternBundle;

use StrategyPatternBundle\Strategy\StrategyInterface;

class Context
{
    private $strategies = array();

    public function addStrategy(StrategyInterface $strategy)
    {
        $this->strategies[] = $strategy;
    }

    public function handle($data)
    {
        foreach ($this->strategies as $strategy) {
            if ($strategy->canProcess($data)) {
                return $strategy->process($data);
            }
        }
        return $data;
    }
}
