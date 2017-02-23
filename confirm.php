<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>マイページ画面</title>
	<script type="text/javascript" src="common/js/jquery.js"></script>
</head>

<body>
	<div id="wrap">
		<header>
		</header>
		<div id="form">
			<?php
			$auth_password = "password";

			$input_user_id  = $_POST['user_id'];
			$input_password  = $_POST['password'];

			if ($auth_password == $input_password) {
					echo "認証成功";
					echo "<br>";
					echo "ようこそ".$input_user_id."さん";
					session_start();
					unset($_SESSION['error_msg']);
					unset($_SESSION['error_count']);
			}else {
					echo "認証失敗";
					echo "<br>";
					session_start();
					if (!isset($_SESSION['error_count'])) {
					  	$_SESSION['error_count'] = 0;
					} else {
					  	$_SESSION['error_count']++;
					}
				  $_SESSION['error_msg'] = "ログインに失敗しました。";
					echo $_SESSION['error_count']."回認証に失敗しました。";
			}
			 ?>
		</div>
	</div>
	<footer>
		<div id="copyright">
			<p>Copyright &#169; nest++ All Rights Reserved.</p>
		</div>
	</footer>
</body>

</html>
