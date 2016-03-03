<?php
namespace StrategyPatternBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class StrategyCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // Find the definition of our context service
        $contextDefinition = $container->findDefinition('context');

        // Find the definitions of all the strategy services
        $strategyServiceIds = array_keys(
            $container->findTaggedServiceIds('strategy')
        );

        // Add an addStrategy call on the context for each strategy
        foreach ($strategyServiceIds as $strategyServiceId) {
            $contextDefinition->addMethodCall(
                'addStrategy',
                array(new Reference($strategyServiceId))
            );
        }
    }
}
