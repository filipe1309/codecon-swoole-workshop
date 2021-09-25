<?php

use Swoole\Coroutine;

// -1 Out of a courotine
// echo Coroutine::getCid(), PHP_EOL;

function faz_alguma_coisa(): void
{
    sleep(1);
}

Co\run(static function (): void {
    // echo Coroutine::getCid(); // 1
    // go(static function (): void {
    //     // echo Coroutine::getCid(); // 2
    //     faz_alguma_coisa();
    // });

    go('faz_alguma_coisa');
    go('faz_alguma_coisa');
    go('faz_alguma_coisa');
});
