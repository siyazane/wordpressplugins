$(document).ready(function(){
//alert(document.domain+'siteMagazine/wp-content/plugins/horaire-priere/salat.php');
	$.post(
	
		'http://'+document.domain+'/wp-content/plugins/horaire-priere/salat.php',
		{ville:'rabat sale'},
		function(res){
			$('#model').html(res);
		}
		);
			$("#ville").change(function(){
	$.post(
		'http://'+document.domain+'/wp-content/plugins/horaire-priere/salat.php',
		{ville:$('#ville').val()},
		function(res){
			$('#model').html(res);
		}
		);
	});
});