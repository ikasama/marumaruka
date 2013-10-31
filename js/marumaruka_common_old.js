localStorage.clear();

window.onload = function () {
	$("body").animate({
		scrollTop: 0
	});
};

$(function() {
	$('.reaction .row div').click(function() {
		console.log("aaaaaaaa");
		var current_num = $(this).find('p:nth-child(2)').text();
		console.log(current_num);
		current_num = Number(current_num);
		current_num += 1;
		console.log(current_num);
		$(this).find('p:nth-child(2)').text(current_num);
	});
	$('.reaction .row p:first-child').click(function(){ 
    	$(this).addClass("animated bounce");
	});    
	$('.reaction .row p:first-child').bind('webkitAnimationEnd', function () {
		$(this).removeClass();
	});
});