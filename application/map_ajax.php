<?php
// 検索結果取得するためのAjax

$request = "%" . $_POST['val'] . "%";
require_once("./config.php");

// DB接続
$dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=programapp_database;charset=utf8';
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
    
 // データベースのユーザー名
$user = 'programapp_yako';
$user = 'root';
 
  // データベースのパスワード
$password = 'doraemon0517';
$password = '';
// tryにPDOの処理を記述
try {
 
  // PDOインスタンスを生成
    $dbh = new PDO($dsn, $user, $password);


    $sql = "SELECT * FROM LOCATION WHERE AREA LIKE ?;";
    $stmt = $dbh->prepare($sql);
    // $stmt = $dbh->query($sql);
    $stmt->execute(array($request));
 
    $res = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $res[] = array(
       // 'id'    => $row['ID'],
        'id'    => $row['id'],
       // 'name'  => $row['NAME'],
        'name'  => $row['name'],
       // 'area'  => $row['AREA'],
        'area'  => $row['area'],
    );
    }
    // ヘッダーを指定することによりjsonの動作を安定させる
    header('Content-type: application/json');
    echo json_encode($res);
    // エラー（例外）が発生した時の処理を記述
} catch (PDOException $e) {
 
  // エラーメッセージを表示させる
    echo 'データベースにアクセスできません！' . $e->getMessage();
 
    // 強制終了
    exit;
}
