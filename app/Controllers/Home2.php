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

//Starting CRUD operations from here

//Creating controller to create entry in database
public function addItemForm(){
    if($_POST==null){
        return view('addItemView');
       
        // print_r($postData);
    }else{
        $db = \Config\Database::connect();
        $builder = $db->table('item_master');
        helper('text');
        $bytes = random_string('alnum', 16);

        // $randId = random_bytes(20);
        // var_dump(bin2hex($bytes));
        echo $bytes;
        $postData = [
            'id'=> $bytes,
            'item1' => $_POST["item1"],
            'price' => $_POST["price"],
            'colour' => $_POST["colour"],
            'qty' => $_POST["qty"]
        ];
        // print_r($postData);
        $builder->insert($postData);
        return redirect()->to('http://127.0.0.1/first-project/public/Home2/itemview'); 
        echo "Else logic is being executed";
        // return view('addItemView');
        
    }

   
}

//Creating update cotroller to update data in database
public function updateItem($sm){
    function checkToUpdate(){
        //FIrst validation to check if we can update or not
        
        // if()
        $dataTobeUpdated = $_POST;
        print_r(count($dataTobeUpdated));
        if(count($dataTobeUpdated)>0){

        }
        
    }
    // die("anything");
    
    if($sm!= null){
        $db = \Config\Database::connect();
        $builder = $db->table('item_master')
        ->getWhere(['id'=>$sm])
        ->getResultObject();
        checkToUpdate();
        return view('updateItem', ["toPopulateData"=>$builder]);
    }else{
        die("Something went wrong");
    }
    
}

}