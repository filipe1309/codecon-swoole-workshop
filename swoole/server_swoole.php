<?php

declare(strict_types=1);

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server('127.0.0.1', 8080);

$server->on('request', function (Request $request, Response $response): void {
    $uri = $request->server['request_uri'];

    if ($uri === '/tralala') {
        $response->end('Hello World!');
    }

    $response->end('Not Found!');
});

$server->start();
