<!-- 
====================================================================================================
 ■	 3.IE用微調整の設定
====================================================================================================
-->
	<!-- ▼IE Setting -->
	<!--[if lt IE 7]> 
	 <link rel="stylesheet" href="css/ie.css" media="screen">
	 <script src="js/DD_belatedPNG.js"></script>
	 <script>
	    DD_belatedPNG.fix('.pngfix');
	 </script>
	<![endif]-->

</head>
<!-- 
==================================================================================================== -->
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=176047709119503";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="outline">
	<div class="inner">

		<header id="main_header" class="hover-css">
			<h1 id="site_title"><a href="index.html" title="トップページ">www.graphiclag.com</a></h1>
			<p id="description">大阪で活動するインストゥルメンタル・バンド Graphic Lag のサイト</p>

			<nav id="main_menu">
			<ul class="clearfix">

				<li><a title="バンドについて" 
					<?php if($now_file == 'about.html') : //   about.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="about.html"
					<?php endif ; ?>
					>ABOUT</a>
				</li>

				<li><a title="最新情報" 
					<?php if($now_file == 'news.html') : //    news.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="news.html"
					<?php endif ; ?>
					>NEWS</a>
				</li>

				<li><a title="ライブ予定" 
					<?php if($now_file == 'shows.html') : //   shows.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="shows.html"
					<?php endif ; ?>
					>SHOWS</a>
				</li>

				<li><a title="作品紹介" 
					<?php if($now_file == 'music.html') : //   music.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="music.html"
					<?php endif ; ?>
					>MUSIC</a>
				</li>

				<li><a title="ギャラリー" 
					<?php if($now_file == 'gallery.html') : // gallery.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="gallery.html"
					<?php endif ; ?>
					>GALLERY</a>
				</li>

				<li><a title="リンク集" 
					<?php if($now_file == 'link.html') : //    link.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="link.html"
					<?php endif ; ?>
					>LINK</a>
				</li>

				<li><a title="連絡先" 
					<?php if($now_file == 'contact.html') : // contact.htmlである場合 ?>
						class="now"
					<?php else : // それ以外の場合 ?>
						href="contact.html"
					<?php endif ; ?>
					>CONTACT</a>
				</li>

			</ul>
			<!-- /#main_menu -->
			</nav>

		</header>
