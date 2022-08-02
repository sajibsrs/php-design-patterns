<?php

namespace DesignPatterns\Structural\Facade\Lib;

class ImageFilter
{
    private string $src;

    public function __construct(string $src)
    {
        $this->src = $src;
    }

    public function apply(): void
    {
        printf("Applying filter: %s\n", $this->src);
    }
}
