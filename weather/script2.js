$(document).ready(function(){
	$("#ville").change(function(){
	$.post(
		'http://'+document.domain+'/siteMagazine/wp-content/plugins/horaire-priere/salat.php',
		{ville:$('#ville').val()},
		function(res){
			$('#model').html(res);
		}
		);
	});

});