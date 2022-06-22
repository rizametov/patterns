<?php

declare(strict_types=1);

namespace GoF\Behavioral\Strategy;

class ImageStorage
{
    private CompressorInterface $compressor;
    private FilterInterface $filter;

    public function __construct(CompressorInterface $compressor, FilterInterface $filter)
    {
        $this->compressor = $compressor;
        $this->filter = $filter;
    }

    public function store(string $fileName): void
    {
        $this->compressor->compress($fileName);
        $this->filter->apply($fileName);
    }
}
