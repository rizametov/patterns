<?php

declare(strict_types=1);

namespace GoF\Structural\Decorator;

class EncryptedStream implements StreamInterface
{
    private StreamInterface $stream;

    public function __construct(StreamInterface $stream)
    {
        $this->stream = $stream;
    }

    public function write(string $data): void
    {
        $this->stream->write($this->encryptData($data));
    }

    private function encryptData(string $data): string
    {
        return preg_replace('/.{5}$/', '*****', $data);
    }
}
