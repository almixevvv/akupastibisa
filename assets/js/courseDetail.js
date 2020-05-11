$('.content_title_card').on('click', function() {
	$('.content_title_card').not(this).children().find('.content_expand').removeClass('active');

	$('.content_title_card').not(this).children().find('.content-total').removeClass('d-none');

	$('.content_title_card').not(this).children().find('.content-duration').removeClass('d-none');

	$(this).children().find('.content_expand').toggleClass('active');

	$(this).children().find('.content-total').toggleClass('d-none');

	$(this).children().find('.content-duration').toggleClass('d-none');
});
