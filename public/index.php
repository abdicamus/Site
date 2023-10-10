<?php
/**
* Docs: https://www.slimframework.com/
* Redirect: https://www.slimframework.com/docs/v4/objects/response.html#returning-a-redirect 
*/

require __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;
use Slim\Flash\Messages;
use Slim\Routing\RouteContext;

$app = App\createApp([
    /**
    * Позволяет определять временные сообщения, 
    * которые сохраняются только от текущего запроса 
    * до следующего запроса.
    *
    * Пример:
    * $this->get('flash')->addMessage('success', 'Message');
    */
    'flash' => function () {
        $storage = [];
        return new Messages($storage);
    },
    /**
    * Отвечает за отрисовку шаблонов (представлений).
    * Упрощает процесс сборки шаблонов по частям.
    */
    'renderer' => function ($c) {
        $templatesPath = __DIR__ . '/../templates';

        $renderer = new PhpRenderer(
            $templatesPath, 
            ['messages' => $c->get('flash')->getMessages()],
        );

        $renderer->setLayout('layouts/app.php');

        return $renderer;
    },
]);

/**
* Работа с роутами. Поиск по именам.
*/
$router = $app->getRouteCollector()->getRouteParser();

$app->get('/', function (Request $request, Response $response) {
    return $this->get('renderer')->render($response, "home.php");
})->setName('home');

$app->get('/register', function (Request $request, Response $response) {
    return $this->get('renderer')->render($response, "register.php");
})->setName('register_page');

$app->post('/register', function (Request $request, Response $response) use ($router) {
    $parsedBody = $request->getParsedBody();

    $email = $parsedBody['user']['email'];
    $name = $parsedBody['user']['name'];
    $password = $parsedBody['user']['password'];

    $databasePath = __DIR__ . '/../database.json';
    $databaseRaw = file_get_contents($databasePath);
    $database = json_decode($databaseRaw, true);

    $database['users'][] = [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'name' => $name,
    ];

    $databaseRawNew = json_encode($database);
    file_put_contents($databasePath, $databaseRawNew);

    return $response
        ->withHeader('Location', $router->urlFor('register_page'))
        ->withStatus(302);
})->setName('register');

$app->run();