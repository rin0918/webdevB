<?php
// 関数の定義　実行はされていない
// 価格をパラメータに入力したら、税込価格を表示(echo)する関数
function tax($price){
    echo $price * 1.1;
}

//関数名に続けて()をつけて、中にパラメータの値を入れる
tax(100);

// 変数の定義（戻り値・返り値がある関数)
function tax2($price){
    return $price * 1.1;
}
// 関数の実行
tax2(100);
$sample_price = tax2(100);
echo'消費税込み価格'.$sample_price.'円';
