<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TitleCaseGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {

        return $app['twig']->render('form.twig');
    });

    $app->get("/view_title_case", function() use($app) {
        $my_title_case_generator = new TitleCaseGenerator;
        $title_cased_phrase = $my_title_case_generator->makeTitleCase($_GET['phrase']);
        return $app['twig']->render('title_cased.twig', array('result' => $title_cased_phrase));
    });

    return $app;
?>
