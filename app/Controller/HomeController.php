<?php
namespace MochamadWahyu\Phpmvc\Controller;
class HomeController{
    function index(){
        $model = [
            'title'=>'Belajar PHP MVC',
            'content'=>'selamat belajar PHP MVC di channel programmer zaman now'
        ];
        echo "HomeController.index()";
    }
    function hello():void{
        echo "HomeController.hello()";
    }
    function world():void{
        echo "HomeController.world()";
    }
    function about(){
        echo "AUTHOR : Mochamad Wahyu";
    }
}