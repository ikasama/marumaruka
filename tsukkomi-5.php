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
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="scss/tsukkomi.css">
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
				<h1>ツッコミ一覧</h1>
			</strong>
		</div>
		<!--header.scss-->
		<div class="one-tsukkomi-post">
			<div class="boke">
				<div class="icon">
					<img src="img/icon_boke.png">
				</div>
				<p class="boke-text">写真を撮るときに毎回ピースのポーズをとってしまう人がいるんですよー</p>
			</div>
			<!-- /.boke -->

			<div class="tsukkomi-post">
				<div class="tsukkomi">
					<div class="icon">
						<div class="user-name">@pikachuu</div>
					</div>
					<p class="tsukkomi-text frame-amazing">平和主義者か！</p>
				</div>
				<!-- /.tsukkomi -->			
				<div class="reaction">
					<div class="row">
						<div class="good col-xs-4">
							<p>秀逸！</p>
							<p class="count-good">19</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">4</p>
						</div>
						<!-- /.normal -->
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
			<!-- /.tsukkomi-post -->

			<div class="tsukkomi-post">
				<div class="tsukkomi">
					<div class="icon">
						<div class="user-name">@gyuunyuu</div>
					</div>
					<p class="tsukkomi-text frame-noisy">キングラーか！</p>
				</div>
				<!-- /.tsukkomi -->			
				<div class="reaction">
					<div class="row">
						<div class="good col-xs-4">
							<p>秀逸！</p>
							<p class="count-good">56</p>
						</div>
						<!-- /.good -->
						<div class="normal col-xs-4">
							<p>おしい</p>
							<p class="count-normal">34</p>
						</div>
						<!-- /.normal -->
						<div class="bad col-xs-4">
							<p>ズコッ</p>
							<p class="count-bad">90</p>
						</div>
						<!-- /.bad -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.reaction -->
			</div>		
			<!-- /.tsukkomi-post -->
		</div>
		<!--menu.scss-->
		<div class="menu-dummy"></div>
		<div id="menu">
			<ul>
				<a href="index.php"><li class="menu-top"></li></a>
				<a href="new.php"><li class="menu-new"></li></a>
				<a href="odai.php"><li class="menu-odai"></li></a>
				<a href="ranking.php"><li class="menu-ranking"></li></a>
				<a href="<?php if($_SESSION['account_name']){ ?>mypage.php<?php } else { ?>recog.php<?php } ?>"><li class="<?php if ($_SESSION['account_name']){?>menu-mypage<?php }else{ ?>menu-login<?php } ?>"></li></a>
			</ul>	
		</div>
		<!--menu.scss-->

	</div>

	<button class="tsukkomi-btn anim-btn2 md-trigger" data-modal="modal-17"></button>
	<div class="md-modal md-effect-17" id="modal-17">
		<div class="md-content">
			<div id="modal-title" class="title">
				<strong class="title-content">
					<h1>ツッコミ投稿</h1>
				</strong>
			</div>
			<button type="button" class="md-close">&times;</button>
			
			<form action="" role="form">	
				<div class="tsukkomi">
					<p class="tsukkomi-text frame-normal">
						<textarea name="tsukkomi" class="tsukkomi-form">◯◯か！</textarea>
					</p>
				</div>		
<div class="thumnails">	
					<div class="carousel">
						<input type="radio" name="frame" id="frame-normal"　value="frame-normal">
						<label for="frame-normal">
							<img src="img/tsukkomi/balloonIcon_normal.png">
						</label> 

						<input type="radio" name="frame" id="frame-amazing"　value="frame-amazing">	
						<label for="frame-amazing">
							<img src="img/tsukkomi/balloonIcon_amazing.png">
						</label>

						<input type="radio" name="frame" id="frame-angry"　value="frame-angry">
						<label for="frame-angry">
							<img src="img/tsukkomi/balloonIcon_angry.png">
						</label>

						<input type="radio" name="frame" id="frame-babble"　value="frame-babble">
						<label for="frame-babble">
							<img src="img/tsukkomi/balloonIcon_babble.png">
						</label>
						<input type="radio" name="frame" id="frame-bone"　value="frame-bone">
						<label for="frame-bone">
							<img src="img/tsukkomi/balloonIcon_bone.png">
						</label>
						<input type="radio" name="frame" id="frame-cry"　value="frame-cry">
						<label for="frame-cry">
							<img src="img/tsukkomi/balloonIcon_cry.png">
						</label>
						<input type="radio" name="frame" id="frame-disappoint"　value="frame-disappoint">
						<label for="frame-disappoint">
							<img src="img/tsukkomi/balloonIcon_disappoint.png">
						</label>
						<input type="radio" name="frame" id="frame-fire"　value="frame-fire">
						<label for="frame-fire">
							<img src="img/tsukkomi/balloonIcon_fire.png">
						</label>
						<input type="radio" name="frame" id="frame-fun"　value="frame-fun">
						<label for="frame-fun">
							<img src="img/tsukkomi/balloonIcon_fun.png">
						</label>						
						<input type="radio" name="frame" id="frame-girl"　value="frame-girl">
						<label for="frame-girl">
							<img src="img/tsukkomi/balloonIcon_girl.png">
						</label>
						
						<input type="radio" name="frame" id="frame-gum"　value="frame-gum">
						<label for="frame-gum">
							<img src="img/tsukkomi/balloonIcon_gum.png">
						</label>
						<input type="radio" name="frame" id="frame-harisen"　value="frame-harisen">
						<label for="frame-harisen">
							<img src="img/tsukkomi/balloonIcon_harisen.png">
						</label>
						<input type="radio" name="frame" id="frame-mike"　value="frame-mike">
						<label for="frame-mike">
							<img src="img/tsukkomi/balloonIcon_mike.png">
						</label>
						<input type="radio" name="frame" id="frame-mu"　value="frame-mu">
						<label for="frame-mu">
							<img src="img/tsukkomi/balloonIcon_mu.png">
						</label>	

						<input type="radio" name="frame" id="frame-niyari"　value="frame-niyari">
						<label for="frame-niyari">
							<img src="img/tsukkomi/balloonIcon_niyari.png">
						</label>
						<input type="radio" name="frame" id="frame-noisy"　value="frame-noisy">
						<label for="frame-noisy">
							<img src="img/tsukkomi/balloonIcon_noisy.png">
						</label>
						<input type="radio" name="frame" id="frame-shine"　value="frame-shine">
						<label for="frame-shine">
							<img src="img/tsukkomi/balloonIcon_shine.png">
						</label>
						<input type="radio" name="frame" id="frame-spiny"　value="frame-spiny">
						<label for="frame-spiny">
							<img src="img/tsukkomi/balloonIcon_spiny.png">		
						</label>										

						<input type="radio" name="frame" id="frame-star"　value="frame-star">
						<label for="frame-star">
							<img src="img/tsukkomi/balloonIcon_star.png">
						</label>
						<input type="radio" name="frame" id="frame-wonder"　value="frame-wonder">
						<label for="frame-wonder">
							<img src="img/tsukkomi/balloonIcon_wonder.png">
						</label>
						<input type="radio" name="frame" id="frame-bee"　value="frame-bee">
						<label for="frame-bee">
							<img src="img/tsukkomi/balloonIcon_bee.png">
						</label>
						<input type="radio" name="frame" id="frame-gero"　value="frame-gero">
						<label for="frame-gero">
							<img src="img/tsukkomi/balloonIcon_gero.png">
						</label>
						<input type="radio" name="frame" id="frame-hun"　value="frame-hun">
						<label for="frame-hun">
							<img src="img/tsukkomi/balloonIcon_hun.png">
						</label>
						<input type="radio" name="frame" id="frame-megane"　value="frame-megane">
						<label for="frame-megane">
							<img src="img/tsukkomi/balloonIcon_megane.png">
						</label>								
					</div>
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
	<script src="js/tsukkomi.js"></script>
	
</body>
</html>