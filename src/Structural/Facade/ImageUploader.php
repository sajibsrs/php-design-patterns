<?php

namespace DesignPatterns\Structural\Facade;

class ImageUploader
{
    private string $src;
    private string $img;

    public function __construct(string $src)
    {
        $this->src = $src;
    }
    
    public function upload(): string
    {
        $service = new ImageProcessor($this->src);
        $service->crop();
        $service->filter();
        $service->compress();
        
        $this->img = "new_" . $this->src;
        printf("Uploading: %s\n", $this->img);

        return $this->img;
    }
}
