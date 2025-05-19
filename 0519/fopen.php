<!--HTMLのコメント -->
<?php
// データを読み込む→$fp変数に代入
$fp = fopen('bookdata.csv','r');
// var_dump($fp);

if($fp === false){
    echo'ファイルのオープンに失敗しました。';
    exit;
}
// 1行を処理する
// $row = fgetcsv($fp);
//書籍名と著者名を表示する
while ($row = fgetcsv($fp)) {
    echo '<ul>';
    echo '<li>' . "書籍名："  . htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8') . '</li>';
    echo '<li>' . "著者名："  . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . '</li>';
    echo '</ul>';
  }
?>