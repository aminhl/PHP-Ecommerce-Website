<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params;

    public function __construct(){
        $url = $this->parseURL();
        if (file_exists('../app/controllers/' . strtolower($url[0]) . '.php')){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        if (isset($url[1])){
            $url[1] = strtolower($url[1]);
            if (method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = (count($url)) ? array_values($url) : ['home'];
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    private function parseURL(){
        $url = $_GET['url'] ?? 'home';
        return explode('/',filter_var(trim($url,'/'),FILTER_SANITIZE_URL));
    }
}