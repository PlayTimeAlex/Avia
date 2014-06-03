<?php require_once 'blocks/header.php'; ?>   
        <section class="main-content main-content_bg">
            <div class="container clearfix">
                <div class="main-content__content main-content__content_s">
                    <div class="b-breadcrumb">
                        <ul class="b-breadcrumb__list">
                            <li class="b-breadcrumb__item"><a href="#" class="b-breadcrumb__link">Главная</a></li>
                            <li class="b-breadcrumb__item">Обратная связь</li>
                        </ul>
                    </div>
                    <div class="b-page">
                        <div class="container__inner">
                            <h2 class="b-page__title">Обратная связь</h2>
                            <div class="b-contacts clearfix">
                                <div class="b-contacts__left">
                                    <img class="b-contacts__logo" src="images/contacts-logo.png" alt="" />
                                    <p>2039 International Drive<br />Chicago, IL, 60656<br />United States of America</p>
                                </div>
                                <div class="b-contacts__right b-contacts__tel">
                                    <p>Телефон: +1 (414) 435-1122<br />Email: office@aviatrade.us</p>
                                </div>
                            </div>
                            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
                            <script type="text/javascript">
                                    function initialize() {
                                      var myLatlng = new google.maps.LatLng(41.907390, -88.256040);
                                      var mapOptions = {
                                        zoom: 16,
                                        scrollwheel: false,
                                        center: myLatlng
                                      };

                                      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                                      var contentString = '<div id="content">'+
                                          '<div id="bodyContent">'+
                                          '<p>2039 International Drive<br />Chicago, IL, 60656<br />United States of America</p>'+
                                          '</div>'+
                                          '</div>';

                                      var infowindow = new google.maps.InfoWindow({
                                          content: contentString
                                      });

                                      var marker = new google.maps.Marker({
                                          position: myLatlng,
                                          map: map,
                                          title: 'AviatradeUS'
                                      });
                                      google.maps.event.addListener(marker, 'click', function() {
                                        infowindow.open(map,marker);
                                      });
                                    }

                                    google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                            <div class="b-map" id="map-canvas">

                            </div>
                            <div class="b-form">
                                <form action="/">
                                    <h2 class="b-form__title">Напишите нам</h2>
                                    <div class="b-form__el row-fluid">
                                        <div class="span4"><input type="text" class="b-form__text b-form__text_icon" placeholder="Ваше имя:" /></div>
                                        <div class="span4"><input type="email" class="b-form__text b-form__text_icon icon2" placeholder="Ваш e-mail:" /></div>
                                        <div class="span4">                                
                                            <div class="b-form__countryTel">
                                                <select class="b-form__select">
                                                    <option value="">Страна</option>
                                                    <option value="">Украина</option>
                                                    <option value="">Россия</option>
                                                    <option value="">Туркменистан</option>
                                                    <option value="">Молдова</option>
                                                    <option value="">Казахстан</option>
                                                </select>
                                                <input type="tel" class="b-form__text input-num"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="b-form__el">
                                        <textarea class="b-form__textarea" placeholder="Сообщение:" rows="7"></textarea>
                                    </div>
                                    <div class="b-form__el">
                                        <button class="b-form__submit">Отправить сообщение</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="b-rsidebar">
                    <div class="widget">
                        <h2 class="widget__title widget__title_arrow">Новые Добавления</h2>
                        <div class="widget__cItem">
                            <div class="b-cItem__content b-cItem__content_circle clearfix">
                                <div class="b-cItem__contentPrev">
                                    <img class="b-cItem__contentPrevImg" src="images/content/plane1.jpg" alt="Cessna 340 RAM" />
                                </div>
                                <h2 class="b-cItem__title">Cessna 340 RAM</h2>
                                <div class="b-cItem__contentDesc">
                                    <table class="b-cItem__contentDescTbl">
                                        <tr>
                                            <td>Изготовитель:</td>
                                            <td>Cesna</td>
                                        </tr>
                                        <tr>
                                            <td>Модель:</td>
                                            <td>340 Ram</td>
                                        </tr>
                                        <tr>
                                            <td>Салон:</td>
                                            <td>Кожа</td>
                                        </tr>
                                        <tr>
                                            <td>Салон:</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Длина полосы:</td>
                                            <td>2300 м.</td>
                                        </tr>
                                        <tr>
                                            <td>Дальность полета:</td>
                                            <td>2300 км</td>
                                        </tr>
                                        <tr>
                                            <td>Цена:</td>
                                            <td>$24,000 - $34,000</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="b-cItem__contentBottom">
                                    <a href="#" class="b-cItem__btn">Связатся с агентом</a>
                                    <a href="#" class="b-cItem__btn b-cItem__btn_zak">Заказать запчасти</a>
                                    <a href="#" class="b-cItem__btn b-cItem__btn_full">Полная анкета</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget__cItem">
                            <div class="b-cItem__content b-cItem__content_circle clearfix">
                                <div class="b-cItem__contentPrev">
                                    <img class="b-cItem__contentPrevImg" src="images/content/plane1.jpg" alt="Cessna 340 RAM" />
                                </div>
                                <h2 class="b-cItem__title">Cessna 340 RAM</h2>
                                <div class="b-cItem__contentDesc">
                                    <table class="b-cItem__contentDescTbl">
                                        <tr>
                                            <td>Изготовитель:</td>
                                            <td>Cesna</td>
                                        </tr>
                                        <tr>
                                            <td>Модель:</td>
                                            <td>340 Ram</td>
                                        </tr>
                                        <tr>
                                            <td>Салон:</td>
                                            <td>Кожа</td>
                                        </tr>
                                        <tr>
                                            <td>Салон:</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>Длина полосы:</td>
                                            <td>2300 м.</td>
                                        </tr>
                                        <tr>
                                            <td>Дальность полета:</td>
                                            <td>2300 км</td>
                                        </tr>
                                        <tr>
                                            <td>Цена:</td>
                                            <td>$24,000 - $34,000</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="b-cItem__contentBottom">
                                    <a href="#" class="b-cItem__btn">Связатся с агентом</a>
                                    <a href="#" class="b-cItem__btn b-cItem__btn_zak">Заказать запчасти</a>
                                    <a href="#" class="b-cItem__btn b-cItem__btn_full">Полная анкета</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>                
            </div>
        </section>
<?php require_once 'blocks/footer.php'; ?>   