<?php

namespace DesignPatterns\Structural\Facade\Lib;

class ImageCropper
{
    private string $src;

    public function __construct(string $src)
    {
        $this->src = $src;
    }

    public function crop(): void
    {
        printf("Cropping: %s\n", $this->src);
    }
}
