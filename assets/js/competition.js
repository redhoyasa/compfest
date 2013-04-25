$(document).ready(function(){
	$(".fancybox").fancybox({
		type: 'inline',
		autoSize : false,
		autoHeight : true,
		speedIn: 200,
		speedOut: 200,
		width : 960,
		afterLoad   : function() {
			if ($(this.element).attr('id') == 'cp-link') {
				this.content = $("#cp");
			}
			if ($(this.element).attr('id') == 'open-link') {
				this.content = $("#open");
			}
			if ($(this.element).attr('id') == 'robot-link') {
				this.content = $("#robot");
			}
			if ($(this.element).attr('id') == 'wa-link') {
				this.content = $("#wa");
			}
		}
	});
});
