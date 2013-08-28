// seminar
(function($) {
	var sliderUL = $('#seminars ul'),
		imgs = sliderUL.find('.content-text'),
		imgWidth = 545, // 600
		imgsLen = 8, // 4
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400
		console.log(sliderUL);
		seminar = $('#seminar-nav').show().find('a');
	
	seminar.click(function(event) {
		event.preventDefault();		
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? ++current : --current;

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

})(jQuery);

// playground
(function($) {
	var sliderUL = $('#playground ul'),
		imgs = sliderUL.find('.content-text'),
		imgWidth = 545, // 600
		imgsLen = 2, // 4
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400
		console.log(sliderUL);

	$('#playground-nav').show().find('a').click(function(event) {
		event.preventDefault();		
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? ++current : --current;

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

})(jQuery);

//competition
(function($) {
	var sliderUL = $('div.competition-main-slider').css('overflow', 'hidden').children('ul'),
		imgs = sliderUL.find('a'),
		imgWidth = 160,
		imgsLen = $('.data-slider').data('total')-2,
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400

	$('.competition-main-slider-button').show().find('a').click(function(event) {
		event.preventDefault();
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? ++current : --current;

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

	var descMover = $("div.competition-desc-mover"),
		mapPointer = $("div.competition-map-pointer"),
		descHeight = 350,
		descLen = imgsLen,
		descCurrent = 1,
		totalDescHeight = descLen * descHeight;

	$('div.competition-main-slider').show().find('a').click(function(event) {
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

//entertainment

(function($) {
	var sliderUL = $('div.entertainment-main-slider').css('overflow', 'hidden').children('ul'),
		imgs = sliderUL.find('a'),
		imgWidth = 160,
		imgsLen = $('.data-slider').data('total')-2,
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400

	$('.entertainment-main-slider-button').show().find('a').click(function(event) {
		event.preventDefault();
		var direction = $(this).data('dir'),
			loc = imgWidth; // 600

		// update current value
		( direction === 'next' ) ? ++current : --current;

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

	var descMover = $("div.entertainment-desc-mover"),
		mapPointer = $("div.entertainment-map-pointer"),
		descHeight = 350,
		descLen = imgsLen,
		descCurrent = 1,
		totalDescHeight = descLen * descHeight;

	$('div.entertainment-main-slider').show().find('a').click(function(event) {
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