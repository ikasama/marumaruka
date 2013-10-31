<?php
ini_set( "display_errors", "Off");

session_start();

?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5 user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="stylesheet" type="text/css" href="css/component.css">
	<link rel="stylesheet" href="scss/odai.css">
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
				<h1>お題一覧</h1>
			</strong>
		</div>
		<!--header.scss-->
		<div class="odai-post default-5">
			<div class="icon-name">
				<div class="user-name">@cyber_taro</div>
			</div>
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
					写真を撮るときに毎回ピースのポーズをとってしまう人がいるんですよー
				</p>
			</div>
			<a href="tsukkomi-5.php">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		</div>
		<div class="odai-post default-4">
			<div class="icon-name">
				<div class="user-name">@cyber_taro</div>
			</div>
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
					ジェットコースターは一番前に載る派！
				</p>
			</div>			
			<a href="tsukkomi-4.php">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		</div>
		<div class="odai-post default-3">
			<div class="icon-name">
				<div class="user-name">@cyber_taro</div>
			</div>
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
					誰か助けてー
				</p>
			</div>			
			<a href="tsukkomi-3.php">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		</div>
		<div class="odai-post default-2">
			<div class="icon-name">
				<div class="user-name">@cyber_taro</div>
			</div>
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
					オッス
				</p>
			</div>			
			<a href="tsukkomi-2.php">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		</div>
		<div class="odai-post default-1">
			<div class="icon-name">
				<div class="user-name">@cyber_taro</div>
			</div>
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
					しりとりで毎回「る」で終わらせる人なんなの
				</p>
			</div>			
			<a href="tsukkomi-1.php">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		</div>
		<!-- /.odai-post -->
		
		<!--menu.scss-->
		<div class="menu-dummy"></div>
		<div id="menu">
			<ul>
				<a href="index.php"><li class="menu-top"></li></a>
				<a href="new.php"><li class="menu-new"></li></a>
				<a href="odai.php"><li class="menu-odai" style="background-position:-255px 110px;"></li></a>
				<a href="ranking.php"><li class="menu-ranking"></li></a>
				<a href="<?php if($_SESSION['account_name']){ ?>mypage.php<?php } else { ?>recog.php<?php } ?>"><li class="<?php if ($_SESSION['account_name']){?>menu-mypage<?php }else{ ?>menu-login<?php } ?>"></li></a>
			</ul>	
		</div>
		<!--menu.scss-->

	</div>

	<button class="odai-btn anim-btn2 md-trigger" data-modal="modal-17"></button>
	<div class="md-modal md-effect-17" id="modal-17">
		<div class="md-content">
			<div id="modal-title" class="title">
				<strong class="title-content">
					<h1>お題投稿</h1>
				</strong>
			</div>
			<button type="button" class="md-close">&times;</button>
			
			<form action="" role="form">	
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
						<textarea name="odai" class="odai-form">お題を入力してください</textarea>
					</p>
				</div>		
				<button type="button" class="submit-btn"></button>
			</form>
		</div>
	</div>

	<div class="md-overlay"></div>
	<script src="js/modal/classie.js"></script>
	<script src="js/modal/modalEffects.js"></script>	
	<script src="js/minified-web.noie.js"></script>
	<script src="js/marumaruka_common.js"></script>
	<script src="js/odai.js"></script>
	
</body>
</html>