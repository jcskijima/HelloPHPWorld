<?php 
    if (!isset($_SESSION['SID'])) {
    	header("location: "."/index.php");
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>Hellow World ホーム</title>
  <meta charaset="UTF-8">
  <meta name="keywords" content="PHP HelloWorld PHP入門">
  <meta name="description" content="PHP Hello World">
  <meta name="robots" content="noindex,nofollow">
  <meta name="author" content="H.Kijima">
  <meta name="generator" content="none">
  <meta http-equiv="content-language" content="ja">
  <meta http-equiv="content-type" content="text/html">
  <meta http-equiv="default-style" content="default.css">
  <!-- <meta name="application-name" content="HelloWorld"  -->

  <!-- <base href="http://waveserver01/HelloWorld/"  -->
  <link rel="stylesheet" href="../css/default.css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="../scripts/default.js"></script>
</head>
<?php
  $user_nm = 'Annonymous';

  if (isset($_POST['login_user'])) {
    $user_nm = $_POST['login_user'];
  }
?>

  <script type="text/javascript">
  console.log(<?=$_POST['login_user'] ?>);
  </script>
<body>
  <h1>PHP入門　メニュー</h1>
  <p>ログイン者は「<?=$user_nm ?>」です</p>
  <hr>
  <form id = "frm_menu">
    <h3>こちらがメニューです。</h3>
  </form>
</body>
</html>