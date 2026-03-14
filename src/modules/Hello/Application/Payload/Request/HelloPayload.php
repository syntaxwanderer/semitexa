<?php

declare(strict_types=1);

namespace App\Modules\Hello\Application\Payload\Request;

use Semitexa\Core\Attributes\AsPayload;
use Semitexa\Ssr\Http\Response\HtmlResponse;

#[AsPayload(
    path: '/',
    methods: ['GET'],
    responseWith: HtmlResponse::class,
)]
class HelloPayload
{
}
