jQuery(function($){
	//$("#billing_dob").before("<span id='ca_adeel_date'>Date of Birth: </span>");
	$("#billing_dob").attr("type", "date");
	$("#billing_dob").css({
		"color" : "#666"
	});

	// create account of checkout page checkbox should be checked
	$(".checkout #createaccount").attr("checked", "checked");
});
