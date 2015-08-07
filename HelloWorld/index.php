<!DOCTYPE html>
<html lang="ja">
<head>
<?php
  $pj_name = "PHP Hello World";
?>
  <title>Hellow World ホーム</title>
  <!-- <meta charset="UTF-8"> -->
  <meta name="keywords" content="PHP HelloWorld PHP入門">
  <meta name="description" content="PHP Hello World">
  <meta name="robots" content="noindex,nofollow">
  <meta name="author" content="H.Kijima">
  <meta name="generator" content="none">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="content-type" content="text/html">
  <meta http-equiv="default-style" content="default.css">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="application-name" content="<?php echo $pj_name ?>">
  <!-- <base href="http://waveserver01/HelloWorld/"  -->
  <link rel="stylesheet" href="css/default.css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="scripts/default.js"></script>
</head>
<body>
  <h1><?=$pj_name ?> ホーム</h1>
  <hr>
  <h3>こんにちは、PHPの入門プロがラムをまとめた PHPの<? $pj_name ?>のページへようこそ</h3>
  <hr>
  <form method="POST" id="frm_login" action="apps/menu.php">
      <input type="text" id="login_user" name="login_user" value="" size="16">
      <button type="submit" id="btn_login" style="width:16em;">ログイン</button>
  </form>
  <hr>
  <h3>サーバー情報は以下の通りです</h3>
  <table>
    <caption>PHP「$_SERVER」変数情報</caption>
    <thead>
      <tr>
        <th>出力内容</th><th>関数名</th><th>出力値</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>実行ファイル名</td><td>$_SERVER['PHP_SELF']</td><td><?=$_SERVER['PHP_SELF']?></td></tr>
      <tr><td>IPアドレス</td><td>$_SERVER['SERVER_ADDR']</td><td><?=$_SERVER['SERVER_ADDR']?></td></tr>
      <tr><td>サーバー名</td><td>$_SERVER['SERVER_NAME']</td><td><?=$_SERVER['SERVER_NAME']?></td></tr>
      <tr><td>リクエストメソッド</td><td>$_SERVER['REQUEST_METHOD']</td><td><?=$_SERVER['REQUEST_METHOD']?></td></tr>
      <tr><td>リクエスト開始時間</td><td>$_SERVER['REQUEST_TIME']</td><td><?=$_SERVER['REQUEST_TIME']?></td></tr>
      <tr><td>ドキュメントルート</td><td>$_SERVER['DOCUMENT_ROOT']</td><td><?=$_SERVER['DOCUMENT_ROOT']?></td></tr>
      <tr><td>サーバールート</td><td>$_SERVER['SERVER_PORT']</td><td><?=$_SERVER['SERVER_PORT']?></td></tr>
      <tr><td>リクエストURI</td><td>$_SERVER['REQUEST_URI']</td><td><?=$_SERVER['REQUEST_URI']?></td></tr>
    </tbody>
  </table>
</body>
</html>
