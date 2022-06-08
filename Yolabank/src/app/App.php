<?php

namespace Bankas;

use Bankas\Controllers\HomeController;
use Bankas\Messages;

class App
{
    const DOMAIN = 'yolabank.lt';
    private static $html;

    public static function start()
    {
        session_start();
        Messages::init();
        ob_start();
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri);
        self::route($uri);
        self::$html = ob_get_contents();
        ob_end_clean();
    }
    public static function sent()
    {
        echo self::$html;
    }

    public static function view(string $name, array $data = [])
    {
        extract($data);
        return require __DIR__ . '/../views/' . $name . '.php';
    }
    public static function json(array $data = [])
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
    public static function redirect($url = '')
    {
        header('Location:http://' . self::DOMAIN . '/' . $url);
    }
    private static function route(array $uri)
    {
        $m = $_SERVER['REQUEST_METHOD'];

        if (count($uri) == 1 && $uri[0] === '') {
            return (new HomeController)->index();
        }
        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'json') {
            return (new HomeController)->indexJson();
        }
        if ('GET' == $m && count($uri) == 1 && $uri[0] === 'forma') {
            return (new HomeController)->form();
        }
        if ('POST' == $m && count($uri) == 1 && $uri[0] === 'forma') {
            return (new HomeController)->doForm();
        } else {
            echo 'kita';
        }
    }
}
