<?php
/**
 * Вспомогательные функции
 */

use App\Helpers\Auth;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

function dump($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function dd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}

/**
 * @param string $controller
 * @param string $method метод контроллера
 * @param array|null $vars аттрибуты которые мы передадим в метод контроллера
 */
function handleController(string $controller, string $method, ?array $vars)
{
    $object = new $controller();
    $values = array_values($vars);
    $object->{$method}(...$values);
}

/**
 * Вставляем в шаблон переменные и возвращаем
 * @param string $template
 * @param array|null $params
 * @return false|string
 */
function includeTemplate(string $template, ?array $params)
{
    ob_start();
    extract($params);
    include($template);
    return ob_get_clean();

}

function isAuth(){
    return Auth::isAuth();
}
function isAdmin(){
    return Auth::isAdmin();
}