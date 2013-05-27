<?php

namespace Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader;

use Imagine\Image\Box;
use Imagine\Filter\Basic\CropCentered;

class CropCenteredFilterLoader implements LoaderInterface {

  public function load(array $options = array()) {
    list($width, $height) = $options['size'];

    return new CropCentered(new Box($width, $height));
  }

}
