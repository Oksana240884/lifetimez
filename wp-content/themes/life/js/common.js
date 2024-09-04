$(function() {
	var menu_selector = ".j-menu";
	var menu = $('.j-header').outerHeight();

	$('.home [data-scroll]').on('click', function(e) {
		e.preventDefault();

		var href = $(this).attr('href');
		var hrefEnd = href.split('#');

		$('body, html').animate({
			scrollTop: $('#'+hrefEnd[1]).offset().top - 70,
		});
	});

	function onScroll(){
	    var scroll_top = $(document).scrollTop();
	    
	   $('.home .j-menu a[data-scroll]').each(function(){
	    	var _this = $(this);
	        var hash = _this.attr('href');
	        var hrefEnd = hash.split('#');
	        var target = $('#'+hrefEnd[1]);

	        if(hrefEnd[1] == 'services') { 
		        if (Number(target.position().top - menu - 50) <= scroll_top && 
		        	target.position().top + target.outerHeight()  > scroll_top) {
		            
		            $('.home .j-menu a').removeClass("current");

		            _this.addClass("current");
		            	
	        		var currentW = _this.width(),
	            		position = _this.position().left;

					tire.css('width', currentW);
					tire.css('left', position);
		        } else {
		            $(this).removeClass("current");
		        }
		    } else {
		    	$('.home .j-menu a').removeClass("current");

		    	$('[data-scroll=home]').addClass('current');

		    	var currentW = _this.width(),
            		position = _this.position().left;

				tire.css('width', currentW);
				tire.css('left', position);
		    }
	    });
	}
	$(document).on("scroll", onScroll);

	var li = $('.j-menu > li'),
		tire = $('.tire'),
		currentW = $('.j-menu a.current').width();
		position = $('.j-menu a.current').position().left;

	$(document).ready(function() {
		tire.css('width', currentW);
		tire.css('left', position);
	});

	li.on('mouseover', function() {
		var currentW = $(this).find('> a').width(),
			position = $(this).find('> a').position().left;

		tire.css('width', currentW);
		tire.css('left', position);
	});

	li.on('mouseout', function() {
		var currentW = $('.j-menu > li > a.current').width(),
			position = $('.j-menu > li > a.current').position().left;

		tire.css('width', currentW);
		tire.css('left', position);
	});
});

$('.j-tab a').on('click', function(e) {
	e.preventDefault();

	var _this = $(this);
	var id = _this.attr('href');

	$('.j-tab a').removeClass('active')
	$('.services__wrap-tab').hide();
	_this.addClass('active');
	$(id).fadeIn();
});

function headerFixed() {
	if($(window).scrollTop() > 0) {
		$('.j-header').addClass('fixed');
	} else {
		$('.j-header').removeClass('fixed');
	}
};

$(document).ready(function() {
	headerFixed();

	$('.j-phone').mask('+38(000) 000-00-00');
});

$(document).scroll(function() {
	headerFixed();
});


$('.j-toggle').on('click', function() {
	$(this).toggleClass('active');
	$('.j-mobile').slideToggle();
});

$('.j-slider').slick({
	slidesToShow: 3,
	slidesToScroll: 3,
	prevArrow: '<button type="button" class="arrow prev"><span></span></button>',
	nextArrow: '<button type="button" class="arrow next"><span></span></button>',
	 responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
  ]
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
	$.fancybox.close();
    $.fancybox.open({
		src  : '#ok',
		type : 'inline',
	});
}, false );


$(function(){
	$('.j-more').click(function(){
		var _this = $(this);
		_this.text('Загружаю...');// изменяем текст кнопки, вы также можете добавить прелоадер

		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					_this.text('Загрузить ещё').closest('.loadmore').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) _this.remove(); // если последняя страница, удаляем кнопку
				} else {
					_this.remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});

$(function(){
	$('.j-more2').click(function(){
		var _this = $(this);
		_this.text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер

		var data = {
			'action': 'loadmore',
			'query': true_posts2,
			'page' : current_page2
		};
		$.ajax({
			url:ajaxurl2, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					_this.text('Загрузить ещё').closest('.loadmore').before(data); // вставляем новые посты
					current_page2++; // увеличиваем номер страницы на единицу
					if (current_page2 == max_pages2) _this.remove(); // если последняя страница, удаляем кнопку
				} else {
					_this.remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});


$('.j-text-more-btn').on('click', function() {
	$(this).siblings('.j-text-more').find('.down').slideToggle();

	$(this).remove();

});

function eachWow(class_my) {
	$(class_my).each(function(index) {
		var _this = $(this);

		if(index == 0 || index == 3) {
			_this.addClass('wow fadeInLeft')
		}
		if(index == 1 || index == 4) {
			_this.addClass('wow fadeInUp')
		}
		if(index == 2 || index == 5) {
			_this.addClass('wow fadeInRight')
		}
	});
}
eachWow('.services__item');
eachWow('.j-why-item');
eachWow('.etap__item')
 new WOW().init(); 