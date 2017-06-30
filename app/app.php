<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";
    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
            $_SESSION['list_of_contacts'] = array();
    }
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));



    $app->get("/", function () use ($app) {
        $contact = Contact($_GET['first_name'], $_GET['last_name'], $_GET['phone'], $_GET['address']);
        $contact->save();

        return $app['twig']->render('contact.html.twig', array('contact' => $contact));
    }
    return $app;
   ?>
