$(document).ready(function(){
	$.post(
	
		'./wp-content/plugins/weather/trt.php',
		{ville:'rabat sale'},
		function(res){
			$('#model').html(res);
		}
		);
	$("#ville").change(function(){
	$.post(
		'./wp-content/plugins/weather/trt.php',
		{ville:$('#ville').val()},
		function(res){
			$('#model').html(res);
		}
		);
	});
});