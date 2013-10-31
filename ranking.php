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
	<link rel="stylesheet" href="scss/ranking.css">
	<title>〇〇か！</title>
</head>
<body>
<!--header.scss-->
	<div class="container" style="height:500px">
		<div id="header_s">
			<img src="img/header_logo_s.png">			
		</div>

	<div class="title child-page">
		<strong class="title-content">
			<h1>ランキング</h1>
		</strong>
	</div>
<!--header.scss-->
<div class="tabs">
  <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked/>
  <label for="tab-1" class="tab-label-1"><p>秀逸！</p></label>
  <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
  <label for="tab-2" class="tab-label-2"><p>おしい</p></label>
  <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
  <label for="tab-3" class="tab-label-3"><p>ズコッ</p></label>
  <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
  <label for="tab-4" class="tab-label-4"><p>お題</p></label>
  <div class="clear-shadow"></div>
  <div class="tabs_content">
    <ul class="tabs_content-1">
	<div class="ranking-post">
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
			オッス
			</p>
		</div>
		<!-- /.boke -->
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-mike">悟空か！</p>
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
	<!-- /.ranking-post -->
	<div class="ranking-post">
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
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-gum">ぶど男(お)か！</p>
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
	<div class="ranking-post">
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
			あー助けてー
			</p>
		</div>
		<!-- /.boke -->
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-cry">大丈夫か！</p>
		</div>
		<!-- /.tsukkomi -->

		<div class="reaction">
			<div class="row">
				<div class="good">
					<p>秀逸！</p>
					<p class="count-good">78</p>
					</div>
					<!-- /.good -->
					<div class="normal">
						<p>おしい</p>
						<p class="count-normal">94</p>
					</div>
					<!-- /.nomal -->
					<div class="bad">
						<p>ズコッ</p>
						<p class="count-bad">16</p>
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
	<div class="ranking-post">
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
			牛乳うまい
			</p>
		</div>
		<!-- /.boke -->
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-amazing">牛か！</p>
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
	<!-- /.ranking-post -->
	<div class="ranking-post">
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
			ボキャぶる！
			</p>
		</div>
		<!-- /.boke -->
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-bee">造語か！</p>
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
	<div class="ranking-post">
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
			スーパーデザイナーがおるんやけど
			</p>
		</div>
		<!-- /.boke -->
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-hun">中村隼大か！</p>
		</div>
		<!-- /.tsukkomi -->

		<div class="reaction">
			<div class="row">
				<div class="good">
					<p>秀逸！</p>
					<p class="count-good">6</p>
					</div>
					<!-- /.good -->
					<div class="normal">
						<p>おしい</p>
						<p class="count-normal">64</p>
					</div>
					<!-- /.nomal -->
					<div class="bad">
						<p>ズコッ</p>
						<p class="count-bad">9</p>
					</div>
						<!-- /.bad -->
				</div>
				<!-- /.row -->
		</div>
		<!-- /.reaction -->
	</div>
	<!-- /.top-post -->	
    </ul>
    <ul class="tabs_content-3">
	<div class="ranking-post">
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
			別れは美しくありたい
			</p>
		</div>
		<!-- /.boke -->
			<a href="tsukkomi-5.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		<div class="tsukkomi">
			<div class="icon">
				<div class="user-name">@chan_yuki</div>
			</div>
			<p class="tsukkomi-text frame-fun">割り箸か！</p>
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
	<!-- /.ranking-post -->
    </ul>
    <ul class="tabs_content-4">
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
					キャベツよりレタス派！
				</p>
			</div>
			<a href="tsukkomi-5.html">
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
					男「あー、日焼けするーっ」
				</p>
			</div>			
			<a href="tsukkomi-4.html">
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
					ボキャぶる！ってアプリが最近流行ってて…
				</p>
			</div>			
			<a href="tsukkomi-3.html">
				<div class="tsukkomu-this anim-btn">このお題にツッコむ！</div>
			</a>
		</div>
    </ul>    
  </div>
</div>
<!--menu.scss-->
	<div id="menu">
		<ul>
			<a href="index.php"><li class="menu-top"></li></a>
			<a href="new.php"><li class="menu-new"></li></a>
			<a href="odai.php"><li class="menu-odai"></li></a>
			<a href="ranking.php"><li class="menu-ranking"  style="background-position:-383px 110px;"></li></a>
			<a href="<?php if($_SESSION['account_name']){ ?>mypage.php<?php } else { ?>recog.php<?php } ?>"><li class="<?php if ($_SESSION['account_name']){?>menu-mypage<?php }else{ ?>menu-login<?php } ?>"></li></a>
		</ul>	
	</div>
<!--menu.scss-->
</div>

	<script src="js/minified-web.noie.js"></script>
	<script src="js/marumaruka_common.js"></script>
	
</body>
</html>