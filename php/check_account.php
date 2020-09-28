<?php
session_start();
$n = htmlspecialchars($_POST['name'],ENT_QUOTES);
$p = htmlspecialchars($_POST['pass'],ENT_QUOTES);
require_once("mypage_init.php");
?>

<html>
<?php include("../html/head.html"); ?>
<body>
<div class="container-fluid check_account_wrapper d-flex align-items-center">
    <div class="message col-xl-4 offset-xl-4">

<?php
$ps = $db->query("SELECT Pass FROM user_info WHERE Name='$n'");
$r = $ps->fetch();
if($r["Pass"] === md5($p)){
    $_SESSION["u"] = $n;
?>

<h3>ようこそ<?php echo $_SESSION["u"] ?>さん</h3>
<input type="button" class="btn" value="トップページへ" onclick="location.href='../html/top.html'">

<?php
}else{
    session_destroy();
?>

<h3>ログインに失敗しました</h3>
<input type="button" class="btn" value="ログイン画面へ" onclick="location.href='../html/login.html'">

<?php
}
?>

</body>
<script src="../js/jquery-3.4.0.js"></script>
<script src="../js/main.js"></script>
</html>