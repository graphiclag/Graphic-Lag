<?php
define('Charset', 'UTF-8');

	//入力された文字列のチェックを行うクラス
	class ValueCheck {
		/********************************************
		  メールアドレスをチェックする 
		   引数   :checkvalue (I) チェックされる文字列
		   戻り値 :errmsg      エラーメッセージを返す文字列
		*********************************************/
		function CheckMailAddress($checkvalue) {
			$match = "/^[a-zA-Z0-9_.-]+@([a-zA-Z0-9_.-]+)/";

			//文字が入力されているか？
			if ($checkvalue == "") {
				$errmsg = "1：メールアドレスを入力して下さい";
				return $errmsg;
			}

			//@を含んだ文字列になっているか
			if (preg_match($match, $checkvalue)) {
			
				list($username,$domain)=split('@',$checkvalue);
				
				// メールアドレスのドメイン（MXレコード)の存在確認
				if(!checkdnsrr($domain,'MX')) {
					$errmsg = "3：正しいメールアドレスを入力して下さい";
					return $errmsg;
				}
			
			} else {
				$errmsg = "2：正しいメールアドレスを入力して下さい";
				return $errmsg;
			}
			return $errmsg;
		}
		

	}
?>
