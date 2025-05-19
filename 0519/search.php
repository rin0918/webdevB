<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $keyword = trim($_POST["a"]);

    // 入力が空なら終了
    if ($keyword === "") {
        echo "検索語を入力してください。";
        exit;
    }

    $filename = "songs.csv";

    // CSVファイルが存在しない場合
    if (!file_exists($filename)) {
        echo "データファイルが見つかりません。"; //!は否定演算子
        exit;
    }

    $found = false;
    // "r"は読み込みモード
    if (($handle = fopen($filename, "r")) !== false) {
        echo "<h2>検索結果：</h2><ul>";

        while (($data = fgetcsv($handle)) !== false) {
            foreach ($data as $field) {
                // アルファベットのみかどうかをチェック
                if (preg_match('/^[a-zA-Z]+$/u', $keyword)) {
                    // 英字のみの場合は大文字小文字を無視して検索
                    // md_stripos→phpの関数　マルチバイトの中から部分文字列を検索
                    if (mb_stripos($field, $keyword) !== false) {                        echo "<li>";
                        echo "曲名：" . htmlspecialchars($data[0], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "アーティスト：" . htmlspecialchars($data[1], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "ジャンル：" . htmlspecialchars($data[2], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "年：" . htmlspecialchars($data[3], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "備考：" . htmlspecialchars($data[4], ENT_QUOTES, 'UTF-8') . "<br>";
                        // 6列目が存在する場合（例：説明がもう1つあるなど）
                        if (isset($data[5])) {
                            echo "補足：" . htmlspecialchars($data[5], ENT_QUOTES, 'UTF-8') . "<br>";
                        }
                        echo "</li>";
                        $found = true;
                        break;
                    }
                } else {
                    // 日本語などはそのままの条件で検索（大文字小文字を区別）
                    // md_strpos→phpの関数
                    if (mb_strpos($field, $keyword) !== false) {
                        echo "<li>";
                        echo "曲名：" . htmlspecialchars($data[0], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "アーティスト：" . htmlspecialchars($data[1], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "ジャンル：" . htmlspecialchars($data[2], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "年：" . htmlspecialchars($data[3], ENT_QUOTES, 'UTF-8') . "<br>";
                        echo "備考：" . htmlspecialchars($data[4], ENT_QUOTES, 'UTF-8') . "<br>";
                        // 6列目が存在する場合（例：説明がもう1つあるなど）
                        if (isset($data[5])) {
                            echo "補足：" . htmlspecialchars($data[5], ENT_QUOTES, 'UTF-8') . "<br>";
                        }
                        echo "</li>";
                        $found = true;
                        break;
                    }
                }
            }
        }

        fclose($handle);
        echo "</ul>";

        if (!$found) {
            echo "一致するデータが見つかりませんでした。";
        }
    } else {
        echo "ファイルを開けませんでした。";
    }
} else {
    echo "不正なアクセスです。";
}


?>