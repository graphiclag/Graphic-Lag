<!DOCTYPE html>
<html lang="ja" xmlns:fb="http://ogp.me/ns/fb#">
<head><meta charset="UTF-8">
<!-- 
====================================================================================================
 ■	 1.全ページ完全共通設定
====================================================================================================
-->

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Graphic Lag">
	<meta name="classification" content="Music,音楽">
	<link rev="made" href="mailto:graphiclag@gmail.com">
	<link rel="home" href="http://www.graphiclag.com/" title="トップページ">

	<!-- ▼Favicon Setting -->
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<!-- link rel="icon" href="favicon.png" type="image/vnd.microsoft.ico" -->

	<!-- ▼Search Engine Setting  -->
	<meta name="robots" content="index,follow">

	<!-- ▼JS Basic Setting -->
	<meta http-equiv="Content-Script-type" content="text/javascript">
	<script src="js/jquery-1.6.2.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.imghover.js"></script>
	<script src="js/jquery.hoverfade-1.0.2.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			  $("#main_header").hoverFade();
			});
		</script>
	<script src="js/jquery.ui.totop.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			  /*
			  var defaults = {
			    containerID: 'moccaUItoTop', // fading element id
			    containerHoverClass: 'moccaUIhover', // fading element hover class
			    scrollSpeed: 1200,
			    easingType: 'linear' 
			  };
			  */
			  $().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	<!-- 旧IEにhtml5新要素適応 -->
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
	<![endif]-->

	<!-- Google START-->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-23959708-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	<!-- Google END -->

	<!-- ▼CSS Basic Setting -->
	<meta http-equiv="Content-Style-type" content="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/html5reset.css" media="all"> <!-- リセットCSS -->
	<link rel="stylesheet" href="css/basic.css" media="all">      <!-- OOCSS -->
	<link rel="stylesheet" href="css/style.css" media="screen">   <!-- メインCSS -->
	<!-- 旧IEに専用CSS適応 -->
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css" media="screen">
	<![endif]-->

<!-- 
====================================================================================================
 ■	 2.各ページ別個別設定
====================================================================================================
-->
	<?php $now_file = basename($_SERVER['PHP_SELF']); // 読み込まれたページ ?>
