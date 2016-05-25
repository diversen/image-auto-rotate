# README

Auto rotate images to correct orientation

See answers on: 

http://stackoverflow.com/questions/10034255/how-to-read-an-image-with-php

# Install

    composer require diversen/image-auto-rotate

# Usage

Only one method: 

~~~php
<?php

use diversen\imageRotate;

// Works on directly on image
$rotate = new imageRotate();
$rotate->fixOrientation($file['tmp_name']);
~~~

