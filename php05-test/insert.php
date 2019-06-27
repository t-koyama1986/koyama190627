<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$category1 = $_POST["category1"];
$category2 = $_POST["category2"];
// $category3 = $_POST["category3"];

//2. DB接続します
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
// $sql = "INSERT INTO gs_bm_table(name,category1,category2,category3,indate)VALUES(:name,:category1,:category2,:category3,sysdate())";
$sql = "INSERT INTO gs_bm_table(category1,category2,indate)VALUES(:category1,:category2,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':category1', $category1, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':category2', $category2, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':category3', $category3, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: index.php");
    exit;
}
