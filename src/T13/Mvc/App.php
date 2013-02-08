<?php

namespace T13\Mvc;

use T13\Http\Request;

/**
 * Базовый класс приложения.
 */
class Application
{
    protected $config;

    /**
     * Конструктор приложения.
     */
    public function __construct($config)
    {
        $this->config = [
            'app_namespace' => 'App',
            'dafault_action' => 'index',
            'dafault_controller' => 'Index',
        ];
    }

    /**
     * Запуск приложения.
     *
     * @return string
     */
    public function run()
    {
        /**
         * 1) Первым делом надо разобрать строку запроса и опредлить название контроллера и экшена, который должен выполниться.
         * Это всё запаковывается в класс Request.
         * http://fabien.potencier.org/article/51/create-your-own-framework-on-top-of-the-symfony2-components-part-2
         */

        // http://localhost/T13/FirstApp/123/
        echo $_SERVER['PHP_SELF'] . "<br />";       // /T13/FirstApp/123/index.php
        echo $_SERVER['REQUEST_URI'] . "<br />";    // /T13/FirstApp/123/

        $request = new Request();
        $request->


        // 2) Вторым делом выяснить какой контроллер и экшен нужно запускать, а также подходят ли кол-во параметров. переданные в строке запроса.

        $controller_name = $this->config['app_namespace'] . '\\Controller\\' . $this->config['dafault_controller'];
        $controller_action = $this->config['dafault_action'];

        $arguments = [];

        $controller = [$controller_name, $controller_action];
        $response = call_user_func_array($controller, $arguments);
        return $response;
    }

    /**
     * "Магический" метод, который позволит обратиться к объекту класса App как к вызову функции.
     */
    public function __invoke()
    {
        $this->run();
    }
}
