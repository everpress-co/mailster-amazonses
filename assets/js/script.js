jQuery(document).ready(function ($) {

	$('#subtab-amazonses')
		.on('change', '.mailster-amazonses-api', function () {

			if ($(this).val() == 1) {
				$('.amazonses-tab-smtp').slideDown();
			} else {
				$('.amazonses-tab-smtp').slideUp();
			}

		})
		.on('change', '.mailster-amazonses-bouncehandling', function () {

			if ($(this).val()) {
				$('.amazonsns-options').slideDown();
			} else {
				$('.amazonsns-options').slideUp();
			}

		});

});