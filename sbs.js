$(function() {
	$('#ir-sub').click(function() {
		$('.news-contents').css('display', 'none');
		$('.ir-contents').css('display', 'block');
	});
	$('#news-sub').click(function() {
		$('.ir-contents').css('display', 'none');
		$('.news-contents').css('display', 'block');
	});

});