$(function(){

	$('.site-share').click(function(){
		window.open($(this).attr('href'),'share','width=450,height=300,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');
		return false;
	});

	$('#bt-fechar-content').click(function(){
		$('#overlay-content').fadeOut(100,function(){
			$('.overlay').fadeOut(100);
		});
	});

	$('#bt-01').click(function(){
		$('#bt-01').hide(0);
		$('#close-01').show(0);
		$('#div-01').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-02').click(function(){
		$('#bt-02').hide(0);
		$('#close-02').show(0);
		$('#div-02').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});

	$('#bt-03').click(function(){
		$('#bt-03').hide(0);
		$('#close-03').show(0);
		$('#div-03').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-04').click(function(){
		$('#bt-04').hide(0);
		$('#close-04').show(0);
		$('#div-04').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-05').click(function(){
		$('#bt-05').hide(0);
		$('#close-05').show(0);
		$('#div-05').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});

	$('#bt-06').click(function(){
		$('#bt-06').hide(0);
		$('#close-06').show(0);
		$('#div-06').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-07').click(function(){
		$('#bt-07').hide(0);
		$('#close-07').show(0);
		$('#div-07').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-08').click(function(){
		$('#bt-08').hide(0);
		$('#close-08').show(0);
		$('#div-08').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-09').click(function(){
		$('#bt-09').hide(0);
		$('#close-09').show(0);
		$('#div-09').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#bt-10').click(function(){
		$('#bt-10').hide(0);
		$('#close-10').show(0);
		$('#div-10').slideDown(1000,'easeInOutCubic');
		$('#overlay-content').animate({scrollTop: $('.hold-table').offset().top},1000,'easeOutExpo');
	});
	
	$('#close-01').click(function(){
		$('#bt-01').show(0);
		$('#close-01').hide(0);
		$('#div-01').slideUp(600,'easeInOutCubic');
	});
	
	$('#close-02').click(function(){
		$('#bt-02').show(0);
		$('#close-02').hide(0);
		$('#div-02').slideUp(600,'easeInOutCubic');
	});

	$('#close-03').click(function(){
		$('#bt-03').show(0);
		$('#close-03').hide(0);
		$('#div-03').slideUp(600,'easeInOutCubic');
	});
	
	$('#close-04').click(function(){
		$('#bt-04').show(0);
		$('#close-04').hide(0);
		$('#div-04').slideUp(600,'easeInOutCubic');
	});
	
	$('#close-05').click(function(){
		$('#bt-05').show(0);
		$('#close-05').hide(0);
		$('#div-05').slideUp(600,'easeInOutCubic');
	});
	
	$('#close-06').click(function(){
		$('#bt-06').show(0);
		$('#close-06').hide(0);
		$('#div-06').slideUp(600,'easeInOutCubic');
	});

	$('#close-07').click(function(){
		$('#bt-07').show(0);
		$('#close-07').hide(0);
		$('#div-07').slideUp(600,'easeInOutCubic');
	});
	
	$('#close-08').click(function(){
		$('#bt-08').show(0);
		$('#close-08').hide(0);
		$('#div-08').slideUp(600,'easeInOutCubic');
	});
	
		$('#close-09').click(function(){
		$('#bt-09').show(0);
		$('#close-09').hide(0);
		$('#div-09').slideUp(600,'easeInOutCubic');
	});
	
	$('#close-10').click(function(){
		$('#bt-10').show(0);
		$('#close-10').hide(0);
		$('#div-10').slideUp(600,'easeInOutCubic');
	});

	$('.splash-close').click(function(){
		$('.splash').fadeOut(200);
	});
	
	$('.regulamento').click(function(){
		$('#gform_1').hide(0);
		$('.regulamento-txt').show(0);
	});
	
	$('.regulamento-close').click(function(){
		$('#gform_1').show(0);
		$('.regulamento-txt').hide(0);
	});

	// cursos
	
	$("ul.tabs li a").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).parent().addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("href").substr(1);
		$('.overlay').fadeIn(150,function(){
			$('#overlay-content').show();
			$('#'+activeTab).show(0);
		});
		return false;
	});
	
	
	// faq
	
	$("#accordion").accordion({
		header: "h3",
		autoHeight: false,
		navigation: true
	});
	
	// navigation
	
	var nav = $('#bar');
	var window_y = 0;
	var xxx = 810;
	var yyy = 150;	
	
	$(window).scroll(function(){
		window_y = $(window).scrollTop();
		// bar
		if (window_y >=0 && window_y <= yyy) {
			nav.fadeOut(300);
			$('#header .bt1').addClass('active');
		} else {
			nav.fadeIn(300);
			
		}
		$('#bar .mn li a').removeClass('active');
		// vestibular		
		if (window_y > 0 && window_y <= xxx) {
			$('#bar .bt1').addClass('active');
		}
		// ipanema
		if(window_y > xxx && window_y <= xxx + $('#ipanema').height()){
			$('#bar .bt2').addClass('active');
		}
		// cursos
		else if(window_y > xxx + $('#ipanema').height() && window_y <= xxx + $('#ipanema').height() + $('#cursos').height()){
			$('#bar .bt3').addClass('active');
		}
		// inscreva-se
		else if(window_y > xxx + $('#ipanema').height() + $('#cursos').height()  && window_y <= xxx + $('#ipanema').height() + $('#cursos').height() + $('#inscreva-se').height()) {
			$('#bar .bt4').addClass('active');
		}
		// indique
		else if(window_y > xxx + $('#ipanema').height() + $('#cursos').height() && window_y <= xxx + $('#ipanema').height() + $('#cursos').height() + $('#inscreva-se').height() + $('#indique').height()) {
			$('#bar .bt6').removeClass('active');
		}
		// estrutura
		else if(window_y > xxx + $('#ipanema').height() + $('#cursos').height() && window_y <= xxx + $('#ipanema').height() + $('#cursos').height() + $('#inscreva-se').height() + $('#indique').height() + $('#estrutura').height()) {
			$('#bar .bt6').addClass('active');
		}
		// duvidas
		else if(window_y > xxx + $('#ipanema').height() + $('#cursos').height() + $('#inscreva-se').height() + $('#estrutura').height() + $('#indique').height()) {
			$('#bar .bt5').addClass('active');
		}
	}).trigger('scroll');
	
});

// sammy.js

;(function($) {

	var app = $.sammy(function(){
		
		this.get('#!/', function(){
			$('html,body').animate({scrollTop: $('#wr').offset().top},1000,'easeOutExpo');
			$('#header .bt1').addClass('active');
		});
		
		this.get('#!/vestibular', function(){
			$('html,body').animate({scrollTop: $('#header').offset().top},1000,'easeOutExpo');
			$('#header .bt1').addClass('active');
		});
		
		this.get('#!/ipanema', function(){
			$('html,body').animate({scrollTop: $('#ipanema').offset().top},1000,'easeOutExpo');
			$('#bar .bt2').addClass('active');
			$('#bar .bt3').removeClass('active');
			$('#bar .bt4').removeClass('active');
			$('#bar .bt5').removeClass('active');
			$('#bar .bt6').removeClass('active');
		});
		
		this.get('#!/cursos', function(){
			$('html,body').animate({scrollTop: $('#cursos').offset().top},1000,'easeOutExpo');
			$('#bar .bt2').removeClass('active');
			$('#bar .bt3').addClass('active');
			$('#bar .bt4').removeClass('active');
			$('#bar .bt5').removeClass('active');
			$('#bar .bt6').removeClass('active');
		});
		
		this.get('#!/inscreva-se', function(){
			$('html,body').animate({scrollTop: $('#inscreva-se').offset().top},1000,'easeOutExpo');
			$('#bar .bt2').removeClass('active');
			$('#bar .bt3').removeClass('active');
			$('#bar .bt4').addClass('active');
			$('#bar .bt5').removeClass('active');
			$('#bar .bt6').removeClass('active');
		});
		
		this.get('#!/estrutura', function(){
			$('html,body').animate({scrollTop: $('#estrutura').offset().top},1000,'easeOutExpo');
			$('#bar .bt2').removeClass('active');
			$('#bar .bt3').removeClass('active');
			$('#bar .bt4').removeClass('active');
			$('#bar .bt5').removeClass('active');
			$('#bar .bt6').addClass('active');
		});
		
		this.get('#!/duvidas', function(){
			$('html,body').animate({scrollTop: $('#duvidas').offset().top},1000,'easeOutExpo');
			$('#bar .bt2').removeClass('active');
			$('#bar .bt3').removeClass('active');
			$('#bar .bt4').removeClass('active');
			$('#bar .bt5').addClass('active');
			$('#bar .bt6').removeClass('active');
		});

		this.get('#!/indique', function(){
			$('html,body').animate({scrollTop: $('#indique').offset().top},1000,'easeOutExpo');
			$('#bar .bt2').removeClass('active');
			$('#bar .bt3').removeClass('active');
			$('#bar .bt4').removeClass('active');
			$('#bar .bt5').removeClass('active');
			$('#bar .bt6').removeClass('active');
		});
		
	});
	$(function() {app.run()});
})(jQuery);