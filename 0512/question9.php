<?php
// 問題1：「Hello, World!」を出力する関数を定義して、実行してください。
// 期待される出力：Hello, World!
function helloWorld(){
    echo'Hello,World!';
}
helloWorld();

// 問題2：数字を1つ受け取り、その2倍の値を返す関数を定義し、10を渡して結果を表示してください。
// 期待される出力：20
function double($number){
    return $number * 2
;}
echo double(10). '<br>';

// 問題3：名前を引数にとり、「こんにちは、〇〇さん」と表示する関数を作成してください（〇〇に「Taro」を指定）。
// 期待される出力：こんにちは、Taroさん
function greet($name){
    echo'こんにちは、'.$name.'さん';
}
greet('Taro'). '<br>';

// 問題4：2つの数値を受け取り、合計を返す関数を定義し、5と7を渡して結果を表示してください。
// 期待される出力：12
function sum($a,$b){
    return $a + $b;
}
echo sum(5,7). '<br>';

// 問題5：引数が偶数かどうかを判定し、true/falseを返す関数を作ってください（4を渡す）。
// 期待される出力：1（true）
function isEven($number){
    return $number % 2 === 0;
}
echo isEven(4). '<br>';

// 問題6：3つの引数を受け取り、最大値を返す関数を作成し、3, 9, 7 を渡して実行してください。
// 期待される出力：9
function maxOfThree($a, $b, $c){
    return max($a, $b, $c);
}
echo maxOfThree(3,9,7)  . '<br>';

// 問題7：配列を引数として受け取り、すべての要素の合計を返す関数を定義してください。
// 期待される出力：10
function sumArray($array){
    $sum = 0;
    foreach($array as $value){
        $sum += $value;
    }
    return $sum;
}
echo sumArray([1,2,3,4])  . '<br>';

// 問題8：文字列を大文字に変換して返す関数を定義し、「php」を渡してください。
// 期待される出力：PHP
function toUppercase($string)
{
    return strtoupper($string);
}
echo toUppercase('php');
// 問題9：数字を受け取り、偶数なら「Even」、奇数なら「Odd」と返す関数を作ってください（3を渡す）。
// 期待される出力：Odd
function evenOrOdd($number){
    if($number % 2 === 0){
        return 'Even';
    }else{
        return 'Odd';
    }
    }
echo evenOrOdd(3)  . '<br>';

// 問題10：名前と年齢を引数に取り、「〇〇さんは△△歳です」と表示する関数を作ってください（Yuki, 25）
// 期待される出力：Yukiさんは25歳です
function introduce($name,$age){
    echo $name.'さんは'.$age.'際です';
}
introduce('Yuki',25);