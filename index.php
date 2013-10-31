<?php
ini_set( "display_errors", "Off");

$ua = $_SERVER['HTTP_USER_AGENT'];
if ( (strpos($ua, 'iPhone') === false) ) {
    echo "iPhone からアクセスして下さい！＞＜";
    exit;
}

session_start();

//var_dump($_SESSION);
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5 user-scalable=no">
	<link rel="apple-touch-icon-precomposed" href="../img/icon.png">
	<link rel="stylesheet" href="scss/animate.min.css">
	<link rel="stylesheet" href="scss/index.css">
	<title>〇〇か！</title>
</head>

<body>
	<div class="container">
		<div id="header">
			<img src="img/header_logo.png">			
		</div>
		<div class="title">
			<strong class="title-content">
				<h1>今日の人気ツッコミランキング</h1>
			</strong>
		</div>
		<!--header.scss-->



		<div class="top-post">
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
				<p class="boke-text">写真を取るときに毎回ピースのポーズを撮ってしまう人がいるんですよー</p>
			</div>
			<!-- /.boke -->
			<a href="tsukkomi-5.php" style="display:block"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@chan_yuki</div>
				</div>
				<p class="tsukkomi-text frame-lank1">平和主義か！</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">98</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">70</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">30</p>
						</div>
							<!-- /.bad -->
					</div>
					<!-- /.row -->
			</div>
			<!-- /.reaction -->
		</div>
		<!-- /.top-post -->
		<div class="top-post">
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
				<p class="boke-text">ジェットコースターは一番前に乗る派！</p>
			</div>
			<!-- /.boke -->
			<a href="tsukkomi-4.php"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@pikatyuu</div>
				</div>
				<p class="tsukkomi-text frame-lank2">目立ちたがりか！</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">76</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">34</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">29</p>
						</div>
							<!-- /.bad -->
					</div>
					<!-- /.row -->
			</div>
			<!-- /.reaction -->
		</div>
		<!-- /.top-post -->
		<div class="top-post">
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
				<p class="boke-text">誰か助けてー</p>
			</div>
			<!-- /.boke -->
			<a href="tsukkomi-3.php"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@shu_ntter</div>
				</div>
				<p class="tsukkomi-text frame-lank3">大丈夫か！</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">68</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">40</p>
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
		<!-- /.top-post -->	
		<div class="top-post">
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
				<p class="boke-text">オッス</p>
			</div>
			<!-- /.boke -->
			<a href="tsukkomi-2.php"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@morisheee</div>
				</div>
				<p class="tsukkomi-text frame-harisen">悟空か！</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">49</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">27</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">43</p>
						</div>
							<!-- /.bad -->
					</div>
					<!-- /.row -->
			</div>
			<!-- /.reaction -->
		</div>
		<!-- /.top-post -->	
		<div class="top-post">
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
				<p class="boke-text">しりとりで毎回「る」で終わらせる人なんなの</p>
			</div>
			<!-- /.boke -->
			<a href="tsukkomi-1.php"><div class="tsukkomu-this anim-btn">このお題をもっと見る</div></a>
			<div class="tsukkomi">
				<div class="icon">
					<div class="user-name">@cybar_taro</div>
				</div>
				<p class="tsukkomi-text frame-mu">ルーマニアね</p>
			</div>
			<!-- /.tsukkomi -->

			<div class="reaction">
				<div class="row">
					<div class="good col-xs-4">
						<p>秀逸！</p>
						<p class="count-good">51</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">14</p>
						</div>
						<!-- /.nomal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">8</p>
						</div>
							<!-- /.bad -->
					</div>
					<!-- /.row -->
			</div>
			<!-- /.reaction -->
		</div>
		<!-- /.top-post -->	

	<!--menu.scss-->
		<div id="menu">
			<ul>
				<a href="index.php"><li class="menu-top" style="background-position:0px 110px;"></li></a>
				<a href="new.php"><li class="menu-new"></li></a>
				<a href="odai.php"><li class="menu-odai"></li></a>
				<a href="ranking.php"><li class="menu-ranking"></li></a>
				<a href="<?php if($_SESSION['account_name']){ ?>mypage.php<?php } else { ?>recog.php<?php } ?>"><li class="<?php if ($_SESSION['account_name']){?>menu-mypage<?php }else{ ?>menu-login<?php } ?>"></li></a>
			</ul>	
		</div>
	<!--menu.scss-->
	</div>

	<script src="js/minified-web.noie.js"></script>
	<script src="js/marumaruka_common.js"></script>
</body>
</html>
