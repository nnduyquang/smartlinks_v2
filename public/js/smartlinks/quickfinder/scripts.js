function convertColor(rgb){
	if(rgb.indexOf('rgb') != -1) {
		rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
		rgb[1] -= (rgb[1] > 20 ? 20 : rgb[1]);
		rgb[2] -= (rgb[2] > 20 ? 20 : rgb[2]);
		rgb[3] -= (rgb[3] > 20 ? 20 : rgb[3]);
		return 'rgb('+rgb[1]+','+rgb[2]+','+rgb[3]+')';
	} else {
		return rgb;
	}
}
function buildQuickfinderTextShadow(element, color) {
	var $self = jQuery(element).find('span');
	var length = $self.height();
	var shadowColor = convertColor(color);
	var textShadow = '0px 0px 0 '+shadowColor;
	for(i = 1; i < length; i++) {
		textShadow += ','+i+'px '+i+'px 0 '+shadowColor;
	}
	return textShadow;
}

jQuery(document).ready(function() {
	if(jQuery('body').hasClass('lazy-enabled')) {
		if(!jQuery.support.opacity) {
			jQuery('body').removeClass('lazy-enabled')
		} else {
			jQuery('.widget_text, .widget_black_studio_tinymce').addClass('lazy-loading').data('ll-item-delay', '0').wrapInner('<div class="lazy-loading-item" data-ll-effect="fading"></div>');
			jQuery('ul.jobs').addClass('lazy-loading').data('ll-item-delay', '200');
			jQuery('li', 'ul.jobs').addClass('lazy-loading-item').data('ll-effect', 'slide-right');
			if(jQuery(window).width() > 800) {
				jQuery.lazyLoading();
				
			}
		}
	}
});

