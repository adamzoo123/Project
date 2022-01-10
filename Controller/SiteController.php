<?php

namespace App\Controller;
use \App\Core\Application;

class SiteController{

    public static function cp(){
        return Application::$app->router->renderView('cp');
    }
}