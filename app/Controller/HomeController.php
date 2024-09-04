<?php
namespace MochamadWahyu\Phpmvc\Controller;
use MochamadWahyu\Phpmvc\App\View;
class HomeController{
    function index(){
        $model = [
            'title'=>'Belajar PHP MVC',
            'content'=>'selamat belajar PHP MVC di channel programmer zaman now'
        ];
        // echo "HomeController.index()";
        View::render('Home/index', $model);
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
    function Login():void{
        $request = [
            "username"=>$_POST['username'],
            "password" => $_POST['username']
        ];
        $user = [];

        $response=[
            'message'=>'login sukses'
        ];
    }
}