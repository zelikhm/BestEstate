<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'
</script>

<template>

    <body>
    <div class="wrapper">

        <!-- header -->

        <Header></Header>

        <main class="page-home">

            <section class="hero">

                <div class="container">
                    <div class="slider-container">
                        <a href="#" class="location to-state" data-state="city">
                            <i class="icomoon icon-location"></i>
                            <span>Москва</span>
                        </a>
                        <!-- Swiper -->
                        <div class="swiper heroSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="heroSwiper-slide heroSwiper-slide-1">
                                        <div class="container--fluid">
                                            <h1 class="heading-1">Аренда недвижимости на&nbsp;В&nbsp;МОСКВЕ И СОЧИ</h1>
                                            <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                                порталах и маркетплейсах
                                                компании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="heroSwiper-slide heroSwiper-slide-2">
                                        <div class="container--fluid">
                                            <h1 class="heading-1">Аренда недвижимости В&nbsp;СОЧИ</h1>
                                            <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                                порталах и маркетплейсах
                                                компании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="heroSwiper-slide heroSwiper-slide-3">
                                        <div class="container--fluid">
                                            <h1 class="heading-1">Аренда недвижимости на&nbsp;В&nbsp;МОСКВЕ И СОЧИ</h1>
                                            <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                                порталах и маркетплейсах
                                                компании</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="heroSwiper-slide heroSwiper-slide-4">
                                        <div class="container--fluid">
                                            <h1 class="heading-1">Аренда недвижимости В&nbsp;СОЧИ</h1>
                                            <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                                порталах и маркетплейсах
                                                компании</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="container--fluid">
                        <div class="filter">
                            <ul class="filter-nav">
                                <li><a href="#" class="active">Купить</a></li>
                                <li><a href="#">Снять</a></li>
                                <li><a href="#">Посуточно</a></li>
                                <li><a href="#">VR</a></li>
                            </ul>
                            <div class="filter-row-3">
                                <div class="filter-col filter-col-2">
                                    <div class="select select-house">
                                        <select class="form-input select-default" name="house">
                                            <option value="">Квартиру</option>
                                            <option value="">Другое</option>
                                            <option value="">Другое другое</option>
                                            <option value="">Другое другое другое</option>
                                        </select>
                                    </div>
                                    <div class="filter-radio-group">
                                        <span class="filter-radio-group-title">Студия</span>
                                        <label for="1" class="filter-radio">
                                            <input type="radio" id="1" name="studia" class="filter-radio__input"
                                                   checked>
                                            <span>1</span>
                                        </label>
                                        <label for="2" class="filter-radio">
                                            <input type="radio" id="2" name="studia" class="filter-radio__input">
                                            <span>2</span>
                                        </label>
                                        <label for="3" class="filter-radio">
                                            <input type="radio" id="3" name="studia" class="filter-radio__input">
                                            <span>3</span>
                                        </label>
                                        <label for="4+" class="filter-radio">
                                            <input type="radio" id="4+" name="studia" class="filter-radio__input">
                                            <span>4+</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-col">
                                    <label for="" class="form-label form-label-range">
                                        <div class="form-range-group">
                                            от <input id="start" type="number" value=""> ₽
                                        </div>
                                        <span class="form-range-separator">–</span>
                                        <div class="form-range-group">
                                            до <input id="end" type="number" value=""> ₽
                                        </div>
                                    </label>
                                </div>
                                <div class="filter-col">
                                    <label for="" class="form-label form-label--location">
                                        <input type="text" name="" id="" class="form-input"
                                               placeholder="Город, адрес, район, ЖК">
                                    </label>
                                </div>
                            </div>
                            <div class="filter-btns">
                                <div class="filter-btns-left">
                                    <button class="filter-more">
                                        <i class="icomoon icon-filter"></i>
                                        Расширенный поиск
                                    </button>
                                </div>
                                <div class="filter-btns-right">
                                    <button class="btn-border btn-lg">
                                        <i class="icomoon icon-location-bold"></i>
                                        Смотреть на карте
                                    </button>
                                    <button class="btn btn-lg">
                                        Показать 100 объявлений
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <section class="special">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Спецпредложения</h2>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper specialSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="special-slide">
                                        <div class="special-slide-img">
                                            <div class="discount"><img src="img/special/discount.svg" alt=""><span>акция до 28 февраля</span>
                                            </div>
                                            <img src="img/special/special-slide-img1.jpg" alt="">
                                        </div>
                                        <div class="special-slide-content">
                                            <div class="special-slide-info">
                                                <h3 class="heading-3">ЖК “Прайм парк”</h3>
                                                <p class="text-2">Старта продаж новой башни</p>
                                            </div>
                                            <div class="special-slide-nav">
                                                <a href="#" class="btn btn-md">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i><span>Связаться</span>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="special-slide">
                                        <div class="special-slide-img">
                                            <div class="discount"><img src="img/special/discount.svg" alt=""><span>акция до 20 февраля</span>
                                            </div>
                                            <img src="img/special/special-slide-img2.jpg" alt="">
                                        </div>
                                        <div class="special-slide-content">
                                            <div class="special-slide-info">
                                                <h3 class="heading-3">ЖК “Жулебино-парк”</h3>
                                                <p class="text-2">Старта продаж новой башни уже этим летом</p>
                                            </div>
                                            <div class="special-slide-nav">
                                                <a href="#" class="btn btn-md">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i><span>Связаться</span>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="special-slide">
                                        <div class="special-slide-img">
                                            <div class="discount"><img src="img/special/discount.svg" alt=""><span>акция до 23 февраля</span>
                                            </div>
                                            <img src="img/special/special-slide-img3.jpg" alt="">
                                        </div>
                                        <div class="special-slide-content">
                                            <div class="special-slide-info">
                                                <h3 class="heading-3">ЖК “Восточный”</h3>
                                                <p class="text-2">Старта продаж новой башни</p>
                                            </div>
                                            <div class="special-slide-nav">
                                                <a href="#" class="btn btn-md">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i><span>Связаться</span>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="special-slide">
                                        <div class="special-slide-img">
                                            <div class="discount"><img src="img/special/discount.svg" alt=""><span>акция до 28 февраля</span>
                                            </div>
                                            <img src="img/special/special-slide-img1.jpg" alt="">
                                        </div>
                                        <div class="special-slide-content">
                                            <div class="special-slide-info">
                                                <h3 class="heading-3">ЖК “Прайм парк”</h3>
                                                <p class="text-2">Старта продаж новой башни</p>
                                            </div>
                                            <div class="special-slide-nav">
                                                <a href="#" class="btn btn-md">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i><span>Связаться</span>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="special-slide">
                                        <div class="special-slide-img">
                                            <div class="discount"><img src="img/special/discount.svg" alt=""><span>акция до 20 февраля</span>
                                            </div>
                                            <img src="img/special/special-slide-img2.jpg" alt="">
                                        </div>
                                        <div class="special-slide-content">
                                            <div class="special-slide-info">
                                                <h3 class="heading-3">ЖК “Жулебино-парк”</h3>
                                                <p class="text-2">Старта продаж новой башни уже этим летом</p>
                                            </div>
                                            <div class="special-slide-nav">
                                                <a href="#" class="btn btn-md">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i><span>Связаться</span>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="special-slide">
                                        <div class="special-slide-img">
                                            <div class="discount"><img src="img/special/discount.svg" alt=""><span>акция до 23 февраля</span>
                                            </div>
                                            <img src="img/special/special-slide-img3.jpg" alt="">
                                        </div>
                                        <div class="special-slide-content">
                                            <div class="special-slide-info">
                                                <h3 class="heading-3">ЖК “Восточный”</h3>
                                                <p class="text-2">Старта продаж новой башни</p>
                                            </div>
                                            <div class="special-slide-nav">
                                                <a href="#" class="btn btn-md">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i><span>Связаться</span>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-nav">
                            <div class="swiper-button-next specialSwiper-next"></div>
                            <div class="swiper-button-prev specialSwiper-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="services-bl">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Услуги компании</h2>
                    </div>
                    <!------ tabs ------>
                    <div id="tabs">
                        <!-- Кнопки -->
                        <ul class="tabs-nav">
                            <li><a href="#tab-1">Покупателю</a></li>
                            <li><a href="#tab-2">Арендатору</a></li>
                            <li><a href="#tab-3">Собственнику</a></li>
                            <li><a href="#tab-4">Инвестору</a></li>
                            <li><a href="#tab-5">Девелоперу</a></li>
                        </ul>
                        <!-- Контент -->
                        <div class="tabs-items">
                            <div class="tabs-item" id="tab-1">
                                <div class="tab-arendatoru">
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/01.svg" alt="">
                                            </div>
                                            <span>Представление интересов арендатора</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/02.svg" alt="">
                                            </div>
                                            <span>Консалтинг</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-row3">
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/03.svg" alt="">
                                                </div>
                                                <span>Управление недвижимостью</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/04.svg" alt="">
                                                </div>
                                                <span>Управление строительными проектами</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/05.svg" alt="">
                                                </div>
                                                <span>Оценка</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-2">
                                <div class="tab-arendatoru">
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/01.svg" alt="">
                                            </div>
                                            <span>Представление интересов арендатора</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/02.svg" alt="">
                                            </div>
                                            <span>Консалтинг</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-row3">
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/03.svg" alt="">
                                                </div>
                                                <span>Управление недвижимостью</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/04.svg" alt="">
                                                </div>
                                                <span>Управление строительными проектами</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/05.svg" alt="">
                                                </div>
                                                <span>Оценка</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-3">
                                <div class="tab-arendatoru">
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/01.svg" alt="">
                                            </div>
                                            <span>Представление интересов арендатора</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/02.svg" alt="">
                                            </div>
                                            <span>Консалтинг</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-row3">
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/03.svg" alt="">
                                                </div>
                                                <span>Управление недвижимостью</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/04.svg" alt="">
                                                </div>
                                                <span>Управление строительными проектами</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/05.svg" alt="">
                                                </div>
                                                <span>Оценка</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-4">
                                <div class="tab-arendatoru">
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/01.svg" alt="">
                                            </div>
                                            <span>Представление интересов арендатора</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/02.svg" alt="">
                                            </div>
                                            <span>Консалтинг</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-row3">
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/03.svg" alt="">
                                                </div>
                                                <span>Управление недвижимостью</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/04.svg" alt="">
                                                </div>
                                                <span>Управление строительными проектами</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/05.svg" alt="">
                                                </div>
                                                <span>Оценка</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-5">
                                <div class="tab-arendatoru">
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/01.svg" alt="">
                                            </div>
                                            <span>Представление интересов арендатора</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-column">
                                        <div class="tab-heading">
                                            <div class="tab-icon"><img src="img/services/arendatoru/02.svg" alt="">
                                            </div>
                                            <span>Консалтинг</span>
                                        </div>
                                        <ul>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                            <li>Подбор оптимального объекта в аренду</li>
                                            <li>Подбор объекта в аренду оптимального объекта в аренду</li>
                                        </ul>
                                    </div>
                                    <div class="tab-row3">
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/03.svg" alt="">
                                                </div>
                                                <span>Управление недвижимостью</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/04.svg" alt="">
                                                </div>
                                                <span>Управление строительными проектами</span>
                                            </div>
                                        </div>
                                        <div class="tab-column">
                                            <div class="tab-heading">
                                                <div class="tab-icon"><img src="img/services/arendatoru/05.svg" alt="">
                                                </div>
                                                <span>Оценка</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="jk-bl">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Жилые комплексы</h2>
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper jk-blSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="jk-bl-slide">
                                        <!-- Swiper -->
                                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper3.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                            </div>
                                            <div class="swiper-button-next--fluid"></div>
                                            <div class="swiper-button-prev--fluid"></div>
                                            <div class="swiper-pagination--fluid"></div>
                                        </div>
                                        <div class="jk-bl-slide-content">
                                            <div class="jk-bl-slide-info">
                                                <div class="jk-bl-slide-heading">
                                                    <h3 class="heading-3">Прайм парк</h3>
                                                    <button type="button" class="btn-icon"><i
                                                        class="icomoon icon-favourites"></i></button>
                                                </div>
                                                <p class="text-2">САО Хорошевский Ленинградский проспект, 37</p>
                                                <div class="way">
                                                    <div class="way-main">
                                                        <span class="circle"></span>
                                                        <span class="way-main-text">Аэропорт</span>
                                                    </div>
                                                    <div class="way-info">
                                                        <span class="circle"></span>
                                                        <img src="img/jk-bl/way.png" alt="">
                                                        <span class="way-info-text">12 м.</span>
                                                    </div>
                                                </div>
                                                <div class="builder">
                                                    <div class="builder-title">застройщик</div>
                                                    <div class="builder-info">
                                                        <div class="builder-name">Optima Development</div>
                                                        <div class="builder-status">дом сдан</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-specifications">
                                                <div class="row readmore">
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                                                        </div>
                                                        <div class="column-item">1 комната</div>
                                                        <div class="column-item">2 комнаты</div>
                                                        <div class="column-item">3 комнаты</div>
                                                        <div class="column-item">4 комнаты</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                                                       alt=""><span>площадь</span></div>
                                                        <div class="column-item">40–53 м²</div>
                                                        <div class="column-item">60–73 м²</div>
                                                        <div class="column-item">80–100 м²</div>
                                                        <div class="column-item">110–133 м²</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                                                       alt=""><span>стоимость</span>
                                                        </div>
                                                        <div class="column-item">20.5–30.2 млн</div>
                                                        <div class="column-item">29.5–34.2 млн</div>
                                                        <div class="column-item">34.5–43.2 млн</div>
                                                        <div class="column-item">50.5–78.2 млн</div>
                                                    </div>
                                                </div>
                                                <span class="read-more__link-wrap"><a href="#" class="read-more__link">Смотреть полностью...</a></span>
                                            </div>
                                            <div class="jk-bl-slide-nav">
                                                <a href="#" class="btn btn-lg">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="jk-bl-slide">
                                        <!-- Swiper -->
                                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper3.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                            </div>
                                            <div class="swiper-button-next--fluid"></div>
                                            <div class="swiper-button-prev--fluid"></div>
                                            <div class="swiper-pagination--fluid"></div>
                                        </div>
                                        <div class="jk-bl-slide-content">
                                            <div class="jk-bl-slide-info">
                                                <div class="jk-bl-slide-heading">
                                                    <h3 class="heading-3">Прайм парк</h3>
                                                    <button type="button" class="btn-icon"><i
                                                        class="icomoon icon-favourites"></i></button>
                                                </div>
                                                <p class="text-2">САО Хорошевский Ленинградский проспект, 37</p>
                                                <div class="builder">
                                                    <div class="builder-title">застройщик</div>
                                                    <div class="builder-info">
                                                        <div class="builder-name">Optima Development</div>
                                                        <div class="builder-status">дом сдан</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-specifications">
                                                <div class="row">
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                                                        </div>
                                                        <div class="column-item">1 комната</div>
                                                        <div class="column-item">2 комнаты</div>
                                                        <div class="column-item">3 комнаты</div>
                                                        <div class="column-item">4 комнаты</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                                                       alt=""><span>площадь</span></div>
                                                        <div class="column-item">40–53 м²</div>
                                                        <div class="column-item">60–73 м²</div>
                                                        <div class="column-item">80–100 м²</div>
                                                        <div class="column-item">110–133 м²</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                                                       alt=""><span>стоимость</span>
                                                        </div>
                                                        <div class="column-item">20.5–30.2 млн</div>
                                                        <div class="column-item">29.5–34.2 млн</div>
                                                        <div class="column-item">34.5–43.2 млн</div>
                                                        <div class="column-item">50.5–78.2 млн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-nav">
                                                <a href="#" class="btn btn-lg">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="jk-bl-slide">
                                        <!-- Swiper -->
                                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper3.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                            </div>
                                            <div class="swiper-button-next--fluid"></div>
                                            <div class="swiper-button-prev--fluid"></div>
                                            <div class="swiper-pagination--fluid"></div>
                                        </div>
                                        <div class="jk-bl-slide-content">
                                            <div class="jk-bl-slide-info">
                                                <div class="jk-bl-slide-heading">
                                                    <h3 class="heading-3">Прайм парк</h3>
                                                    <button type="button" class="btn-icon"><i
                                                        class="icomoon icon-favourites"></i></button>
                                                </div>
                                                <p class="text-2">САО Хорошевский Ленинградский проспект, 37</p>
                                                <div class="way">
                                                    <div class="way-main">
                                                        <span class="circle"></span>
                                                        <span class="way-main-text">Аэропорт</span>
                                                    </div>
                                                    <div class="way-info">
                                                        <span class="circle"></span>
                                                        <img src="img/jk-bl/way.png" alt="">
                                                        <span class="way-info-text">12 м.</span>
                                                    </div>
                                                </div>
                                                <div class="builder">
                                                    <div class="builder-title">застройщик</div>
                                                    <div class="builder-info">
                                                        <div class="builder-name">Optima Development</div>
                                                        <div class="builder-status">дом не сдан</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-specifications">
                                                <div class="row">
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                                                        </div>
                                                        <div class="column-item">1 комната</div>
                                                        <div class="column-item">2 комнаты</div>
                                                        <div class="column-item">3 комнаты</div>
                                                        <div class="column-item">4 комнаты</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                                                       alt=""><span>площадь</span></div>
                                                        <div class="column-item">40–53 м²</div>
                                                        <div class="column-item">60–73 м²</div>
                                                        <div class="column-item">80–100 м²</div>
                                                        <div class="column-item">110–133 м²</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                                                       alt=""><span>стоимость</span>
                                                        </div>
                                                        <div class="column-item">20.5–30.2 млн</div>
                                                        <div class="column-item">29.5–34.2 млн</div>
                                                        <div class="column-item">34.5–43.2 млн</div>
                                                        <div class="column-item">50.5–78.2 млн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-nav">
                                                <a href="#" class="btn btn-lg">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="jk-bl-slide">
                                        <!-- Swiper -->
                                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper3.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                            </div>
                                            <div class="swiper-button-next--fluid"></div>
                                            <div class="swiper-button-prev--fluid"></div>
                                            <div class="swiper-pagination--fluid"></div>
                                        </div>
                                        <div class="jk-bl-slide-content">
                                            <div class="jk-bl-slide-info">
                                                <div class="jk-bl-slide-heading">
                                                    <h3 class="heading-3">Прайм парк</h3>
                                                    <button type="button" class="btn-icon"><i
                                                        class="icomoon icon-favourites"></i></button>
                                                </div>
                                                <p class="text-2">САО Хорошевский Ленинградский проспект, 37</p>
                                                <div class="way">
                                                    <div class="way-main">
                                                        <span class="circle"></span>
                                                        <span class="way-main-text">Аэропорт</span>
                                                    </div>
                                                    <div class="way-info">
                                                        <span class="circle"></span>
                                                        <img src="img/jk-bl/way.png" alt="">
                                                        <span class="way-info-text">12 м.</span>
                                                    </div>
                                                </div>
                                                <div class="builder">
                                                    <div class="builder-title">застройщик</div>
                                                    <div class="builder-info">
                                                        <div class="builder-name">Optima Development</div>
                                                        <div class="builder-status">дом сдан</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-specifications">
                                                <div class="row readmore">
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                                                        </div>
                                                        <div class="column-item">1 комната</div>
                                                        <div class="column-item">2 комнаты</div>
                                                        <div class="column-item">3 комнаты</div>
                                                        <div class="column-item">4 комнаты</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                                                       alt=""><span>площадь</span></div>
                                                        <div class="column-item">40–53 м²</div>
                                                        <div class="column-item">60–73 м²</div>
                                                        <div class="column-item">80–100 м²</div>
                                                        <div class="column-item">110–133 м²</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                                                       alt=""><span>стоимость</span>
                                                        </div>
                                                        <div class="column-item">20.5–30.2 млн</div>
                                                        <div class="column-item">29.5–34.2 млн</div>
                                                        <div class="column-item">34.5–43.2 млн</div>
                                                        <div class="column-item">50.5–78.2 млн</div>
                                                    </div>
                                                </div>
                                                <span class="read-more__link-wrap"><a href="#" class="read-more__link">Смотреть полностью...</a></span>
                                            </div>
                                            <div class="jk-bl-slide-nav">
                                                <a href="#" class="btn btn-lg">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="jk-bl-slide">
                                        <!-- Swiper -->
                                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper3.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                            </div>
                                            <div class="swiper-button-next--fluid"></div>
                                            <div class="swiper-button-prev--fluid"></div>
                                            <div class="swiper-pagination--fluid"></div>
                                        </div>
                                        <div class="jk-bl-slide-content">
                                            <div class="jk-bl-slide-info">
                                                <div class="jk-bl-slide-heading">
                                                    <h3 class="heading-3">Прайм парк</h3>
                                                    <button type="button" class="btn-icon"><i
                                                        class="icomoon icon-favourites"></i></button>
                                                </div>
                                                <p class="text-2">САО Хорошевский Ленинградский проспект, 37</p>
                                                <div class="builder">
                                                    <div class="builder-title">застройщик</div>
                                                    <div class="builder-info">
                                                        <div class="builder-name">Optima Development</div>
                                                        <div class="builder-status">дом сдан</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-specifications">
                                                <div class="row">
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                                                        </div>
                                                        <div class="column-item">1 комната</div>
                                                        <div class="column-item">2 комнаты</div>
                                                        <div class="column-item">3 комнаты</div>
                                                        <div class="column-item">4 комнаты</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                                                       alt=""><span>площадь</span></div>
                                                        <div class="column-item">40–53 м²</div>
                                                        <div class="column-item">60–73 м²</div>
                                                        <div class="column-item">80–100 м²</div>
                                                        <div class="column-item">110–133 м²</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                                                       alt=""><span>стоимость</span>
                                                        </div>
                                                        <div class="column-item">20.5–30.2 млн</div>
                                                        <div class="column-item">29.5–34.2 млн</div>
                                                        <div class="column-item">34.5–43.2 млн</div>
                                                        <div class="column-item">50.5–78.2 млн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-nav">
                                                <a href="#" class="btn btn-lg">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="jk-bl-slide">
                                        <!-- Swiper -->
                                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper3.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper1.jpg"
                                                                               alt=""></div>
                                                <div class="swiper-slide"><img src="img/jk-bl/jkGallerySwiper2.jpg"
                                                                               alt=""></div>
                                            </div>
                                            <div class="swiper-button-next--fluid"></div>
                                            <div class="swiper-button-prev--fluid"></div>
                                            <div class="swiper-pagination--fluid"></div>
                                        </div>
                                        <div class="jk-bl-slide-content">
                                            <div class="jk-bl-slide-info">
                                                <div class="jk-bl-slide-heading">
                                                    <h3 class="heading-3">Прайм парк</h3>
                                                    <button type="button" class="btn-icon"><i
                                                        class="icomoon icon-favourites"></i></button>
                                                </div>
                                                <p class="text-2">САО Хорошевский Ленинградский проспект, 37</p>
                                                <div class="way">
                                                    <div class="way-main">
                                                        <span class="circle"></span>
                                                        <span class="way-main-text">Аэропорт</span>
                                                    </div>
                                                    <div class="way-info">
                                                        <span class="circle"></span>
                                                        <img src="img/jk-bl/way.png" alt="">
                                                        <span class="way-info-text">12 м.</span>
                                                    </div>
                                                </div>
                                                <div class="builder">
                                                    <div class="builder-title">застройщик</div>
                                                    <div class="builder-info">
                                                        <div class="builder-name">Optima Development</div>
                                                        <div class="builder-status">дом не сдан</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-specifications">
                                                <div class="row">
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                                                        </div>
                                                        <div class="column-item">1 комната</div>
                                                        <div class="column-item">2 комнаты</div>
                                                        <div class="column-item">3 комнаты</div>
                                                        <div class="column-item">4 комнаты</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                                                       alt=""><span>площадь</span></div>
                                                        <div class="column-item">40–53 м²</div>
                                                        <div class="column-item">60–73 м²</div>
                                                        <div class="column-item">80–100 м²</div>
                                                        <div class="column-item">110–133 м²</div>
                                                    </div>
                                                    <div class="column">
                                                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                                                       alt=""><span>стоимость</span>
                                                        </div>
                                                        <div class="column-item">20.5–30.2 млн</div>
                                                        <div class="column-item">29.5–34.2 млн</div>
                                                        <div class="column-item">34.5–43.2 млн</div>
                                                        <div class="column-item">50.5–78.2 млн</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jk-bl-slide-nav">
                                                <a href="#" class="btn btn-lg">Подробнее</a>
                                                <div class="btn-contacts">
                                                    <i class="icomoon icon-calling-bold"></i>
                                                    <div class="btn-contacts-list">
                                                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                                                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                                                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                                                        <a href="#"><img src="img/social/call.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-nav">
                            <div class="swiper-button-next jk-blSwiper-next"></div>
                            <div class="swiper-button-prev jk-blSwiper-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="kp-bl">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Коттеджные поселки</h2>
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                    <div class="kp-bl__cards">
                        <div class="kp-bl__cards-item">
                            <!-- Swiper -->
                            <div class="swiper gallerySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>
                                </div>
                                <div class="swiper-button-next--fluid"></div>
                                <div class="swiper-button-prev--fluid"></div>
                                <div class="swiper-pagination--fluid"></div>
                            </div>
                            <div class="kp-bl__cards-content">
                                <div class="kp-bl__cards-info">
                                    <div class="kp-bl__cards-heading">
                                        <h3 class="heading-3">КП “Новые вешки”</h3>
                                        <p class="text-2">Архангельская область, Архангельск, Октябрьский</p>
                                    </div>
                                    <div class="specifications-col">
                                        <div class="specifications-col-item"><img src="img/jk-bl/rooms.png"
                                                                                  alt=""><span>1–8 комнат</span></div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/square.png"
                                                                                  alt=""><span>от 224 до 411 м²</span>
                                        </div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kp-bl__cards-nav">
                                    <a href="#" class="btn btn-lg">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="kp-bl__cards-item">
                            <!-- Swiper -->
                            <div class="swiper gallerySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>
                                </div>
                                <div class="swiper-button-next--fluid"></div>
                                <div class="swiper-button-prev--fluid"></div>
                                <div class="swiper-pagination--fluid"></div>
                            </div>
                            <div class="kp-bl__cards-content">
                                <div class="kp-bl__cards-info">
                                    <div class="kp-bl__cards-heading">
                                        <h3 class="heading-3">КП “Петрово-дальнее”</h3>
                                        <p class="text-2">Архангельская область, Архангельск, Октябрьский</p>
                                    </div>
                                    <div class="specifications-col">
                                        <div class="specifications-col-item"><img src="img/jk-bl/rooms.png"
                                                                                  alt=""><span>1–8 комнат</span></div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/square.png"
                                                                                  alt=""><span>от 224 до 411 м²</span>
                                        </div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kp-bl__cards-nav">
                                    <a href="#" class="btn btn-lg">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="kp-bl__cards-item">
                            <!-- Swiper -->
                            <div class="swiper gallerySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>
                                </div>
                                <div class="swiper-button-next--fluid"></div>
                                <div class="swiper-button-prev--fluid"></div>
                                <div class="swiper-pagination--fluid"></div>
                            </div>
                            <div class="kp-bl__cards-content">
                                <div class="kp-bl__cards-info">
                                    <div class="kp-bl__cards-heading">
                                        <h3 class="heading-3">Ла–Манш</h3>
                                        <p class="text-2">Архангельская область, Архангельск, Октябрьский</p>
                                    </div>
                                    <div class="specifications-col">
                                        <div class="specifications-col-item"><img src="img/jk-bl/rooms.png"
                                                                                  alt=""><span>1–8 комнат</span></div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/square.png"
                                                                                  alt=""><span>от 224 до 411 м²</span>
                                        </div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kp-bl__cards-nav">
                                    <a href="#" class="btn btn-lg">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="kp-bl__cards-item">
                            <!-- Swiper -->
                            <div class="swiper gallerySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>
                                </div>
                                <div class="swiper-button-next--fluid"></div>
                                <div class="swiper-button-prev--fluid"></div>
                                <div class="swiper-pagination--fluid"></div>
                            </div>
                            <div class="kp-bl__cards-content">
                                <div class="kp-bl__cards-info">
                                    <div class="kp-bl__cards-heading">
                                        <h3 class="heading-3">Княжье озеро</h3>
                                        <p class="text-2">Архангельская область, Архангельск, Октябрьский</p>
                                    </div>
                                    <div class="specifications-col">
                                        <div class="specifications-col-item"><img src="img/jk-bl/rooms.png"
                                                                                  alt=""><span>1–8 комнат</span></div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/square.png"
                                                                                  alt=""><span>от 224 до 411 м²</span>
                                        </div>
                                        <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kp-bl__cards-nav">
                                    <a href="#" class="btn btn-lg">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-center">
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                </div>
            </section>

            <section class="offer">
                <div class="container">
                    <div class="offer-img">
                        <img src="img/offer/offer-img.jpg" alt="">
                    </div>
                </div>
            </section>

            <section class="cat-bl">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Виллы</h2>
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                    <div class="cat-bl__cards">
                        <div class="cat-bl__cards-item cat-bl__cards-item-1">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                        <div class="cat-bl__cards-item cat-bl__cards-item-2">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                        <div class="cat-bl__cards-item cat-bl__cards-item-1">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                        <div class="cat-bl__cards-item cat-bl__cards-item-2">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cat-bl">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Шале</h2>
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                    <div class="cat-bl__cards">
                        <div class="cat-bl__cards-item cat-bl__cards-item-1">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                        <div class="cat-bl__cards-item cat-bl__cards-item-2">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                        <div class="cat-bl__cards-item cat-bl__cards-item-1">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                        <div class="cat-bl__cards-item cat-bl__cards-item-2">
                            <div class="cat-bl__cards-info">
                                <div class="cat-bl__cards-heading">
                                    <h3 class="heading-3">Дом в Антибе, Франция</h3>
                                    <p class="text-2">Антиб, Круцио стрит, 32</p>
                                </div>
                                <div class="specifications">
                                    <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                                    </div>
                                    <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-bl__cards-nav">
                                <a href="#" class="btn btn-lg">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="kn-bl">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Коммерческая недвижимость</h2>
                    </div>
                    <div class="cards">
                        <div class="cards-item cards-item--kn">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="swiper gallerySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next--fluid"></div>
                                    <div class="swiper-button-prev--fluid"></div>
                                    <div class="swiper-pagination--fluid"></div>
                                </div>
                            </div>

                            <div class="cards-content">
                                <div class="cards-info">
                                    <div class="cards-info-wrapper">
                                        <div class="cards-info-main">
                                            <div class="cards-heading">
                                                <h3 class="heading-3">Коммерческая недвижимость в&nbsp;Зальцбурге</h3>
                                                <p class="text-3">Невероятный замок. Живописные виды и беличьи красоты
                                                    покоряют сердца даже самых холодных людей</p>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                    <!-- <div class="select-wallet-container">
                                                      <select class="select-wallet" name="wallet">
                                                        <option value="">₽</option>
                                                        <option value="">₽</option>
                                                        <option value="">₽</option>
                                                      </select>
                                                    </div> -->
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>

                                    <ul class="cards-specifications">
                                        <li>Площадь: 150 м²</li>
                                        <li>Вид на море/океан</li>
                                        <li>Бассейн</li>
                                        <li>Фитнес–центр</li>
                                        <li>Собственный пляж</li>
                                        <li>Продавец кто то там на английском</li>
                                    </ul>
                                </div>

                                <div class="cards-nav">
                                    <a href="#" class="btn-border btn-lg to-state" data-state="contacts"><i
                                        class="icomoon icon-calling-bold"></i><span>Показать контакты</span></a>
                                    <a href="#" class="btn-ic active"><i class="icomoon icon-favourites"></i></a>
                                    <a href="#" class="btn-ic"><i class="icomoon icon-location"></i></a>
                                    <a href="img/logo-black.png" download="filename" class="btn-ic"><i
                                        class="icomoon icon-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="cards-item cards-item--kn">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="swiper gallerySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt="">
                                        </div>
                                        <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next--fluid"></div>
                                    <div class="swiper-button-prev--fluid"></div>
                                    <div class="swiper-pagination--fluid"></div>
                                </div>
                            </div>

                            <div class="cards-content">
                                <div class="cards-info">
                                    <div class="cards-info-wrapper">
                                        <div class="cards-info-main">
                                            <div class="cards-heading">
                                                <h3 class="heading-3">Коммерческая недвижимость в&nbsp;Зальцбурге</h3>
                                                <p class="text-3">Невероятный замок. Живописные виды и беличьи красоты
                                                    покоряют сердца даже самых холодных людей</p>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                    <!-- <div class="select-wallet-container">
                                                      <select class="select-wallet" name="wallet">
                                                        <option value="">₽</option>
                                                        <option value="">₽</option>
                                                        <option value="">₽</option>
                                                      </select>
                                                    </div> -->
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>

                                    <ul class="cards-specifications">
                                        <li>Площадь: 150 м²</li>
                                        <li>Вид на море/океан</li>
                                        <li>Бассейн</li>
                                        <li>Фитнес–центр</li>
                                        <li>Собственный пляж</li>
                                        <li>Продавец кто то там на английском</li>
                                    </ul>
                                </div>

                                <div class="cards-nav">
                                    <a href="#" class="btn-border btn-lg to-state" data-state="contacts"><i
                                        class="icomoon icon-calling-bold"></i><span>Показать контакты</span></a>
                                    <a href="#" class="btn-ic"><i class="icomoon icon-favourites"></i></a>
                                    <a href="#" class="btn-ic"><i class="icomoon icon-location"></i></a>
                                    <a href="img/logo-black.png" download="filename" class="btn-ic"><i
                                        class="icomoon icon-download"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-center">
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                </div>
            </section>

            <section class="offer">
                <div class="container">
                    <div class="offer-img">
                        <img src="img/offer/offer-img.jpg" alt="">
                    </div>
                </div>
            </section>

            <section class="videos">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Видео–обзоры</h2>
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper videosSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a data-fancybox class="videosSwiper-slide"
                               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                                <div class="videosSwiper-slide-content">
                                    <h3 class="heading-3">Клубный дом “Река”</h3>
                                    <p class="text-3">19 июня 2021 год</p>
                                </div>
                                <div class="videosSwiper-slide-img">
                                    <img src="img/videos/video-1.jpg"/>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox class="videosSwiper-slide"
                               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                                <div class="videosSwiper-slide-content">
                                    <h3 class="heading-3">Клубный дом “Река”</h3>
                                    <p class="text-3">19 июня 2021 год</p>
                                </div>
                                <div class="videosSwiper-slide-img">
                                    <img src="img/videos/video-2.jpg"/>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox class="videosSwiper-slide"
                               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                                <div class="videosSwiper-slide-content">
                                    <h3 class="heading-3">Клубный дом “Река”</h3>
                                    <p class="text-3">19 июня 2021 год</p>
                                </div>
                                <div class="videosSwiper-slide-img">
                                    <img src="img/videos/video-3.jpg"/>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox class="videosSwiper-slide"
                               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                                <div class="videosSwiper-slide-content">
                                    <h3 class="heading-3">Клубный дом “Река”</h3>
                                    <p class="text-3">19 июня 2021 год</p>
                                </div>
                                <div class="videosSwiper-slide-img">
                                    <img src="img/videos/video-1.jpg"/>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox class="videosSwiper-slide"
                               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                                <div class="videosSwiper-slide-content">
                                    <h3 class="heading-3">Клубный дом “Река”</h3>
                                    <p class="text-3">19 июня 2021 год</p>
                                </div>
                                <div class="videosSwiper-slide-img">
                                    <img src="img/videos/video-2.jpg"/>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox class="videosSwiper-slide"
                               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                                <div class="videosSwiper-slide-content">
                                    <h3 class="heading-3">Клубный дом “Река”</h3>
                                    <p class="text-3">19 июня 2021 год</p>
                                </div>
                                <div class="videosSwiper-slide-img">
                                    <img src="img/videos/video-3.jpg"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="consult">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">Консультация эксперта</h2>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper consultSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="consult-slide">
                                        <div class="consult-slide-img">
                                            <img src="img/consult/consult-img.jpg" alt="">
                                        </div>
                                        <div class="consult-slide-content">
                                            <div class="consult-slide-info">
                                                <h3 class="heading-3">Андрей Черных</h3>
                                                <p class="text-2">Директор департмента подбора недвижимости в Москве и
                                                    Московской области</p>
                                            </div>
                                            <div class="quote">
                                                У нас есть опыт в подборе недвижимости уже более 20 лет и поэтому мы без
                                                труда сможем найти квартиру вашей мечты!
                                            </div>
                                            <form action="#" class="form">
                                                <div class="radiob-group">
                                                    <label class="radiob tg">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>telegram</span>
                                                    </label>
                                                    <label class="radiob wa">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>whats app</span>
                                                    </label>
                                                    <label class="radiob vb">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>viber</span>
                                                    </label>
                                                    <label class="radiob ph">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>звонок</span>
                                                    </label>
                                                </div>
                                                <label for="" class="form-label">
                                                    <input type="text" name="" id="" class="form-input form-input--big"
                                                           placeholder="Ваше имя">
                                                </label>
                                                <label for="" class="form-label">
                                                    <input type="number" name="" id=""
                                                           class="form-input form-input--big"
                                                           placeholder="Ваш номер телефона">
                                                </label>
                                                <button class="btn btn-xl">Отправить</button>
                                                <label for="" class="accept checkbox">
                                                    <input type="checkbox" id="">
                                                    <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                                </label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="consult-slide">
                                        <div class="consult-slide-img">
                                            <img src="img/consult/consult-img.jpg" alt="">
                                        </div>
                                        <div class="consult-slide-content">
                                            <div class="consult-slide-info">
                                                <h3 class="heading-3">Андрей Черных</h3>
                                                <p class="text-2">Директор департмента подбора недвижимости в Москве и
                                                    Московской области</p>
                                            </div>
                                            <div class="quote">
                                                У нас есть опыт в подборе недвижимости уже более 20 лет и поэтому мы без
                                                труда сможем найти квартиру вашей мечты!
                                            </div>
                                            <form action="#" class="form">
                                                <div class="radiob-group">
                                                    <label class="radiob tg">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>telegram</span>
                                                    </label>
                                                    <label class="radiob wa">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>whats app</span>
                                                    </label>
                                                    <label class="radiob vb">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>viber</span>
                                                    </label>
                                                    <label class="radiob ph">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>звонок</span>
                                                    </label>
                                                </div>
                                                <label for="" class="form-label">
                                                    <input type="text" name="" id="" class="form-input form-input--big"
                                                           placeholder="Ваше имя">
                                                </label>
                                                <label for="" class="form-label">
                                                    <input type="number" name="" id=""
                                                           class="form-input form-input--big"
                                                           placeholder="Ваш номер телефона">
                                                </label>
                                                <button class="btn btn-xl">Отправить</button>
                                                <label for="" class="accept checkbox">
                                                    <input type="checkbox" id="">
                                                    <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                                </label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="consult-slide">
                                        <div class="consult-slide-img">
                                            <img src="img/consult/consult-img.jpg" alt="">
                                        </div>
                                        <div class="consult-slide-content">
                                            <div class="consult-slide-info">
                                                <h3 class="heading-3">Андрей Черных</h3>
                                                <p class="text-2">Директор департмента подбора недвижимости в Москве и
                                                    Московской области</p>
                                            </div>
                                            <div class="quote">
                                                У нас есть опыт в подборе недвижимости уже более 20 лет и поэтому мы без
                                                труда сможем найти квартиру вашей мечты!
                                            </div>
                                            <form action="#" class="form">
                                                <div class="radiob-group">
                                                    <label class="radiob tg">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>telegram</span>
                                                    </label>
                                                    <label class="radiob wa">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>whats app</span>
                                                    </label>
                                                    <label class="radiob vb">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>viber</span>
                                                    </label>
                                                    <label class="radiob ph">
                                                        <input type="checkbox" id="" class="radiob__input">
                                                        <span>звонок</span>
                                                    </label>
                                                </div>
                                                <label for="" class="form-label">
                                                    <input type="text" name="" id="" class="form-input form-input--big"
                                                           placeholder="Ваше имя">
                                                </label>
                                                <label for="" class="form-label">
                                                    <input type="number" name="" id=""
                                                           class="form-input form-input--big"
                                                           placeholder="Ваш номер телефона">
                                                </label>
                                                <button class="btn btn-xl">Отправить</button>
                                                <label for="" class="accept checkbox">
                                                    <input type="checkbox" id="">
                                                    <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                                </label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-nav">
                            <div class="swiper-button-next consultSwiper-next"></div>
                            <div class="swiper-button-prev consultSwiper-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="partners">
                <div class="container--fluid">
                    <div class="heading-row">
                        <h2 class="heading-2">С кем мы работаем</h2>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container partnersSwiper-container">
                        <div class="swiper partnersSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/partners/ozon.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/mvideo.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/dns.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/ozon.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/mvideo.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/dns.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/ozon.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/mvideo.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/partners/dns.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-nav">
                            <div class="swiper-button-next partnersSwiper-next"></div>
                            <div class="swiper-pagination partnersSwiper-pagination"></div>
                            <div class="swiper-button-prev partnersSwiper-prev"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-bl">
                <div class="container--fluid">
                    <div class="heading">
                        <h2 class="heading-2">Агентство элитной недвижимости <span>Russia Best Real Estate</span></h2>
                        <div class="heading-text">услуги на рынке жилой и коммерческой недвижимости</div>
                    </div>
                    <div class="content-box">
                        <div class="content-box-column">
                            <p>
                                Простой способ совершить удачную сделку – выбрать агентство элитной недвижимости с
                                безупречной репутацией. На
                                официальном сайте компании Knight Frank содержится наиболее полная база элитной
                                недвижимости в Москве. Knight Frank
                                занимает лидерские позиции в РФ и на мировом рынке, обеспечивая безукоризненный сервис.
                            </p>
                            <p>
                                Международное предприятие Knight Frank появилось в Лондоне в 1896 году. За более чем
                                вековую историю компании удалось
                                стать лидером на рынке недвижимости.
                            </p>
                        </div>
                        <div class="content-box-column">
                            <p>
                                Сегодня Knight Frank – больше, чем риэлторское агентство. Это крупнейшая независимая
                                консалтинговая компания, которая
                                успешно предоставляет услуги в Европе, США, Канаде, Китае, Японии, Австралии, на Ближнем
                                Востоке и в других регионах
                                (всего более 500 офисов). В 1996 году открыто первое российское отделение. Сегодня в
                                столице и Санкт-Петербурге
                                действуют три офиса агентства – штат в общей сложности включает около 300
                                квалифицированных сотрудников.
                            </p>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="content-row-column">
                            <h3 class="heading-3">Какие услуги оказывает наше агентство?</h3>
                            <ul>
                                <li>Инвестиционная продажа жилья в столичном регионе и под Москвой. Мы предлагаем
                                    квартиры, пентхаусы и апартаменты в самых престижных районах столицы, а также
                                    большой выбор земельных участков и элитной загородной недвижимости.
                                </li>
                                <li>Продажа офисной, торговой и индустриальной недвижимости, включая логистические
                                    центры и складские терминалы.
                                </li>
                                <li>Консультации экспертов по профильным аспектам, в том числе юридические и налоговые
                                    вопросы.
                                </li>
                                <li>Оценка стоимости объектов и рекомендации по оптимизации сделки.</li>
                                <li>Полное сопровождение при покупке жилых или коммерческих объектов в Москве и
                                    Подмосковье.
                                </li>
                            </ul>
                        </div>
                        <div class="content-row-column">
                            <h3 class="heading-3">Почему мы?</h3>
                            <ul>
                                <li>Обширная база эксклюзивных предложений.</li>
                                <li>Лучшие консультанты во всех областях недвижимости</li>
                                <li>Собственный департамент аналитики</li>
                                <li>Прекрасное знание столичного рынка</li>
                                <li>Индивидуальный подход к каждому клиенту</li>
                                <li>Десятки профессиональных премий</li>
                            </ul>
                            <p>
                                С нашей помощью вы можете не только купить квартиру или объект под коммерческий проект
                                любой сложности, но и арендовать
                                недвижимость на длительный срок. К каждому клиенту прикрепляется персональный
                                консультант, который своевременно
                                предоставит всю необходимую информацию и поможет с выбором недвижимого имущества.
                            </p>
                            <p>
                                Если вы планируете купить или продать элитную недвижимость, свяжитесь с менеджером и
                                получите бесплатную консультацию по
                                телефону: +7 (495) 432-29-62
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <Footer></Footer>

        <!--------Modal-------->

        <div class="state contacts-state" data-state="contacts">
            <div class="state-box">
                <div class="state-heading">
                    <div class="heading-4">Контакты:</div>
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="contacts-state-group">
                    <a href="#" class="btn btn-md"><i
                        class="icomoon icon-calling-bold"></i><span>+7 (967) 064–32–24</span></a>
                    <a href="#" class="btn btn-md btn-tg">Написать в Telegram</a>
                    <a href="#" class="btn btn-md btn-wa">Написать в WhatsApp</a>
                    <a href="#" class="btn btn-md btn-vb">Написать в Viber</a>
                </div>
            </div>
        </div>

        <div class="state" data-state="login">
            <div class="state-box">
                <div class="state-heading">
                    <img src="img/modal-logo.svg" alt="">
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="heading-3">Авторизация</div>
                <form action="#" class="form">
                    <div class="form-group">
                        <span class="form-group-title">Логин</span>
                        <label for="" class="form-label">
                            <input type="text" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Пароль</span>
                        <label for="" class="form-label">
                            <input type="password" name="password" id="loginPasswordInput"
                                   class="form-input password-input" placeholder="">
                            <a href="#" class="password-control" id="loginPasswordControl"></a>
                        </label>
                        <a href="#" class="form-link">забыли пароль?</a>
                    </div>
                    <button type="submit" class="btn btn-lg">Войти в аккаунт</button>
                </form>
                <div class="form-other">
                    <div class="form-other-title">Войти в аккаунт через:</div>
                    <div class="form-other-btns">
                        <a href="#" class="form-other-btn">
                            <img src="img/modal/google.svg" alt="">
                            Google
                        </a>
                        <a href="#" class="form-other-btn">
                            <img src="img/modal/vk.svg" alt="">
                            Вконтакте
                        </a>
                    </div>
                    <div class="form-other-link">У вас нет аккаунта? <a href="#" class="to-state" data-state="sign-up">Зарегистрируйтесь</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="state" data-state="sign-up">
            <div class="state-box">
                <div class="state-heading">
                    <img src="img/modal-logo.svg" alt="">
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="heading-3">Регистрация аккаунта</div>
                <form action="#" class="form">
                    <div class="form-group">
                        <span class="form-group-title">Логин</span>
                        <label for="" class="form-label">
                            <input type="text" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Электронная почта</span>
                        <label for="" class="form-label">
                            <input type="email" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Пароль</span>
                        <label for="" class="form-label">
                            <input type="password" name="password" id="signPasswordInput"
                                   class="form-input password-input" placeholder="">
                            <a href="#" class="password-control" id="signPasswordControl"></a>
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Повторите пароль</span>
                        <label for="" class="form-label">
                            <input type="password" name="password" id="signVerifyPasswordInput"
                                   class="form-input password-input" placeholder="">
                            <a href="#" class="password-control" id="signVerifyPasswordControl"></a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg">Зарегистрироваться</button>
                </form>
                <div class="form-other">
                    <div class="form-other-link">Уже есть аккаунт? <a href="#" class="to-state"
                                                                      data-state="login">Войти</a></div>
                </div>
            </div>
        </div>

        <div class="state" data-state="connection">
            <div class="state-box">
                <div class="state-heading">
                    <img src="img/modal-logo.svg" alt="">
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="heading-3">Позвоните мне</div>
                <form action="#" class="form">
                    <div class="form-group">
                        <span class="form-group-title">Имя</span>
                        <label for="" class="form-label">
                            <input type="text" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Телефон</span>
                        <label for="" class="form-label">
                            <input type="number" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Электронная почта</span>
                        <label for="" class="form-label">
                            <input type="email" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Сообщение</span>
                        <label for="" class="form-label">
                            <textarea name="" id="" cols="30" rows="5" class="form-input"></textarea>
                        </label>
                    </div>
                    <label class="accept checkbox">
                        <input type="checkbox">
                        <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                    </label>
                    <button type="submit" class="btn btn-lg">Позвоните мне</button>
                </form>
            </div>
        </div>

        <div class="state city-state" data-state="city">
            <div class="state-box">
                <div class="state-heading">
                    <div class="heading-4">Выберите регион или город</div>
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="search-group">
                    <label class="form-label">
                        <input type="text" class="form-input" placeholder="Выберите регион или город">
                    </label>
                    <button type="submit" class="btn btn-lg">Выбрать</button>
                </div>
                <div class="city-switchers">
                    <div class="city-switchers__btns">
                        <button class="btn-border btn-sm">Москва</button>
                        <button class="btn-border btn-sm">Московская область</button>
                        <button class="btn-border btn-sm">Санкт-Петербург</button>
                        <button class="btn-border btn-sm">Ленинградская область</button>
                        <button class="btn-border btn-sm">Екатеринбург</button>
                        <button class="btn-border btn-sm">Краснодар</button>
                        <button class="btn-border btn-sm">Новосибирск</button>
                        <button class="btn-border btn-sm">Красноярск</button>
                    </div>
                    <ul class="city-switchers__list">
                        <li>
                            <button>Москва</button>
                        </li>
                        <li>
                            <button>Московская область</button>
                        </li>
                        <li>
                            <button>Санкт-Петербург</button>
                        </li>
                        <li>
                            <button>Ленинградская область</button>
                        </li>
                        <li>
                            <button>Екатеринбург</button>
                        </li>
                        <li>
                            <button>Краснодар</button>
                        </li>
                        <li>
                            <button>Новосибирск</button>
                        </li>
                        <li>
                            <button>Красноярск</button>
                        </li>
                        <li>
                            <button>Челябинск</button>
                        </li>
                        <li>
                            <button>Ростов-на-Дону</button>
                        </li>
                        <li>
                            <button>Тюмень</button>
                        </li>
                        <li>
                            <button>Уфа</button>
                        </li>
                        <li>
                            <button>Казань</button>
                        </li>
                        <li>
                            <button>Пермь</button>
                        </li>
                        <li>
                            <button>Нижний Новгород</button>
                        </li>
                        <li>
                            <button>Самара</button>
                        </li>
                        <li>
                            <button>Саратов</button>
                        </li>
                        <li>
                            <button>Омск</button>
                        </li>
                        <li>
                            <button>Балашиха</button>
                        </li>
                        <li>
                            <button>Волгоград</button>
                        </li>
                        <li>
                            <button>Воронеж</button>
                        </li>
                        <li>
                            <button>Иркутск</button>
                        </li>
                        <li>
                            <button>Хабаровск</button>
                        </li>
                        <li>
                            <button>Томск</button>
                        </li>
                        <li>
                            <button>Ярославль</button>
                        </li>
                        <li>
                            <button>Сочи</button>
                        </li>
                        <li>
                            <button>Сургут</button>
                        </li>
                        <li>
                            <button>Подольск</button>
                        </li>
                        <li>
                            <button>Мытищи</button>
                        </li>
                        <li>
                            <button>Владивосток</button>
                        </li>
                        <li>
                            <button>Калуга</button>
                        </li>
                        <li>
                            <button>Пятигорск</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Script-->
    <link href="css/fancybox.css" rel="stylesheet">


    </body>

</template>

<script>
    export default {
        props: ['page'],
        provide() {
            return {
                'page': this.page,
            }
        },
        created() {

        },
        name: "AppMain"
    }
</script>

<style scoped>

</style>
