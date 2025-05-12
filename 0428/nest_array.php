<?php
$people[]=['name'=>'佐藤','blood'=>'A'];
$people[]=['name'=>'田中','blood'=>'B'];
$people[]=['name'=>'加藤','blood'=>'O'];

var_dump($people);
echo"<br>";
echo $people[0]['blood'] . "<br>"; #A
echo $people[2]['name'] . "<br>";#加藤

foreach($people as $people_key => $person){
    echo'順番は' .$people_key . "<br>";
    foreach($person as $person_key => $value){
        echo 'キーは' . $person_key . '、値は' . $value . "<br>";
    }
}

#2次元配列を作ってください
$people2 = [
    ['name'=>'佐藤','blood'=>'A'],
    ['name'=>'田中','blood'=>'B'],
    ['name'=>'加藤','blood'=>'O'],
    ['name'=>'鈴木','blood'=>'AB'],
    ['name'=>'高橋','blood'=>'A'],
    ['name'=>'山田','blood'=>'B'],
    ['name'=>'伊藤','blood'=>'O'],
    ['name'=>'渡辺','blood'=>'AB'],
    ['name'=>'中村','blood'=>'A'],
    ['name'=>'小林','blood'=>'B'],
];
#全員の血液型のみを表示
// foreach($people2 as $person){
//     echo $person['blood'] . "<br>";
// }

foreach($people2 as $person){
    foreach($person as $key => $value){
        if($key == 'blood'){
            echo $value . "<br>";
        }
    }
}


?>