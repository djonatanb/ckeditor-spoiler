$(function() {
	$('div.spoiler-title').click(function() {
		$(this)
			.toggleClass('show-icon')
			.toggleClass('hide-icon')
			.parent().children().last().toggle();
	});
});