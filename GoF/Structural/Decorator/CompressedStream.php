<?php

declare(strict_types=1);

namespace GoF\Structural\Decorator;

class CompressedStream implements StreamInterface
{
    private StreamInterface $stream;

    public function __construct(StreamInterface $stream)
    {
        $this->stream = $stream;
    }

    public function write(string $data): void
    {
        $this->stream->write($this->compressData($data));
    }

    private function compressData(string $data): string
    {
        return substr($data, 0, 7);
    }
}
