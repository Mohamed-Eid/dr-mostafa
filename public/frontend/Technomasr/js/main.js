var sidebarBox = document.getElementById('box'),
    sidebarBtn = document.getElementById('btn'),
    pageWrapper = document.getElementById('page-wrapper');

sidebarBtn.addEventListener('click', function (event) {
		sidebarBtn.classList.toggle('active');
		sidebarBox.classList.toggle('active');
});

pageWrapper.addEventListener('click', function (event) {

		if (sidebarBox.classList.contains('active')) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});

window.addEventListener('keydown', function (event) {

		if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});


$(document).ready(function() {

	  // START NICE SCROLL
		$("body").niceScroll({
			cursorcolor:"#bdb986",
			cursorwidth:"5px",
			cursorborder: 0,
			cursorborderradius: 0,
			scrollspeed: 60,
			autohidemode: false,
		});

	// START WOW.JS
	new WOW().init();

	// start courses section
	$(".owl-carousel").owlCarousel({
		loop: true,
		autoPlay: 3000,
		items : 4,
		center: true,
		nav:true,
		loop:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:4
			}
		}
	
	});
	
	});

// end courses section

$(function() {
	var Accordion = function(el, multiple) {
	this.el = el || {};
	this.multiple = multiple || false;
	
	var links = this.el.find('.link');
	
	links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}
	
	Accordion.prototype.dropdown = function(e) {
	var $el = e.data.el;
	$this = $(this),
	$next = $this.next();
	
	$next.slideToggle();
	$this.parent().toggleClass('open');
	
	if (!e.data.multiple) {
	$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
	};
	}
	
	var accordion = new Accordion($('#accordion'), false);
	});

// LIGHT BOX
lightbox.option({
	'resizeDuration': 200,
	'wrapAround': true,
});


// request appointment
$(document).ready(function () {
	$('input[type=submit]').click(function () {
		$('input[type=submit]').toggleClass('red');	
	});
  });