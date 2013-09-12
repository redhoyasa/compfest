// the procedural method
(function($) {
	var sliderUL = $('div.playground-main-slider').css('overflow', 'hidden').children('ul'),
		imgs = sliderUL.find('a'),
		imgWidth = 180*5,
		imgsLen = $('.data-slider').data('total'),
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400

	$('.playground-main-slider-button').show().find('a').click(function(event) {
		event.preventDefault();
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? current+=5 : current-=5;

		// if first image
		if ( current === 0 ) {
			current = imgsLen;
			loc = totalImgsWidth - imgWidth; // 2400 - 600 = 1800
			direction = 'next';
		} else if ( current - 1 === imgsLen ) { // Are we at end? Should we reset?
			current = 1;
			loc = 0;
		}

		transition(sliderUL, loc, direction);
	});

	function transition( container, loc, direction ) {
		var unit; // -= +=

		if ( direction && loc !== 0 ) {
			unit = ( direction === 'next' ) ? '-=' : '+=';
		}

		container.animate({
			'margin-left': unit ? (unit + loc) : loc
		});
	}
	
	var descMover = $("div.playground-desc-mover"),
		mapPointer = $("div.playground-map-pointer"),
		descHeight = 350,
		descLen = imgsLen,
		descCurrent = 1,
		totalDescHeight = descLen * descHeight;
		
	$('div.playground-main-slider').show().find('a').click(function(event) {
		event.preventDefault();
		var mapX = $(this).data('axis'),
			mapY = $(this).data('ordinate'),
			descId = $(this).attr('href'),
			descLoc = -1*(descId * descHeight - descHeight);
		
		descMover.animate({
			'margin-top': descLoc
		});
		
		mapPointer.animate({
			'top': mapY,
			'left': mapX
		});
		
	});

})(jQuery);