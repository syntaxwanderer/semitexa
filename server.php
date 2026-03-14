<?php

declare(strict_types=1);

define('SEMITEXA_PROJECT_ROOT', __DIR__);

// Rebuild classmap before Swoole forks workers — ensures moved/added classes are visible.
$composerBin = (string) shell_exec('which composer 2>/dev/null');
$composerBin = trim($composerBin) !== '' ? trim($composerBin) : PHP_BINARY . ' ' . __DIR__ . '/vendor/bin/composer';
passthru($composerBin . ' dump-autoload --working-dir=' . escapeshellarg(__DIR__) . ' --quiet 2>&1');

require_once __DIR__ . '/vendor/autoload.php';

\Semitexa\Core\Server\SwooleBootstrap::run();
