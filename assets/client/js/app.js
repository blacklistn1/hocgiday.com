$(document).ready(function() {
	$(".hgd-profile-detail").hide();
	$("#thank-you").hide();
	$(".hgd-read-more").click(function() {
		$(this).parent().parent().next().slideToggle('fast');
	});
	$("#cities :checkbox").click(function() {
		$(".hgd-profile-box").hide();
		$("#cities :checkbox:checked").each(function() {
			$("." + $(this).val()).show();
		});
	});
	$("#district :checkbox").click(function() {
		$(".hgd-profile-box").hide();
		$("#district :checkbox:checked").each(function() {
			$("." + $(this).val()).show();
		});
	});	
	$(".btn-sign-up").click(function() {
		$("#thank-you").hide();
		var rel = $(this).attr("rel");
		var tName = $("#"+rel).text();
		$("#tName").text("Đăng ký học với giáo viên "+tName);
		$("#chosen-teacher").val(tName);
	});
	$(".btn-submit").click(function() {
		$("#thank-you").show();
	});

	$('#price-slider').slider({
		range: true,
		min: 100,
		max: 600,
		values: [100, 600],
		create: function() {
			$("#amount").val("100 000 - 600 000");
		},
		slide: function (event, ui) {
			$("#amount").val(ui.values[0] + " 000 - " + ui.values[1] + " 000");
			var mi = ui.values[0];
			var mx = ui.values[1];
			filterSystem(mi, mx);
		}
	});
	$('#price-slider-reg').slider({
		range: true,
		min: 100,
		max: 1000,
		step: 10,
		values: [100, 1000],
		create: function() {
			$("#slider-info *").val("100 000 - 1000 000");
		},
		slide: function (event, ui) {
			$("#slider-info *").val(ui.values[0] + " 000 - " + ui.values[1] + " 000");
		}
	});
	$('.p-read-more-content').hide();
	$('.p-read-more').click(function() {
		$(this).next("p").slideToggle();
	});
	fixResponsive();
});

function filterSystem(minPrice, maxPrice) {
	$(".hgd-profile-box").hide().filter(function () {
		var price = parseInt($(this).data("price"), 10);
		return price >= minPrice && price <= maxPrice;
	}).show();
}

function fixResponsive() {
	var h = $('#contact').height() - 0.4;
	$('.slider-filter').css('top',h);
}