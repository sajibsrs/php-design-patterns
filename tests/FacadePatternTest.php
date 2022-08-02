<?php

use DesignPatterns\Structural\Facade\ImageUploader;
use PHPUnit\Framework\TestCase;

/**
 * @covers \DesignPatterns\Structural\Facade\ImageUploader
 * @covers \DesignPatterns\Structural\Facade\ImageProcessor
 * @covers \DesignPatterns\Structural\Facade\Lib\ImageCompressor
 * @covers \DesignPatterns\Structural\Facade\Lib\ImageCropper
 * @covers \DesignPatterns\Structural\Facade\Lib\ImageFilter
 */
final class FacadePatternTest extends TestCase
{
    public function testShouldOutputOperations(): void
    {
        $imageUploader = new ImageUploader("image.png");
        $this->expectOutputString(
            "Cropping: image.png\nApplying filter: image.png\nCompressing: image.png\nUploading: new_image.png\n",
            $imageUploader->upload()
        );
    }
}
