<?php

class Application {
    
    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim( $url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) $url[0] = 'home';
        $url[0] = ucfirst($url[0]);

        $messageId = isset($_GET['deleteMessage']) ? $_GET['deleteMessage'] : null;
        Message::remove($messageId);

        require 'controller/Navbar.php';
        $navbarController = new Navbar();
        $navbarController->loadModel();
        $navbarController->initCategories();

        $file = 'controller/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            echo "(404) No \"$url[0]\" controller found <br />";
        }

        $controller = new $url[0];

        $controller->loadModel();

        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                echo "Echo calling method with param $url[1]($url[2])";
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    echo "Error calling method $url[1]() <br />";
                }
            }
        }

        $controller->index();

    }

}