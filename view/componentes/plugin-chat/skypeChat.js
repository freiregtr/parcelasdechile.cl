(function($) {
	var skypeUrl = 'skype:';
	$(document).ready(function() {
		
		$('[data-skypename]').click(function(){
			var $skypeName = '',
				$openUrl = '',
				$dataTopicAttr = '',
				$dataTopic = '';

			var $dataOffline = $(this).parent('li').hasClass('offline');
			if(!$dataOffline){
				$skypeName = $(this).attr('data-skypename');
				if($skypeName != undefined && $skypeName != ''){
					$skypeName = $skypeName.replace('+','');
					var	$openUrl = skypeUrl+$skypeName+'?chat';
				}
				if($openUrl != undefined && $openUrl != ''){
					window.open($openUrl,'_self');
				}
			}
		})
	});
})(jQuery)