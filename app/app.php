<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

// End busy code ------------^

    // Render Home Page
    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig'); //
    });

    // Render Home Page
    $app->get("/return_results", function() use ($app) {
        $my_anagram = new Anagram;
        $result = $my_anagram->softCompareWords($_GET['master'] , $_GET['test']);

        return $app['twig']->render('index.html.twig', array(
            'result' => $result
        )); //
    });

    return $app;

?>
