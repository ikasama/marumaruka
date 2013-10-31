var num = 1;
localStorage.setItem("odai_num", num);
console.log(localStorage.getItem("odai_num"));


$('.submit-btn').on('click', function () {
	var form_val = $('.odai-form[name=odai]').values().odai;
	console.log(form_val);

	var num = localStorage.getItem("odai_num") || 1;
	num = Number(num);
	var key = "odai-" + num;
	console.log(key);

	localStorage.setItem(key, form_val);
	console.log(localStorage.getItem(key));
	num += 1;
	localStorage.setItem("odai_num", num);
	console.log(localStorage.getItem("odai_num"));

	var insert_html = EE('div', {'@class': 'odai-post anim-reaction'}, [
		EE('div',{'@class':'icon-name'},[
				EE('div',{'@class':'user-name'},'@cyber_taro')
			]),
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
				EE('p', {'@class': 'boke-text'}, form_val)
			]),
			EE('a',{'@href':'tsukkomi-5.html'},[
				EE('div',{'@class':'tsukkomu-this anim-btn'},'このお題にツッコむ！')
			])
		]);
	console.log(insert_html);
	$('#modal-17').set('-md-show');	
	$('.child-page').addAfter(insert_html);

});