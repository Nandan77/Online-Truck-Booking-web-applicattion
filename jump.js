$(document).ready(function() {
	$("#Full-Load").show();
	$("#Half-Load").hide();
	
	
	$("#button1").click(function(){		
		$("#Full-Load").show();
		$("#Half-Load").hide();
		
	});
	$("#button2").click(function(){
		$("#Half-Load").show();
		$("#Full-Load").hide();
	
	});
	$("#button3").click(function(){
		$("#oneway").hide();
		$("#roundtrip").hide();
		
	});
});