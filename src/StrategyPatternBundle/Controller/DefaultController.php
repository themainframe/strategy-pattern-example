<?php

namespace StrategyPatternBundle\Controller;

use StrategyPatternBundle\Context;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function indexAction()
    {
        return new Response(
            $this->context->handle('hello') . PHP_EOL . $this->context->handle('hello world'),
            200,
            array('Content-Type' => 'text/plain')
        );
    }
}
