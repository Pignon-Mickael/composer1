    <?php

    require __DIR__ . '/../vendor/autoload.php';

    $wilder = new App\Wcs\Hello();
    echo $wilder->talk();
