
var num = 1;

while (localStorage.getItem("post-" + num)) {
	var res = JSON.parse(localStorage.getItem("post-" + num));
	console.log(res);

	var insert_html = EE('div', {'@class': 'new-post'}, [
		EE('h3','お題'),
		EE('div', {'@class': 'boke'}, [
			EE('div', {'@class': 'icon'}, [
				EE('div',{'@class':'pacman-holder moving'},[
					EE('div',{'@class':'eye'}),
					EE('div',{'@class':'pacman-container'},[
						EE('div',{'@class':'pacman-body'}),
						EE('div',{'@class':'pacman-mouth'},[
							EE('div',{'@class':'pacman'})
							])
						])
					])
				]),
			EE('p', {'@class': 'boke-text'}, res.odai)
			]),
		EE('a',{'@href':'#'},[
			EE('div',{'@class':'tsukkomu-this anim-btn'},'このお題にツッコむ！')
			]),			
		<!-- コピペ -->
		EE('div',{'@class':'tsukkomi'},[
			EE('div',{'@class':'icon'},[
				EE('div',{'@class':'user-name'},'@chan_yuki')
				]),
			EE('p',{'@class':'tsukkomi-text ' + res.frame}, res.tsukkomi)
			]),
		EE('div',{'@class':'reaction'},[
			EE('div',{'@class':'row'},[
				EE('div',{'@class':'good'},[
					EE('p','秀逸！'),
					EE('p',{'@class':'count-good'},'0')						
					]),
				EE('div',{'@class':'normal'},[
					EE('p','おしい'),
					EE('p',{'@class':'count-normal'},'0')						
					]),
				EE('div',{'@class':'bad'},[
					EE('p','ズコッ'),
					EE('p',{'@class':'count-bad'},'0')						
					])			
				])
			])]);


	$('.title').addAfter(insert_html);

	num += 1;
} 