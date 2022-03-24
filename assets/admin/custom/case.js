// JavaScript Document


$(document).ready(function () {
	var counter = $('#wrapper div.rows').length;
	$("#add_more").click(function () {
		counter++;
		var copy = $("#master div:first").clone();
		$('#wrapper').children().last().after(copy);
		var last_row = $('#wrapper').children().last();
		$(last_row).attr('id', 'row' + counter);
		$(last_row).children().children().children().children().each(function () {
			$(this).removeAttr('disabled');
		});
		$(last_row).children().children().children().each(function () {
			$(this).removeAttr('disabled');
		});
	});


	$('#vehicles_form').submit(function () {

		var name = required_input('name');
		var category = required_select('category[]');
		var min_ord = required_input('min_order_qty');
		var max_ord = required_input('max_order_qty');
		var price = required_input('price');

		if (name == false || category == false) {
			$('.tabs').removeClass('active');
			$('.tab-pane').removeClass('active in');

			$('#details').addClass('active');
			$('#details_tab').addClass('active in');
			$('#name').focus();
			return false;
		}

		else if (price == false) {
			$('.tabs').removeClass('active');
			$('.tab-pane').removeClass('active in');

			$('#pricing').addClass('active');
			$('#pricing_tab').addClass('active in');
			$('#price').focus();
			return false;
		}
		else if (min_ord == false || max_ord == false) {
			$('.tabs').removeClass('active');
			$('.tab-pane').removeClass('active in');

			$('#other_details').addClass('active');
			$('#other_details_tab').addClass('active in');
			$('#min_order_qty').focus();
			return false;

		}

		else {
			$('#case_form').submit();

		}

	});

});
