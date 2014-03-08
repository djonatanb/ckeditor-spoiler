$(function() {
	$('#editor').ckeditor();
	$('#send').click(function() {
		var text = $('#editor').val();
		$('div.page').html(text);
		$('div.spoiler-title').click(function() {
			$(this)
				.children()
				.first()
				.toggleClass('show-icon')
				.toggleClass('hide-icon');
			$(this)
				.parent().children().last().toggle();
		});
	});
	$('#tabs').tabs();
	var links = $('ul.nav > li > a');
	links.click(function() {
		links.parent().removeClass('active');
		$(this).parent().addClass('active');
	});
});