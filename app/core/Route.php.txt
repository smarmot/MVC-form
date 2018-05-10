<?php

class Route
{
    static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'main';
        $action_name = 'index';
        $args = null;

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
//        if (!empty($routes[2])) {
//            $controller_name = $routes[2];
//        }

        array_shift($routes);
        array_shift($routes);

        $path_to_controller = "app/controllers/";
        if (!empty($routes[0])) {
            $path_to_controller .= $routes[0] . 'Controller.php';
            if (is_file($path_to_controller))
                $controller_name = array_shift($routes);
        }

        $model_name = $controller_name;
        $controller_name = $controller_name . 'Controller';
//        $action_name = $action_name;

        // подцепляем файл с классом модели (файла модели может и не быть)
        $model_file = strtolower($model_name) . '.php';
        $model_path = "app/models/" . $model_file;
        if (file_exists($model_path)) {
            include "app/models/" . $model_file;
        }

        // подцепляем файл с классом контроллера
        $controller_file = $controller_name . '.php';
        $controller_path = "app/controllers/" . $controller_file;

        if (file_exists($controller_path)) {
            include "app/controllers/" . $controller_file;
        } else {
            Route::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controller_name;
        //$action = $action_name;

//        if (method_exists($controller, $action)) {
//            // вызываем действие контроллера
//            $controller->$action(/*$args*/);
//        } else {
//            $action = 'index';
//            //Route::ErrorPage404();
//        }

        if ($routes) {
            if (method_exists($controller, $routes[0])) {
                $action_name = array_shift($routes);
            }
        }

        $action = $action_name;

        if ($routes) {
            if ($routes[0]) {
                $args = $routes[0];
                $controller->$action($args);
            } else {
                $controller->$action();
            }
        } else {
            $controller->$action();
        }
//        if (isset($routes[0])) {
//            $args = $routes[0];
//            $controller->$action($args);
//        } else {
//            $controller->$action();
//        }

    }

    public static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}