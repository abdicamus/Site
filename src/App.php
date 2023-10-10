<?php

namespace App;

use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Slim\Flash\Messages;
use DI\Container;

function createApp($deps) {
    $container = new Container();

    foreach ($deps as $name => $callback) {
        $container->set($name, $callback);
    }

    $app = AppFactory::createFromContainer($container);

    $app->addErrorMiddleware(true, true, true);

    $app->add(
        function ($request, $next) {
            // Start PHP session
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }

            // Change flash message storage
            $this->get('flash')->__construct($_SESSION);

            return $next->handle($request);
        }
    );

    return $app;
}