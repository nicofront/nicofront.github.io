$(document).ready(function() {

  $('.acordeon-enabled').find('.acordeon-body:first').show();

  $('.acordeon-trigger').click(function(event){
  	event.preventDefault();
  	console.log('Click');
  	var self = $(this).parents('.acordeon');
  	var next = self.next();
  	self.removeClass("acordeon-enabled");
  	self.addClass("acordeon-disabled");
    self.find('.acordeon-body:first').hide();
    next.find('.acordeon-body:first').slideDown('slow');
  	next.removeClass("acordeon-disabled");
  	next.addClass("acordeon-enabled");
  });

  $('.acordeon-reset').click(function(event){
    event.preventDefault();
    var self = $(this).parents('.acordeon');
    var first = $('.wrapper').find('.acordeon:first');
    self.removeClass("acordeon-enabled");
    self.addClass("acordeon-disabled");
    self.find('.acordeon-body:first').hide();
    first.removeClass('acordeon-disabled');
    first.addClass('acordeon-enabled');
    first.find('.acordeon-body:first').slideDown('slow');
  });

});