<?php
    class controller{
        function Model($model){
            require_once("./MVC/Models/".$model.".php");
            return new $model;
        }
        function Views($View,$data){
            require_once("./MVC/Views/".$View.".php");
        }
    }
?>