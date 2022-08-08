<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ImageManipulation extends BaseController
{
    public function image_fit()
    {
        $image = \Config\Services::image()
        ->withFile(WRITEPATH . 'uploads/movies/10/1659279359_52e596ae1cc8e056c672.png')
        ->fit(100, 100, 'center')
        ->save(WRITEPATH . 'uploads/imagemanipulation/image_fit.png');
    }
    
    public function image_crop()
    {
        $xOffset = 100;
        $yOffset = 100;

        $image = \Config\Services::image()
        ->withFile(WRITEPATH . 'uploads/movies/10/1659279359_52e596ae1cc8e056c672.png')
        ->crop(50, 50, $xOffset, $yOffset)
        ->save(WRITEPATH . 'uploads/imagemanipulation/image_crop.png');
    }

}
