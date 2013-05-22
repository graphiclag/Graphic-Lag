<?php
	//MUSICページに入力されたメールアドレスをチェックして、OKならダウンロードページに遷移させる
	/* ****************************************
	    初期設定
	******************************************/
	require('./common/Class_ValueCheck.php');

	$chkvalue = new ValueCheck();
	$errmsg = "";
	
	$inputvalue = $_POST["mailaddress"];

	/* ****************************************
	    主処理
	******************************************/	
	//①入力値のチェック
	$errmsg = $chkvalue->CheckMailAddress($inputvalue);

	
	//ページ遷移
	if ($errmsg != "") {

print<<<EOF
<html lang="ja">
	<head><meta charset="UTF-8">	</head>
	<body>
		<center>			$errmsg<br>
			<a href="http://www.graphiclag.com/music.html">戻る</a>
		</center>
	</body>
</html>
EOF;

	} else {
		//メールアドレスをファイルに出力する
		$today = date("Y_m_d");
		$fp = fopen("./".$today."_address.dat", "a");
		fwrite($fp, $inputvalue."\r\n");
		fclose($fp);

		//ダウンロードページに遷移する
		header("Location: http://graphiclag.com/dl/pjdp42jyzd.html");
		exit;

	}


?>
