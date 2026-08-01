<?php

session_start();

date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
require "../vendor/autoload.php";

define('BASE_URL','/Proj_web/public');



$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r){

    $r->get('/','ClienteController@testp');
    $r->get('/clientes', 'ClienteController@listar');
    $r->get('/sobre', [App\Controller\HomeController::class, 'sobre']);
    $r->get('/clientes/novo', 'ClienteController@novo');
    $r->get('/clientes/{id}/editar', 'ClienteController@editar');
    $r->get('/clientes/{id}', 'ClienteController@buscar');
    $r->post('/clientes/comentario', 'ClienteController@comentario');
    $r->post('/clientes/{id}/remover', 'ClienteController@remover');

    $r->get('/admin/comentarios', 'ClienteController@listarPendentes');

    $r->post(
        '/clientes/{id}/aprovar',
        'ClienteController@aprovar'
    );

    $r->post(
        '/clientes/{id}/rejeitar',
        'ClienteController@rejeitar'
    );

    $r->get('/login', 'AdminController@login');
    $r->post('/login', 'AdminController@autenticar');
    $r->get('/logout', 'AdminController@logout');

    $r->get('/admin/novo', 'AdminController@novo');
    $r->post('/admin/cadastrar', 'AdminController@cadastrar');





});

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']),'/');
$uri = substr($uri, strlen($basePath)) ?: '/';

$method = $_SERVER['REQUEST_METHOD'];

$route = $dispatcher->dispatch($method, $uri);

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:

        http_response_code(404);
        echo "Rota não encontrada";
        break;

    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:

        http_response_code(405);
        echo "Método Não Permitido";
        break;

    case FastRoute\Dispatcher::FOUND:

        [$controllerClass, $action] = explode('@', $route[1]);
        $params = $route[2];

        $controllerNamespace = "controller\\{$controllerClass}";
        $controller = new $controllerNamespace();
        $controller->$action($params);
        break;
}