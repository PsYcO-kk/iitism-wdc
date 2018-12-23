var slides = $('.main-carousel .slides__container .slide');
var classNames = ['slide--hidden-left', 'slide--hidden-left', 'slide--next', 'slide--focus', 'slide--previous', 'slide--hidden-right'];

for(var i=0; i<slides.length/2-3; i++){
	classNames.unshift('slide--hidden-left');
	classNames.push('slide--hidden-right');
}

var carouselTimer;

$(document).ready(function(){
	carouselTimer = set_carousel_timer(classNames, slides, 10000);

	// Find all YouTube videos
	var $allVideos = $("iframe[src*='youtube']");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

		$(this)
			.data('aspectRatio', this.height / this.width)

			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

	});

	// When the window is resized
	$(window).resize(function() {

		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {

			var $el = $(this);

			// The element that is fluid width
			var $fluidEl = $el.parent();

			var newWidth = $fluidEl.width();

			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));

		});

	// Kick off one resize to fix all videos on page load
	}).resize();

});

$('.previous-slide-btn').on('click', function(){
	clear_carousel_timer(carouselTimer);
	rotate_carousel_antiCW(classNames);
	assign_classes_to_slides(classNames, slides);
	carouselTimer = set_carousel_timer(classNames, slides, 10000);
});

$('.next-slide-btn').on('click', function(){
	clear_carousel_timer(carouselTimer);
	rotate_carousel_CW(classNames);
	assign_classes_to_slides(classNames, slides);
	carouselTimer = set_carousel_timer(classNames, slides, 10000);
});

function set_carousel_timer(classNames, slides, interval) {
	return setInterval(() => {
		rotate_carousel_antiCW(classNames);
		assign_classes_to_slides(classNames, slides);
	}, interval);
}

function clear_carousel_timer(timer) {
	clearInterval(timer);
}

function rotate_carousel_antiCW(arr) {
	var i = arr.length-1;
	var temp = arr[i];
	for(i; i>0; i--){
		arr[i] = arr[i-1];
	}
	arr[i] = temp;
};

function rotate_carousel_CW(arr) {
	var i = 0;
	var temp = arr[i];
	for(i=1; i<arr.length; i++){
		arr[i-1] = arr[i];
	}
	arr[i-1] = temp;
};

function assign_classes_to_slides(classNames, slides) {
	var classString = classNames.join(' ');
	for(var i=0; i<slides.length; i++){
		slides.eq(i).removeClass(classString).addClass(classNames[i]);
	}
};
