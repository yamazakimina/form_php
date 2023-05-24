<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>POST練習</title>
</head>
<body>
<div class="form">
	<form action="write.php" method="post">
		<div class="value">名前: <input type="text" name="name"></div>
		<div class="value">Mail: <input type="text" name="mail"></div>
		<div class="value">商品: <input type="text" name="product"></div>
		<div class="value">性別：
			<select name="gender">
				<option value="male">男</option>				
				<option value="female">女</option>
			</select>
		</div>
		<!-- 購入日: <input type="text" name="date"> -->
		<div class="value">料金: <input type="text" name="price"></div>
		<div class="value">評価: 
			<select name="star">
				<option value="1">1（最低）</option>				
				<option value="2">2（低）</option>
				<option value="3">3（普通）</option>
				<option value="4">4（高）</option>
				<option value="5">5（最高）</option>
			</select>
		</div>
		<div class="value">備考: <input type="text" name="sub"></div>
		<div class="button"><input type="submit" value="送信"></div>
	</form>
</div>
<ul>
	<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>