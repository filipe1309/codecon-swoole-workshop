<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Hyperf\HttpServer\Contract\ResponseInterface;
use Swoole\Http\Request;
use Swoole\Http\Status;

//class IndexController
class IndexController extends AbstractController
{
    // private $responseFactory;

    // public function __construct(ResponseInterface $responseFactory)
    // {
    //     $this->responseFactory = $responseFactory;
    // }

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Opa {$user}.",
        ];
    }

    // public function index()
    // public function index(Request $request): ResponseInterface
    // {
    //     $user = $this->request->input('user', 'Hyperf');
    //     $method = $this->request->getMethod();

    //     // return [
    //     //     'method' => $method,
    //     //     'message' => "Opa {$user}.",
    //     // ];

    //     return $this->responseFactory
    //         ->json('Hello World')
    //         ->withStatus(Status::CREATED);
    // }
}
