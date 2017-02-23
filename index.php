<!DOCTYPE HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>ログイン画面</title>
	<script type="text/javascript" src="common/js/jquery.js"></script>
</head>

<body>
	<header>
	</header>
	<div id="form">
		<form class="" action="confirm.php" method="post">
			<div class="inner">
				<div>こちらからログインしてください。</div>
				<table>
					<p style="color: red;">
<?php
if (isset($_SESSION['error_msg'])) {
echo "ログインに失敗しました。<br>";
		if (isset($_SESSION['error_count'])) {
				echo $_SESSION['error_count']."回認証に失敗しました。";
		}
}
 ?>
					</p>
					<tr>
						<th>ユーザーID</th>
						<td>
							<input name="user_id" value="" />
						</td>
					</tr>
					<tr>
						<th>パスワード</th>
						<td>
							<input name="password" type="password" value="" />
						</td>
					</tr>
					<tr>
						<th></th>
						<td>
							<input type="submit" value="認証" />
						</td>
					</tr>

				</table>
			</div>
		</form>
	</div>
	<footer>
		<div id="copyright">
			<p>Copyright &#169; nest++ All Rights Reserved.</p>
		</div>
	</footer>
</body>

</html>
