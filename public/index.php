<?php

session_start();

require "../vendor/autoload.php";

define('BASE_URL','');

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r){

    $r->get('/', 'ClienteController@index');
    $r->get('/clientes', 'ClienteController@listar');
    $r->get('/clientes/novo', 'ClienteController@novo');
    $r->get('/clientes/{id}/editar', 'ClienteController@editar');
    $r->get('/clientes/{id}', 'ClienteController@buscar');
    $r->post('/clientes/cadastrar', 'ClienteController@cadastrar');
    $r->post('/clientes/{id}/remover', 'ClienteController@remover');

});

$uri = parse_url($_SERVER['REQUEST_URL'])['path'];

$basePath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])),'/');
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

        [$controllerClass, $action = explode('@', $route[1]);
        $params = $route[2];

        $controllerNamespace = "controller\\{$controllerClass}";
        $controller = new $controllerNamespace();
        $controller->$action($params);
        break;
}