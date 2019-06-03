(function($){
	var $isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	
		if($isMobile){
			whatsUrl = 'https://api.whatsapp.com/send';
		}else{
			whatsUrl = 'https://web.whatsapp.com/send';
		}

	$(document).ready(function() {
		
		$('[data-contact]').click(function(){
			var $dataNumber = '',
				$openUrl = '',
				$dataMessageAttr = '',
				$dataMessage = '',
				$dataAvail = '';

			var $dataOffline = $(this).parent('li').hasClass('offline');
			if(!$dataOffline){
				$dataNumber = $(this).attr('data-contact');
				if($dataNumber != undefined && $dataNumber != ''){
					$dataNumber = $dataNumber.replace('+','');
					var	$openUrl = whatsUrl+'?phone='+$dataNumber;
				}
				$dataMessageAttr = $(this).attr('data-message'),
				$dataMessage = '';
				if($dataMessageAttr != undefined && $dataMessageAttr != ''){
					$dataMessage = $(this).attr('data-message');
					$openUrl = $openUrl+'&text='+$dataMessage;
				}

				if($openUrl != undefined && $openUrl != ''){
					window.open($openUrl,'_blank');
				}
			}
		})
	});

})(jQuery)