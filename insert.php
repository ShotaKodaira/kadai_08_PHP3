<?php

  //1. POSTデータ取得
  $saunaname = $_POST['saunaname'];
  $saunaurl = $_POST['saunaurl'];
  $saunareview = $_POST['saunareview'];

  require_once('funcs.php');
  $pdo = db_conn();


  //３．データ登録SQL作成
  // 1. SQL文を用意
  $stmt = $pdo->prepare("INSERT INTO
                      gs_bm2_table(
                          id, saunaname, saunaurl, saunareview, indate)
                      VALUES (NULL, :saunaname, :saunaurl, :saunareview, sysdate()
                      )');

  //  2. バインド変数を用意
  // Integer 数値の場合 PDO::PARAM_INT
  // String文字列の場合 PDO::PARAM_STR

  $stmt->bindValue(':saunaname', $saunaname, PDO::PARAM_STR); //STR：文字列
  $stmt->bindValue(':saunaurl', $saunaurl, PDO::PARAM_STR);
  $stmt->bindValue(':saunareview', $saunareview, PDO::PARAM_STR);
  $status = $stmt->execute();

  //４．データ登録処理後
  if($status === false){
      sql_error($stmt);
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    // $error = $stmt->errorInfo();
    // exit('ErrorMessage:'.$error[2]);
  }else{
      redirect('index.php');
    //５．index.phpへリダイレクト
    // header('Location: index.php');
  }
?>