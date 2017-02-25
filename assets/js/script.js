(function($){

	var x = 0;
	var y = 0;

	var banner = $("#banner");
	var startTime = new Date().getTime();

	banner.css('backgroundPosition', x + 'px' + ' ' + y + 'px');

	ban = window.setInterval(function() {
		banner.css("backgroundPosition", x + 'px' + ' ' + y + 'px');
		y--;

	if(new Date().getTime() - startTime > 22000){
        clearInterval(ban);
        return;
    }

	}, 90);

}) (jQuery);