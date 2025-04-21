<?php
$greeting = "こんばんは";
echo $greeting;

$price = 1000;
$price2 = "100";
echo $price;

// コメントアウト
# コメントアウト
/*
コメントアウト
*/

echo $price + $price2;
// 勝手に計算される
?>
<br>
<?php
$a = "こんにちは";
var_dump($a);
// 日本語は3bit 文字列string(文字数×3)
$b = 123;
var_dump($b);

$c = 175.25;
var_dump($c);
// var_dumpで型を出す
?>