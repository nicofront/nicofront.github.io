$(document).ready(function() {

  $('.acordeon-trigger').click(function(event){
  	event.preventDefault();
  	console.log('Click');
  	var self = this;
  	var next = self.next();
  	self.removeClass("acordeon-enabled");
  	self.addClass("acordeon-disabled");
  	next.removeClass("acordeon-disabled");
  	next.addClass("acordeon-enabled");
  });

});