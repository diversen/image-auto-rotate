<?php

namespace diversen;

class imageRotate  {

    public function fixOrientation($filename) {
        
        $image = imagecreatefromjpeg($filename);
        $exif = exif_read_data($filename);

        if (!empty($exif['Orientation'])) {
            switch ($exif['Orientation']) {
                case 3:
                    $image = imagerotate($image, 180, 0);
                    break;

                case 6:
                    $image = imagerotate($image, -90, 0);
                    break;

                case 8:
                    $image = imagerotate($image, 90, 0);
                    break;
            }
        }
        imagejpeg($image, $filename);
        
    }
}

