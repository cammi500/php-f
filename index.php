<?php
$product=require "./cards.php";


// $name ="thiri Aung";
// var_dump("$name");
// print("hello php");
// echo $name;//javascript + php . //plus

// $fruit ="mango";
// if($fruit==="mango"){
//     echo "this is fruits";
    
// }else{
//     echo "this is not";
// } -->

// $result = $fruits === "apple" ? "this is apple": "this is not apple";
// echo $result; -->


//string
// $name = 'Hlaing Min Than';
// $name = "Zaw Zaw";

// //number
// $name = 12; //int
// $name = 12.4; //float


// $age = 100;
// $age = null;

// var_dump($age);




//bolean
// $name = true; //true,false


// //array

// // //numeric array
// $names = ['mgmg', 'aung aung', 'kyaw kyaw', 'zaw zaw']; // length - 4 , $names[3]

// // //associated array
// $studentInfo = [
//     'name' => 'Hlaing Min Than',
//     'email' => 'hlaingminthan92@gmail.com'
// ]; //2 , $studentInfo['name]

// //arithmetic -> value
// $total = 1000;

// $total = $total - 1;

// echo $total;
// // $product1 = 1000;
// $product2 = 2000;
// $product3 = 3000;


//  $total += $product1; // $total = 1000
// $total += $product3; // $total = 4000

// $value = 10 + 3 - 2 * 4; // ????

// echo $value;

//comparison operator -> boolean
//true , false

// == , === (difference)

// 1000 !== 1000;


// $name ="thiriaung";
// $age =20;
// var_dump($name==="thiriaung" || $age =22);
function whoCanGetDiscount($name,$isMarried){
    $person =[
        "name"=> $name,
        
        "isMarried" =>$isMarried
];
if($person["name"]=== "coder" || $person["isMarried"]){
    echo "$name "."you can get discount<br/>";
}
}
// whoCanGetDiscount("kyaw",true);
// whoCanGetDiscount("mgmg",false);
// whoCanGetDiscount("coder",true);

$persons =[
    [
        "name"=>"kyaw",
        "isMarried"=>true,

    ],
    [
        "name"=>"coder",
        "isMarried"=>true,

    ],
    [
        "name"=>"mgmg",
        "isMarried"=>false,

    ],
];

// for ($i = 0 ; $i<count($persons) ; $i++){
//     $person=$persons[$i];
//     $name=$person["name"];
//     $isMarried=$person["isMarried"];
//     whoCanGetDiscount($name,$isMarried);
// }


// foreach($persons as $person){
//     $name=$person["name"];
//     $isMarried=$person["isMarried"];
//     whoCanGetDiscount($name,$isMarried);
// }

// $carts =[
//     ['name'=>'iphone max pro',
//         'price'=>10000
// ],
//     ['name'=>' mabook pro',
//     'price'=>105000
// ],
// ];
