(function($) {
	var messegeUrl = 'https://m.me/';

	$(document).ready(function() {
		
		$('[data-username]').click(function(){
			var $dataUsername = '',
				$openUrl = '',
				$dataMessageAttr = '',
				$dataMessage = '';

			var $dataOffline = $(this).parent('li').hasClass('offline');
			if(!$dataOffline){
				$dataUsername = $(this).attr('data-username');
				if($dataUsername != undefined && $dataUsername != ''){
					$dataUsername = $dataUsername.replace('+','');
					var	$openUrl = messegeUrl+$dataUsername;
				}

				if($openUrl != undefined && $openUrl != ''){
					window.open($openUrl,'_blank');
				}
			}
		})
	});
})(jQuery)