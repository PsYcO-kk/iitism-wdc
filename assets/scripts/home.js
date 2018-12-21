$(document).ready(function(){

	$(window).on('resize', function(){
		$('.featured-research__container .content').css('min-height', max_height($('.featured-research__list-item')));
	});

	$('#featured-research__left-pager').click(function(){
		$(this).prop('disabled', true);
		var arr = $('.featured-research__list-item');
		for(var i=0; i<arr.length; i++){
			if(arr.eq(i).hasClass('active')){
				var left1 = i-1<0 ? arr.length+i-1 : i-1;
				var left2 = i-2<0 ? arr.length+i-2 : i-2;
				arr.eq(i).removeClass('active').addClass('hidden-right');
				arr.eq(left1).removeClass('hidden-left').addClass('active');
				arr.eq(left2).removeClass('hidden-right').addClass('hidden-left');
				break;
			}
		}
		$(this).prop('disabled', false);
	});

	$('#featured-research__right-pager').click(function(){
		$(this).prop('disabled', true);
		var arr = $('.featured-research__list-item');
		for(var i=0; i<arr.length; i++){
			if(arr.eq(i).hasClass('active')){
				var right1 = i+1>=arr.length ? i+1-arr.length : i+1;
				var right2 = i+2>=arr.length ? i+2-arr.length : i+2;
				arr.eq(i).removeClass('active').addClass('hidden-left');
				arr.eq(right1).removeClass('hidden-right').addClass('active');
				arr.eq(right2).removeClass('hidden-left').addClass('hidden-right');
				break;
			}
		}
		$(this).prop('disabled', false);
	});

});

function max_height(arr) {
	var max=0;
	for(var i=0; i<arr.length; i++){
		if(arr.eq(i).outerHeight() > max)
			max = arr.eq(i).outerHeight();
	}
	return max;
};
