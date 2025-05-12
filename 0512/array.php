<?php
$players = [
    [
        'rank' => 1,
        'name' => '山本',
        'era' => 1.80,
        'team' => 'ドジャース'
    ], [
        'rank' => 2,
        'name' => 'ルサルド',
        'era' => 2.11,
        'team' => 'フィリーズ'
    ], [
        'rank' => 3,
        'name' => 'ペラルタ',
        'era' => 2.18,
        'team' => 'ブリュワーズ'
    ], [
        'rank' => 4,
        'name' => 'キング',
        'era' => 2.22,
        'team' => '	パドレス'
    ], [
        'rank' => 5,
        'name' => 'キャニング',
        'era' => 2.357,
        'team' => 'メッツ'
    ],
];

// 名前だけ
foreach ($players as $player) {
    echo $player['name'] . "<br>";
}

// 2.21以上の選手
foreach ($players as $player){
    if ($player['era']>=2.2){
        echo $player ['name'] . "\n";
    }
}

$sanrio_characters = [
    ['name' => 'ハローキティ', 'debut' => 1974, 'category' => '猫'],
    ['name' => 'マイメロディ', 'debut' => 1975, 'category' => 'ウサギ'],
    ['name' => 'クロミ', 'debut' => 2005, 'category' => 'ウサギ'],
    ['name' => 'シナモロール', 'debut' => 2001, 'category' => '犬'],
    ['name' => 'ポムポムプリン', 'debut' => 1996, 'category' => '犬'],
    ['name' => 'バッドばつ丸', 'debut' => 1993, 'category' => 'ペンギン'],
    ['name' => 'けろけろけろっぴ', 'debut' => 1988, 'category' => 'カエル'],
];

foreach ($sanrio_characters as $character) {
    echo "デビュー年: " . $character['debut'] . "\n";
}

foreach($sanrio_characters as $character){
    foreach($character as $key => $value){
        if($key == 'name'){
            echo $value . "\n";
        }
    }
}
// foreachは要素の数だけ繰り返す



?>