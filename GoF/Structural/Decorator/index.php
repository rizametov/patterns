<?php

declare(strict_types=1);

require_once dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

use GoF\Structural\Decorator\CloudStream;
use GoF\Structural\Decorator\EncryptedStream;
use GoF\Structural\Decorator\CompressedStream;
use GoF\Structural\Decorator\StreamInterface;

function store(StreamInterface $stream, string $data): void
{
    $stream->write($data);
}

$data = '1234-5678-9900';

store(new CloudStream(), $data);

store(new EncryptedStream(new CloudStream()), $data);

store(new CompressedStream(new EncryptedStream(new CloudStream())), $data);
