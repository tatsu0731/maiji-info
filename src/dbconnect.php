<?php

/*　ドライバ呼び出しを使用してMySQLデータベースに接続する */
$dsn = 'mysql:dbname=posse;host=db';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

// $sql = 'SELECT * FROM choices ORDER BY id';

$questions = $dbh->query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC);
$choices = $dbh->query("SELECT * FROM choices")->fetchAll(PDO::FETCH_ASSOC);


foreach ($choices as $key => $choice) {
$index = array_search($choice["question_id"], array_column($questions, 'id'));
$questions[$index]["choices"][] = $choice;

}



// $result = $pst->fetchAll(PDO::FETCH_ASSOC);

print_r($choices["question_id"]);
// preタグで囲んで見やすく出力する
// echo '<pre>';
print_r($choices);
// echo '</pre>';

// データ取得後は、コネクションを破棄する
// PDOは以下は書かなくてもいいけど、プログラムによっては必要なので癖付ける
$conn = null;
?>

