<?php require_once 'blocks/header.php'; ?>   
        <section class="main-content main-content_bg">
            <div class="container clearfix">
                <div class="main-content__content main-content__content_s">
                    <div class="b-breadcrumb">
                        <ul class="b-breadcrumb__list">
                            <li class="b-breadcrumb__item"><a href="#" class="b-breadcrumb__link">Главная</a></li>
                            <li class="b-breadcrumb__item">Мой заказ</li>
                        </ul>
                    </div>
                    <div class="b-page">
                        <div class="container__inner">
                            <h2 class="b-page__title">Мой заказ</h2>
                            <div class="b-text">
                                <p>Для просмотра статуса вашего заказа, укажите номер вашего контракта и пин код.</p>
                            </div>
                            <div class="b-formStatus">
                                <form action="/">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <input type="text" class="b-form__text b-form__text_icon icon4" placeholder="Контракт №:" />
                                        </div>
                                        <div class="span6">
                                            <input type="text" class="b-form__text b-form__text_icon icon5" placeholder="Пик код:" />
                                        </div>
                                    </div>
                                    <button class="b-form__submit b-form__submit_formStatus">Войти</button>
                                </form>
                            </div>
                            <!-- думаю что было бы хорошо чтобы появление ответа формы(тот что ниже)было с эфектом JQuery.slideDown*('fast'); -->
                            <div class="b-formStatus__result">
                                <span class="b-formStatus__resultIc"></span>
                                <strong>Ваш заказ не найден</strong>
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
                </aside>                
            </div>
        </section>
<?php require_once 'blocks/footer.php'; ?>   