$(document).ready(function() {
$('#email').on('input', function() {
		var input=$(this);
		var is_email=input.val();
		if(is_email)
		{
			input.removeClass("invalid").addClass("valid");
			input.parent().next().hide();
		}
		else
		{
			input.removeClass("valid").addClass("invalid");
			input.parent().next().show();
		}
	});
	$('#pwd1').on('input', function() {
		var input=$(this);
		var is_pwd=input.val();
		if(is_pwd)
		{
			input.removeClass("invalid").addClass("valid");
			input.parent().next().hide();
		}
		else
		{
			input.removeClass("valid").addClass("invalid");
			input.parent().next().show();
		}
	});
	
	$('#username').on('input', function() {
		var input=$(this);
		var is_name=input.val();
		if(is_name)
		{
			input.removeClass("invalid").addClass("valid");
			input.parent().next().next().hide();
		}
		else
		{
			input.removeClass("valid").addClass("invalid");
			input.parent().next().next().show();
		}
	});
	
	$('#tel').on('input', function() {
		var input=$(this);
		var is_tel=input.val();
		if(is_tel)
		{
			input.removeClass("invalid").addClass("valid");
			input.parent().next().hide();
		}
		else
		{
			input.removeClass("valid").addClass("invalid");
			input.parent().next().show();
		}
	});
});