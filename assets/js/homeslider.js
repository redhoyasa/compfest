// the procedural method
(function($) {
	var sliderUL = $('#seminars ul'),
		imgs = sliderUL.find('.content-text'),
		imgWidth = 545, // 600
		imgsLen = 2, // 4
		current = 1,
		totalImgsWidth = imgsLen * imgWidth; // 2400

	$('#navi').show().find('a').click(function(event) {
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