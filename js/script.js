jQuery(document).ready(function($) {

	$('.mailster-amazonses-api').on('change', function(){

		(parseInt($(this).val(), 10))
			? $('.amazonses-tab-smtp').slideDown()
			: $('.amazonses-tab-smtp').slideUp();

	});

});
