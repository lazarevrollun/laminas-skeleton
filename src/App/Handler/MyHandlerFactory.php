<?php

declare(strict_types=1);

namespace App\Handler;
use Psr\Log\LoggerInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;



class MyHandlerFactory
{
    public function __invoke(ContainerInterface $container): RequestHandlerInterface
    {
        return new MyHandler($container->get(LoggerInterface::class));
    }
}
