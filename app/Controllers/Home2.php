<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Home2 extends Controller{

public function index(){
    echo "working";
}

public function bad(){

    $num = 20;
    $mul = $num *2;

    echo $mul;

    $data = array(
        "name"=>"mark",
        "age"=>20
    );

    // echo "inside bad";
    echo "it working";
   return view('hello',$data);
}


}