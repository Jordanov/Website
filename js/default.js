$(document).ready(function()
{
	// change url attribute of validator links to current url
	var url = $(location).attr('href');
	var htmlUrl = $("#html_validator").attr("href").replace("=","="+url);
	var cssUrl = $("#css_validator").attr("href").replace("=","="+url);

	$("#html_validator").attr('href', htmlUrl);
	$("#css_validator").attr('href', cssUrl);
});