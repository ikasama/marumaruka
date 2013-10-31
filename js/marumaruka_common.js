//localStorage.clear();

var MINI = require('minified');
var $ = MINI.$, $$=MINI.$$, EE=MINI.EE;
var jQuery = $;

window.onload = function () {
	$("body").set('+animated +fade-in');
	$("body").animate({
		scrollTop: 0
	});
	$(".odai-btn").set('+slide-up');
	$(".tsukkomi-btn").set('+slide-up');	
};

$(function() {
	// good
	$('.reaction .row .good > p:first-child').on('click', function(event) {
		//ボタンのDOM
		var btnEl = event.currentTarget;
		var parentEl = btnEl.parentNode;
		var countEl = $('.count-good', parentEl);
		//debugger;
		
		//押したボタンのカウント数
		var countNum = countEl.text();
		countNum = Number(countNum);
		countNum += 1;
		//debugger;
		countEl[0].textContent = countNum;
	});

	// normal
	$('.reaction .row .normal > p:first-child').on('click', function(event) {
		//ボタンのDOM
		var btnEl = event.currentTarget;
		var parentEl = btnEl.parentNode;
		var countEl = $('.count-normal', parentEl);
		//debugger;
		
		//押したボタンのカウント数
		var countNum = countEl.text();
		countNum = Number(countNum);
		countNum += 1;
		//debugger;
		countEl[0].textContent = countNum;
	});

	// bad
	$('.reaction .row .bad > p:first-child').on('click', function(event) {
		//ボタンのDOM
		var btnEl = event.currentTarget;
		var parentEl = btnEl.parentNode;
		var countEl = $('.count-bad', parentEl);
		
		//押したボタンのカウント数
		var countNum = countEl.text();
		countNum = Number(countNum);
		countNum += 1;
		countEl[0].textContent = countNum;

	});
	$('.reaction .row p:first-child').on('click', function() { 
		$(this).set("+anim-reaction");
	});    
	$('.reaction .row p:first-child').on('webkitAnimationEnd', function () {
		$(this).set("-anim-reaction");
	});
	$('form .tsukkomi-text').on('webkitAnimationEnd', function () {
		$(this).set("-animated -bounce -tada -shake -swing -wobble -flash -pulse -bounceInDown -rotateIn");
	});
	$('.tsukkomi-post').on('webkitAnimationEnd', function () {
		$(this).set("-anim-reaction");
	});		
	// animation
	$('.anim-btn').on('click', function(){ 
		$(this).set("+anim-reaction");
	});    
	$('.anim-btn').on('webkitAnimationEnd', function () {
		$(this).set("-anim-reaction");
		var parent = $(this).trav('parentNode', 'a');
		var href = parent.get('@href');
		location.href = href;		
	});	
	$('.anim-btn2').on('click', function(){ 
		$(this).set("+anim-reaction");
	});    
	$('.anim-btn2').on('webkitAnimationEnd', function () {
		$(this).set("-anim-reaction");
	});		

});

function check_length(tsukkomi){
	var tsukkomi_text = tsukkomi.innerHTML;
	var tsukkomi_length = tsukkomi_text.length;
	return tsukkomi_length;
};

$('.tsukkomi-text').each(function(element) {
	element.className += ' length-' + check_length(element);
});

