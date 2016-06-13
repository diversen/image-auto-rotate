# README

Auto rotate images to correct orientation

See answers on: 

http://stackoverflow.com/questions/7489742/php-read-exif-data-and-adjust-orientation

# Install

    composer require diversen/image-auto-rotate

# Usage

Only one method: 

~~~php
<?php

use diversen\imageRotate;

// The class works directly on an image
$rotate = new imageRotate();
$rotate->fixOrientation($file['tmp_name']);
~~~

