<?php

declare(strict_types=1);

namespace App\Modules\Hello\Application\Handler\PayloadHandler;

use App\Modules\Hello\Application\Payload\Request\HelloPayload;
use Semitexa\Core\Attributes\AsPayloadHandler;
use Semitexa\Core\Contract\TypedHandlerInterface;
use Semitexa\Ssr\Http\Response\HtmlResponse;

#[AsPayloadHandler(payload: HelloPayload::class, resource: HtmlResponse::class)]
final class HelloHandler implements TypedHandlerInterface
{
    public function handle(HelloPayload $payload, HtmlResponse $resource): HtmlResponse
    {
        return $resource->renderTemplate('@project-layouts-Hello/hello.html.twig', [
            'php_version'    => PHP_VERSION,
            'swoole_version' => defined('SWOOLE_VERSION') ? SWOOLE_VERSION : 'n/a',
        ]);
    }
}
