$(document).ready(function() {

	//new WOW().init();

	wow = new WOW({mobile: false});
	wow.init();

	$('#sandwich').click(function(){
		$('#head-secondary').stop().fadeToggle();
		return false;
	});

	//.toggle
	$('.faq-trigger').click(function(){
		var self = $(this);
		self.next().stop().slideToggle();
		return false;
	})

	$('.accordion-trigger').click(function(){
		var self = $(this);
		self.stop().toggleClass('active');
		self.next().stop().slideToggle();
		return false;
	});

});