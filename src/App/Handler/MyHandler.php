<?php

declare(strict_types=1);

namespace App\Handler;

use Laminas\Diactoros\Response\HtmlResponse;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class MyHandler implements RequestHandlerInterface
{
    public function __construct($logger) {

    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        return new HtmlResponse('Hello World!');
    }
}
