var frame_val;
$('input[type="radio"]').on('click', function(){
	var current_val = $('.md-content .tsukkomi-text').get('@class');
	frame_val = $('input[type="radio"]:checked').get('id');
	console.log(frame_val);
	console.log(current_val);
	var anim_array = ["shake","tada","bounce","wobble","swing","flash","pulse","bounceInDown","rotateIn"];
	var rand_anim = anim_array[Math.floor(Math.random()*9)];
	$('.md-content .tsukkomi-text').set('@class', frame_val+" tsukkomi-text animated "+rand_anim);
});
for (var i = 1; i <= 10; i++) {
	var res = JSON.parse(localStorage.getItem("post-" + i));
	//debugger;
	if (res)  {
		var insert_html = 
		EE('div', {'@class':'tsukkomi-post anim-reaction'},[
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
				])
			]);
		$('.boke').addAfter(insert_html);
	}
}
$('.submit-btn').on('click', function () {
	var form_val = $('.tsukkomi-form[name=tsukkomi]').values().tsukkomi;
	//var frame_val = $('input[type=radio]:checked').get('id');

	if(!form_val || !frame_val) {
		alert('文字が入力されていないか吹き出しを選択していません。');
		return;
	}


	var num = localStorage.getItem("tsukkomi_num") || 1;
	num = Number(num);

	var odai_name = $('p.boke-text').text();

	var post = {
		"num": num,
		"odai": odai_name,
		"tsukkomi": form_val,
		"frame": frame_val
	};
	console.log(post);
	console.log(JSON.stringify(post));
	localStorage.setItem("post-" + num, JSON.stringify(post));
	console.log(JSON.parse(localStorage.getItem("post" + num)));

	num += 1;
	localStorage.setItem("tsukkomi_num", num);
	console.log(localStorage.getItem("tsukkomi_num"));

	var insert_html = 
	EE('div', {'@class':'tsukkomi-post anim-reaction'},[
		EE('div',{'@class':'tsukkomi'},[
			EE('div',{'@class':'icon'},[
				EE('div',{'@class':'user-name'},'@chan_yuki')
			]),
			EE('p',{'@class':'tsukkomi-text ' +frame_val},form_val)
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
		])
	]);
	$('.boke').addAfter(insert_html);
	//checkされているのをリセット
	$('input[type=radio]:checked').set('checked',false);	
	//modalをゲット
	$('#modal-17').set('-md-show');
});


