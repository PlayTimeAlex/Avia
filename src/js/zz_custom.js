(function($) {
    $(document).ready(function(){
        $('input, textarea').placeholder();
        
        $('.b-breadcrumb__print').click(function(){
            window.print();
            return false;
        });  
        $('input').styler();  
        setTimeout(function() {  
          $('.b-filter__multiple, .b-filter__select, .b-form__select').styler({
              selectSearch: false,
          });  
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
        $('.colorbox').colorbox({
            className: 'photocolorbox',
            rel: 'gal-group',
            close: "",
            previous:" ",
            next:" ",
            current: "Изображение {current} из {total}"
        });
       $.datepicker.regional['ru'] = {
                closeText: 'Закрыть',
                prevText: '<Пред',
                nextText: 'След>',
                currentText: 'Сегодня',
                monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                'Июл','Авг','Сен','Окт','Ноя','Дек'],
                dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
                dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
                dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
                weekHeader: 'Не',
                dateFormat: 'dd.mm.yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);


        $.timepicker.regional['ru'] = {
                timeOnlyTitle: 'Выберите время',
                timeText: 'Время',
                hourText: 'Часы',
                minuteText: 'Минуты',
                secondText: 'Секунды',
                millisecText: 'Миллисекунды',
                timezoneText: 'Часовой пояс',
                currentText: 'Сейчас',
                closeText: 'Закрыть',
                timeFormat: 'HH:mm',
                amNames: ['AM', 'A'],
                pmNames: ['PM', 'P'],
                isRTL: false
        };
        $.timepicker.setDefaults($.timepicker.regional['ru']);        
        
        $('.b-form__datepicker').datepicker({

        });
        
        $('.b-form__timepicker').timepicker({
            hourGrid: 4,
            minuteGrid: 30,
            timeFormat: 'HH:mm',
            defaultValue: '09:00'
            //maxTime
            //minTime
        });
        
        $("body" ).on( "keydown", ".input-num", function(event) {
            if ( $.inArray(event.keyCode,[46,8,9,27,13]) !== -1 ||
                (event.keyCode == 65 && event.ctrlKey === true) || 
                (event.keyCode >= 35 && event.keyCode <= 39)) {
                return;
            } else {
                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                    event.preventDefault(); 
                }   
            }
        });  
        
        //Скрол к результатам поиска
        /*if(Если уже результаты поиска){
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: $("#b-catalog").offset().top
                }, 200);
            }, 100);
        }*/
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