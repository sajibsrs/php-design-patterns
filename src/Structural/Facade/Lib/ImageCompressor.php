<?php

namespace DesignPatterns\Structural\Facade\Lib;

class ImageCompressor
{
    private string $src;

    public function __construct(string $src)
    {
        $this->src = $src;
    }
    
    public function compress(): void
    {
        printf("Compressing: %s\n", $this->src);
    }
}
