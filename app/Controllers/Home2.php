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

    // echo $mul;

    $data = array(
        "name"=>"mark",
        "age"=>20
    );

    // echo "inside bad";
    // echo "its working";
   return view('hello',$data);
}

public function any2(){
    $db = \Config\Database::connect();
    $builder = $db->table('anything');
    $data= array(
        "name"=> "mark",
        "class"=> 5,
        "roll_no"=> 67,
        "is_enrolled"=> "mark"
    );
    $builder->insert($data);
    echo "data is inserted successfully";
}

public function john(){
    $db = \Config\Database::connect();
    $builder = $db->table('anything');
    $data=array(
        "name"=> "Vishal",
        "class"=> 5,
        "roll_no"=> 95,
        "is_enrolled"=>"true"
    );
    $builder->insert($data);
    echo "2nd data is also inserted successfully";
}

//trying to fetch data
public function fetch(){
    $db = \Config\Database::connect();
    $builder = $db->table('anything');
    $data2 = $builder->get();
    print_r($data2);
   
    // return view('resDisp');
  
}

public function itemview(){
    $db = \Config\Database::connect();
    $builder = $db->table('item_master');
    $fetchData = $builder->get()->getResultObject();
    // echo $fetchData;
    // print_r($fetchData);
    return view('itemView', ["item_array"=>$fetchData]);
}

public function addItemForm(){
    if($_POST==null){
        return view('addItemView');
    }else{
        $db = \Config\Database::connect();
        $builder = $db->table('item_master');
        $postData = [
            'item1' => $_POST["item1"],
            'price' => $_POST["price"],
            'colour' => $_POST["colour"],
            'qty' => $_POST["qty"]
        ];
        // print_r($postData);
        $builder->insert($postData);
        // $this->load->helper('http://127.0.0.1/first-project/public/Home2/itemview');
        return view('addItemView');
    }
   
}

// public function handleItemData(){
//     echo "POST request is being handled";
// }

}