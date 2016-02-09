<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Home";
    });

    return $app;



?>

// require_once - It opens the autoload.php file which Composer added into the vendor folder.
