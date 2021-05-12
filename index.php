<?php
$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
if (isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}
echo $view->output();

require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.html');
echo $template->render(array());
