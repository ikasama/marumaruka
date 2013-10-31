<?php
ini_set( "display_errors", "Off");

session_start();

?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5 user-scalable=no">
	<meta name="apple-touch-icon-precomposed" href="../img/icon.png">
	<link rel="stylesheet" href="scss/animate.min.css">
	<link rel="stylesheet" href="scss/new.css">
	<title>〇〇か！</title>
</head>

<body>
	<div class="container">
		<!--header.scss-->
			<div id="header_s">
				<img src="img/header_logo_s.png">			
			</div>

			<div class="title child-page">
				<strong class="title-content">
					<h1>新着ツッコミ</h1>
				</strong>
			</div>
			<!--header.scss-->

			<div class="new-post">
			<h3>お題</h3>				
				<div class="boke">
					<div class="icon">
					<div class="pacman-holder moving">
						<div class="eye"></div>
						<div class="pacman-container">
							<div class="pacman-body"></div>
							<div class="pacman-mouth"><div class="pacman"></div></div>
						</div>
					</div>
					</div>
					<p class="boke-text">
						ボキャぶる！ってアプリが最近流行ってるんだけど…
					</p>
				</div>
				<!-- /.boke -->
			<a href="new.php" style="display:block"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
				<div class="tsukkomi">
					<div class="icon">
						<div class="user-name">@chan_yuki</div>
					</div>
					<p class="tsukkomi-text frame-bone">未練あんのか！</p>
				</div>
				<!-- /.tsukkomi -->

				<div class="reaction">
					<div class="row">
						<div class="good col-xs-4">
							<p>秀逸！</p>
							<p class="count-good">7</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">4</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">2</p>
						</div>
						<!-- /.bad -->
					</div>
					<!-- /.row -->
				</div>
				<div class="post-border"></div>
				<!-- /.reaction -->
			</div>
			<!-- /.new-post -->

			<div class="new-post">
			<h3>お題</h3>				
				<div class="boke">
					<div class="icon">
					<div class="pacman-holder moving">
						<div class="eye"></div>
						<div class="pacman-container">
							<div class="pacman-body"></div>
							<div class="pacman-mouth"><div class="pacman"></div></div>
						</div>
					</div>
					</div>
					<p class="boke-text">
						男「あー日焼けするー」
					</p>
				</div>
				<!-- /.boke -->
			<a href="new.php" style="display:block"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
				<div class="tsukkomi">
					<div class="icon">
						<div class="user-name">@chan_yuki</div>
					</div>
					<p class="tsukkomi-text frame-bee">女子か！</p>
				</div>
				<!-- /.tsukkomi -->

				<div class="reaction">
					<div class="row">
						<div class="good col-xs-4">
							<p>秀逸！</p>
							<p class="count-good">5</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">8</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">2</p>
						</div>
						<!-- /.bad -->
					</div>
					<!-- /.row -->
				</div>
				<div class="post-border"></div>
				<!-- /.reaction -->
			</div>
			<!-- /.new-post -->

			<div class="new-post">
			<h3>お題</h3>				
				<div class="boke">
					<div class="icon">
					<div class="pacman-holder moving">
						<div class="eye"></div>
						<div class="pacman-container">
							<div class="pacman-body"></div>
							<div class="pacman-mouth"><div class="pacman"></div></div>
						</div>
					</div>
					</div>
					<p class="boke-text">
						ぶどうばっかり食べてるひとがいるんやけど
					</p>
				</div>
				<!-- /.boke -->
			<a href="new.html" style="display:block"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
				<div class="tsukkomi">
					<div class="icon">
						<div class="user-name">@chan_yuki</div>
					</div>
					<p class="tsukkomi-text frame-gero">暇か！</p>
				</div>
				<!-- /.tsukkomi -->

				<div class="reaction">
					<div class="row">
						<div class="good col-xs-4">
							<p>秀逸！</p>
							<p class="count-good">2</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">13</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">10</p>
						</div>
						<!-- /.bad -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.reaction -->
			</div>
			<!-- /.new-post -->
		<div class="new-post">
			<h3>お題</h3>
			<div class="boke">
				<div class="icon">
					<img src="img/icon_boke.png">
				</div>
				<p class="boke-text">写真を取るときに毎回ピースのポーズを撮ってしまう人がいるんですよー</p>
			</div>
			<!-- /.boke -->
			<a href="new.html" style="display:block"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@chan_yuki</div>
				</div>
				<p class="tsukkomi-text frame-fire">平和主義か！</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">38</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">5</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">2</p>
						</div>
							<!-- /.bad -->
					</div>
					<!-- /.row -->
			</div>
			<!-- /.reaction -->
		</div>
		<!-- /.new-post -->
		<div class="new-post">
			<h3>お題</h3>
			<div class="boke">
				<div class="icon">
					<img src="img/icon_boke.png">
				</div>
				<p class="boke-text">誰か助けてー</p>
			</div>
			<!-- /.boke -->
			<a href=""><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@shu_ntter</div>
				</div>
				<p class="tsukkomi-text frame-niyari">大丈夫か！</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">2</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">8</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">25</p>
						</div>
							<!-- /.bad -->
					</div>
					<!-- /.row -->
			</div>
			<!-- /.reaction -->
		</div>
		<!-- /.new-post -->			
			<!--menu.scss-->
			<div class="menu-dummy"></div>
			<div id="menu">
				<ul>
					<a href="index.php"><li class="menu-top"></li></a>
					<a href="new.php"><li class="menu-new"  style="background-position:-129px 110px;"></li></a>
					<a href="odai.php"><li class="menu-odai"></li></a>
					<a href="ranking.php"><li class="menu-ranking"></li></a>
					<a href="<?php if($_SESSION['account_name']){ ?>mypage.php<?php } else { ?>recog.php<?php } ?>"><li class="<?php if ($_SESSION['account_name']){?>menu-mypage<?php }else{ ?>menu-login<?php } ?>"></li></a>
				</ul>	
			</div>
			<!--menu.scss-->
		</div>
		<script src="js/minified-web.noie.js"></script>
		<script src="js/marumaruka_common.js"></script>
		<script src="js/new.js"></script>
	</body>
	</html>