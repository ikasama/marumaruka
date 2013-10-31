<?php 
require_once 'config.php';

$screen_name = $_SESSION['account_name'];
$user_url = "https://twitter.com/$screen_name";
$user_twitter_html = file_get_contents($user_url);
preg_match('/<img src="(.*?)" alt="(.*?)" class="avatar size73"/', $user_twitter_html, $matches);

?>


<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5 user-scalable=no">
	<meta name="apple-touch-icon-precomposed" href="../img/icon.png">
	<link rel="stylesheet" href="scss/animate.min.css">
	<link rel="stylesheet" href="scss/mypage.css">
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
				<h1>マイページ</h1>
			</strong>
		</div>
		<div class="mypage-post">
			<img class="prof-pic" src="<?php echo $matches[1]; ?>">
			<div class="profile">
				<div class="user-name"><?php echo $_SESSION['account_name']; ?></div>
				<div class="user-rank">下積み芸人</div>
				<a class="link" href="">称号一覧>></a>
			</div>
			<p>あと<strong>3/10回</strong>のツッコミで昇格！</p>
		</div>
		<div class="mypage-post">
			<h3>この称号でもらえるアイテム</h3>
			<div class="items">
				<img src="img/tsukkomi/sumi.jpg">
				<img src="img/tsukkomi/balloonIcon_niyari.png">
				<img src="img/tsukkomi/balloonIcon_angry.png">
				<a class="link" href="">もっと見る>></a>
			</div>
			<p>あと<strong>１回</strong>のツッコミでゲット！</p>
		</div>
		<div class="mypage-post">
			<h3>総ツッコミ回数</h3>
			<div class="result-count">
			<div class="result gd">
				<p>秀逸！</p>
				<p>21</p>
			</div>
			<div class="result nm">
				<p>おしい</p>
				<p>21</p>
			</div>
			<div class="result bd">
				<p>ズコッ</p>
				<p>21</p>
			</div>
			<div class="result sum">
				<p>合計</p>
				<p>21</p>
			</div>					
			</div>	
		</div>
		<div class="tabs">
			<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
			<label for="tab-1" class="tab-label-1"><p>ツッコミ</p></label>
			<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
			<label for="tab-2" class="tab-label-2"><p>お題</p></label>
			<div class="clear-shadow"></div>
			<div class="tabs_content">
				<ul class="tabs_content-1">
					<div class="top-post">
						<div class="boke">
							<div class="icon">
								<img src="img/icon_boke.png">
							</div>
							<p class="boke-text">
								ぶどうばっかり食べてるひとがいるんやけど
							</p>
						</div>
						<!-- /.boke -->

						<div class="tsukkomi">
							<div class="icon">
								<div class="user-name"><?php echo $_SESSION['account_name']; ?></div>
							</div>
							<p class="tsukkomi-text frame-angry">ぶど男(お)か！	</p>
						</div>
						<!-- /.tsukkomi -->

						<div class="reaction">
							<div class="row">
								<div class="good">
									<p>秀逸！</p>
									<p class="count-good">14</p>
								</div>
								<!-- /.good -->
								<div class="normal">
									<p>おしい</p>
									<p class="count-normal">14</p>
								</div>
								<!-- /.nomal -->
								<div class="bad">
									<p>ズコッ</p>
									<p class="count-bad">14</p>
								</div>
								<!-- /.bad -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.reaction -->
					</div>
					<!-- /.top-post -->
				</ul>
				<ul class="tabs_content-2">
					<div class="top-post">
						<div class="boke">
							<div class="icon">
								<img src="img/icon_boke.png">
							</div>
							<p class="boke-text">
								ぶどうばっかり食べてるひとがいるんやけど
							</p>
						</div>
						<!-- /.boke -->

						<div class="tsukkomi">
							<div class="icon">
								<div class="user-name">@chan_yuki</div>
							</div>
							<p class="tsukkomi-text frame-angry">ぶど男(お)か！	</p>
						</div>
						<!-- /.tsukkomi -->

						<div class="reaction">
							<div class="row">
								<div class="good">
									<p>秀逸！</p>
									<p class="count-good">14</p>
								</div>
								<!-- /.good -->
								<div class="normal">
									<p>おしい</p>
									<p class="count-normal">14</p>
								</div>
								<!-- /.nomal -->
								<div class="bad">
									<p>ズコッ</p>
									<p class="count-bad">14</p>
								</div>
								<!-- /.bad -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.reaction -->
					</div>
					<!-- /.top-post -->
				</ul>
			</div>
		</div>		
		<div class="menu-dummy"></div>
		<div id="menu">
			<ul>
				<a href="index.php"><li class="menu-top"></li></a>
				<a href="new.php"><li class="menu-new"></li></a>
				<a href="odai.php"><li class="menu-odai"></li></a>
				<a href="ranking.php"><li class="menu-ranking"></li></a>
				<a href="<?php if($_SESSION['account_name']){ ?>mypage.php<?php } else { ?>recog.php<?php } ?>"><li style="background-position:-509px 110px;" class="<?php if ($_SESSION['account_name']){?>menu-mypage<?php }else{ ?>menu-login<?php } ?>"></li></a>
			</ul>	
		</div>
		<!--menu.scss-->
	</div>	
	<script src="js/minified-web.noie.js"></script>
	<script src="js/marumaruka_common.js"></script>

</body>
</html>