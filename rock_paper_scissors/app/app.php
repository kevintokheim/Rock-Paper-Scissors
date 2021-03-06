<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__."/../views"
    ));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("form.html.twig");
    });

    $app->get("/results", function() use($app) {
        $current_game = new Game;
        //You can push multiple variables into the result in order to display multiple inputs
        $comp_number = rand(1, 3);
        if ($comp_number == 1) {
            $comp = "rock";
        } elseif ($comp_number == 2) {
            $comp = "paper";
        } elseif ($comp_number == 3) {
            $comp = "scissors";
        }

        $new_game = $current_game->makeGame($_GET["user"], $comp, TRUE);
        return $app["twig"]->render("results.html.twig", array("result" => $new_game));
    });

    return $app;

    //CSS files have to be listed under bootstrap links
    //CSS files should be saved in the web folder
?>
