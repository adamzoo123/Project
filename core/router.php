<?php

namespace App\Core;

class Router{

    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback === false){
            Application::$app->response->setStatusCode(404);
            return $this->renderView("_404");
        }

        if(is_string($callback)){
            return $this->renderView($callback);
        }
      
       return call_user_func($callback);
    }

    public function renderView($view, $params = []){
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderContent($viewContent){
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function layoutContent(){
        ob_start();
        include_once Application::$ROOT_DIR . "/frontend/view/layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params){
        ob_start();
        include_once Application::$ROOT_DIR . "/frontend/view/$view.php";
        return ob_get_clean();
    }

}