<?php
    class App{
        private $controller = "home";
        private $action = "sayHi";
        private $param = [];
        function __construct()
        {
          $arr = $this->getURL();
        
          if(file_exists("./MVC/Controllers/". $arr[0] .".php")){
             $this->controller = $arr[0];
             unset($arr[0]);
          }
          
          require_once("./MVC/Controllers/". $this->controller .".php");
          $this->controller = new $this->controller;

          if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
               
            }
            unset($arr[1]);
            $this->controller = new $this->controller;
            
          }
          $this->param =(isset($arr))?array_values($arr):[];
          call_user_func_array([$this->controller,$this->action],$this->param);

        }
        function getURL(){
            if(isset($_GET['url'])){
                return explode("/",$_GET['url']);
            }
        }

    }
?>