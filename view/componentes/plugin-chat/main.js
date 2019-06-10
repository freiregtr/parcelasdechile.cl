(function($){
	"use strict";
	$(document).ready(function() {

		/* Start Show Popup Js */
		$(".myIcon").click(function(){
			var $thisShow = $(this).attr('data-show');
			if($thisShow != undefined && $thisShow != ''){
				$('.chatsPopup').each(function(){
					var $showPopup = $(this).hasClass('showPopup');
					if($(this).attr('id') == $thisShow){
						$('.chatsPopup').removeClass('showPopup');
						if($showPopup){
							$(this).removeClass('showPopup');
						}else{
							$(this).addClass('showPopup');
						}
					}
				})
			}
		});
		/* Start Show Popup Js */


		$('.closePopup').click(function(){
			$('.chatsPopup').removeClass('showPopup');
		});


		$('.sochIcon').click(function(){
			if(!$(this).attr('data-show')){
				$('.chatsPopup').removeClass('showPopup');
				$('.chatIcons').toggleClass('showIcons');
			}
		});



		/* Start User Available JS */
		$('.chats-button').each(function(){
			var $dataAvail = $(this).attr('data-available');
			if(typeof $dataAvail != "undefined" && $dataAvail != ''){
				var onlineMsg = 'Disponible ahora';
				var offlineMsg = 'Volveré luego';
				var available = $(this).data('available');
				var d = new Date();
				var days = ["sunday","monday","tuesday","wednesday","thursday","friday","saturday"];
				var todayDay = days[d.getDay()];
				var getHours = d.getHours();
				var getMinutes = d.getMinutes();
				if(getMinutes < 10){
					getMinutes = '0'+getMinutes;
				}
				var nowTime = getHours+':'+getMinutes;
				var nowTimeData = nowTime.split(":");

				var nowTimeAA = nowTime.split(":");
				if( nowTimeAA[0] >= 0 && nowTimeAA[0] <= 9 ){
					nowTime = '0'+nowTime;
				}

				var nextDay = d.getDay() + 1;
				if(nextDay > 6){
					nextDay = 0;
				}

				var nextdayint  =nextDay;

				nextDay = days[nextDay];// Sunday
				if( typeof available[todayDay] != "undefined" ){
					var timeofavailable = available[todayDay];
					timeofavailable = timeofavailable.split("-");

					// If user fill wrong time
					if( timeofavailable[0] >= timeofavailable[1]){
						$(this).parent("li").addClass("offline");
						$(this).find(".userStatus").text("Fuera de linea");
						return false;
					}
					// Compare between to time 
					if(
						(timeofavailable[0] <= nowTime)  
					 	&& 
					 	(timeofavailable[1] >= nowTime) // 
					 ){
					 	$(this).parent("li").addClass("active");
						$(this).find(".userStatus").text(onlineMsg);
					}else{
						$(this).click(function(e){
							e.preventDefault();
						});
						$(this).parent("li").addClass("offline");
						if(timeofavailable[0] > nowTime){
							var todayAvailableStart = timeofavailable[0].split(":"),
					 		backOnlineH = todayAvailableStart[0] - nowTimeData[0], // 1
							backOnlineM = todayAvailableStart[1] - nowTimeData[1], // 01 - 19 = -18
							dt1 = new Date(d.getFullYear(),d.getMonth(),d.getDate(),d.getHours(),d.getMinutes()),
							dt2 = new Date(d.getFullYear(),d.getMonth(),d.getDate(),todayAvailableStart[0],todayAvailableStart[1]);
							var diff_minute = diff_minutes(dt1, dt2);
							var diff = 0;
							if( diff_minute > 59 ){
								if( ( diff_minute / 60 ) == 0 ){
									diff = '1 Hrs';
								}else{
									diff = diff_minute % 60;
									if( Math.floor(diff_minute / 60) > 0 ){
										diff = Math.floor(diff_minute / 60) + ':' + diff + ' Hrs.';
									}
								}
							}else{
								diff = diff_minute + ' Min';
							}
							$(this).find(".userStatus").text(offlineMsg+" despues de "+diff);
						}else{
							// Next Day
							if(typeof available[nextDay] != "undefined"){

								var nextAvailable = available[nextDay].split("-"),
									nextAvailableStart = nextAvailable[0].split(":");
									var dx = new Date();
						dt1 = new Date(d.getFullYear(),d.getMonth(),d.getDate(),d.getHours(),d.getMinutes());
						dt2 = new Date(d.getFullYear(),d.getMonth(),(dx.getDate() + 1),nextAvailableStart[0],nextAvailableStart[1]);
									var diff_minute = diff_minutes(dt1, dt2);
									var diff = 0;
									if( diff_minute > 59 ){
										if( ( diff_minute / 60 ) == 0 ){
											diff = '1 Hrs';
										}else{
											diff = diff_minute % 60;
											if( Math.floor(diff_minute / 60) > 0 ){
												diff = Math.floor(diff_minute / 60) + ':' + diff + ' Hrs.';
											}
										}
									}else{
										diff = diff_minute + ' Min';
									}
									$(this).find(".userStatus").text(offlineMsg+" despues de "+diff);
							}else{

								$(this).find(".userStatus").text(offlineMsg+" soon.");
							}
						}
					}
				}else{
					$(this).click(function(e){
						e.preventDefault();
					});
					$(this).parent("li").addClass("offline");
					if(typeof available[nextDay] != "undefined"){
						var nextAvailable = available[nextDay].split("-"),
						nextAvailableStart = nextAvailable[0].split(":");

						var dx = new Date();
						dt1 = new Date(d.getFullYear(),d.getMonth(),d.getDate(),d.getHours(),d.getMinutes());
						dt2 = new Date(d.getFullYear(),d.getMonth(),(dx.getDate() + 1),nextAvailableStart[0],nextAvailableStart[1]);
						
						var diff_minute = diff_minutes(dt1, dt2);
						var diff = 0;
						if( diff_minute > 59 ){
							if( ( diff_minute / 60 ) == 0 ){
								diff = '1 Hrs';
							}else{
								diff = diff_minute % 60;
								if( Math.floor(diff_minute / 60) > 0 ){
									diff = Math.floor(diff_minute / 60) + ':' + diff + ' Hrs.';
								}
							}
						}else{
							diff = diff_minute + ' Min';
						}
						$(this).find(".userStatus").text(offlineMsg+" after "+diff);
					}else{
						$(this).find(".userStatus").text(offlineMsg+" soon.");
					}
				}
			}else{
				$(this).click(function(e){
					e.preventDefault();
				});
				$(this).parent("li").addClass("offline");
				$(this).find(".userStatus").text(offlineMsg+' soon.');
			}
		})
		/* End User Available JS */

	});

	$(document).click(function(e){
	    var container = $("#sochSection");
	    if(!container.is(e.target) && container.has(e.target).length === 0){
	    	$('.chatsPopup').removeClass('showPopup');
	        $(".chatIcons").removeClass('showIcons');
	    }
	});

	function diff_minutes(dt2, dt1) 
	 {

	  var diff =(dt2.getTime() - dt1.getTime()) / 1000;
	  diff /= 60;
	  return Math.abs(Math.round(diff));
	  
	 }
})(jQuery);