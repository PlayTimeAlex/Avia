(function($) {
    $(document).ready(function(){
        $('input, textarea').placeholder();
        
        $('.b-breadcrumb__print').click(function(){
            window.print();
            return false;
        });  
        $('input').styler();  
        setTimeout(function() {  
          $('.b-filter__multiple, .b-filter__select').styler();  
        }, 100);  
        function positionTop(elem){
            var footPos = $('.b-footer').offset();
            var elHeight = elem.outerHeight();
            var elPos = elem.offset();
            if((elPos.top+elHeight) >= (footPos.top-50)){
                elem.addClass('top').css({
                    'top': -elHeight
                });
            }
        }
        $('.b-aresults__item').hover(function(){
            var el = $('.b-cItem.b-cItem__aresults',this);
            el.css('display', 'block');
            positionTop(el);
            el.stop().animate({
                opacity: 1
            }, 300);
        }, function(){
            $('.b-cItem.b-cItem__aresults',this).stop().css('display', 'block').animate({
                opacity: 0
            }, 300, function(){
                $(this).css('display', 'none').removeClass('top');
            });
        });
        
        $('.open-popup').colorbox({
            inline:true,
            close: ""
        });
    });

    $(window).load(function() {
        $('.b-fullItem__carusel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 0,
            minItems: 4,
            maxItems: 4,
            prevText: "",
            nextText: "",
            asNavFor: '.b-fullItem__slider'
        });        
        
        $('.b-fullItem__slider').flexslider({
            controlNav: false,
            animationLoop: false,
            prevText: "",
            nextText: ""
        });
    });
}(jQuery));