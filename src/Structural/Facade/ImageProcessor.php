<?php

namespace DesignPatterns\Structural\Facade;

use DesignPatterns\Structural\Facade\Lib\ImageFilter;
use DesignPatterns\Structural\Facade\Lib\ImageCropper;
use DesignPatterns\Structural\Facade\Lib\ImageCompressor;

class ImageProcessor
{
    private string $src;
    
    public function __construct(string $src)
    {
        $this->src = $src;
    }
    
    public function crop(): void
    {
        $cropper = new ImageCropper($this->src);
        $cropper->crop();
    }

    public function compress(): void
    {
        $compressor = new ImageCompressor($this->src);
        $compressor->compress();
    }

    public function filter(): void
    {
        $filter = new ImageFilter($this->src);
        $filter->apply();
    }
}
