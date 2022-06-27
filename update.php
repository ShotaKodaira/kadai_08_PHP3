<?php

//1. POSTデータ取得
$saunaname   = $_POST['saunaname'];
$saunaurl  = $_POST['saunaurl'];
$saunareview = $_POST['saunareview'];
$id = $_POST['id'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE
                        gs_bm2_table
                    SET 
                        saunaname = :saunaname,
                        saunaurl = :saunaurl,
                        saunareview = :saunareview,
                        date = sysdate()
                    WHERE
                        id = :id;
                        ');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':saunaname', $saunaname, PDO::PARAM_STR);
$stmt->bindValue(':saunaurl', $saunaurl, PDO::PARAM_STR);
$stmt->bindValue(':saunareview', $saunareview, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    sql_error ($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    redirect('index.php');
    //*** function化する！*****************
    // header('Location: index.php');
    // exit();
}