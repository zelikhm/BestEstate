<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header></Header>

        <main class="page-catalog">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <a href="index.html">Главная</a>
                    <span>Каталог</span>
                </nav>
            </div>

            <section class="catalog">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Каталог недвижимости</h1>
                    </div>
                    <div class="filter" v-bind:class="{ 'filter-open': show }" id="filterTabs">
                        <!-- Кнопки -->
                        <ul class="filter-nav">
                            <li><a href="#tab-111">Купить</a></li>
                            <li><a href="#tab-222">Снять</a></li>
                            <li><a href="#tab-333">Посуточно</a></li>
                            <li><a href="#tab-444">VR</a></li>
                        </ul>
                        <!-- Контент -->
                        <div class="tabs-items">
                            <div class="tabs-item" id="tab-111">
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
                                        <div for="" class="form-label form-label-range">
                                            <label class="form-range-group">
                                                от <input id="start" type="number" value=""> ₽
                                            </label>
                                            <span class="form-range-separator">–</span>
                                            <label class="form-range-group">
                                                до <input id="end" type="number" value=""> ₽
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="filter-col">
                                      <label for="" class="form-label form-label-range">
                                        <div class="form-range-group">
                                          от <input id="start" type="number" value=""> ₽
                                        </div>
                                        <span class="form-range-separator">–</span>
                                        <div class="form-range-group">
                                          до <input id="end" type="number" value=""> ₽
                                        </div>
                                      </label>
                                    </div> -->
                                    <div class="filter-col">
                                        <label for="" class="form-label form-label--location">
                                            <input type="text" name="" id="" class="form-input"
                                                   placeholder="Город, адрес, район, ЖК">
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-hide" v-show="show">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input id="" type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input id="" type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Площадь кухни:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input id="" type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input id="" type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Жилая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input id="" type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input id="" type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="filter-row-flex">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Срок аренды</div>
                                            <div class="radio-group">
                                                <label for="time1" class="radio">
                                                    <input type="radio" id="time1" name="time" class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="time2" class="radio">
                                                    <input type="radio" id="time2" name="time" class="radio__input">
                                                    <span>От года</span>
                                                </label>
                                                <label for="time3" class="radio">
                                                    <input type="radio" id="time3" name="time" class="radio__input">
                                                    <span>На несколько месяцев</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">До метро</div>
                                            <div class="radio-group">
                                                <label for="metro1" class="radio">
                                                    <input type="radio" id="metro1" name="metro" class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="metro2" class="radio">
                                                    <input type="radio" id="metro2" name="metro" class="radio__input">
                                                    <span>Пешком</span>
                                                </label>
                                                <label for="metro3" class="radio">
                                                    <input type="radio" id="metro3" name="metro" class="radio__input">
                                                    <span>Транспорт</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Дом</div>
                                            <div class="radio-group">
                                                <label for="dom1" class="radio">
                                                    <input type="radio" id="dom1" name="dom" class="radio__input">
                                                    <span>Вторичка</span>
                                                </label>
                                                <label for="dom2" class="radio">
                                                    <input type="radio" id="dom2" name="dom" class="radio__input">
                                                    <span>Новостройки</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-row-flex">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Удобства</div>
                                            <div class="checkbox-group">
                                                <label for="udobstva1" class="checkbox">
                                                    <input type="checkbox" id="udobstva1">
                                                    <span>Кондиционер</span>
                                                </label>
                                                <label for="udobstva2" class="checkbox">
                                                    <input type="checkbox" id="udobstva2">
                                                    <span>Микроволновка</span>
                                                </label>
                                                <label for="udobstva3" class="checkbox">
                                                    <input type="checkbox" id="udobstva3">
                                                    <span>Балкон/лоджия</span>
                                                </label>
                                                <label for="udobstva4" class="checkbox">
                                                    <input type="checkbox" id="udobstva4">
                                                    <span>Ремонт</span>
                                                </label>
                                                <label for="udobstva5" class="checkbox">
                                                    <input type="checkbox" id="udobstva5">
                                                    <span>Стиральная машина</span>
                                                </label>
                                                <label for="udobstva6" class="checkbox">
                                                    <input type="checkbox" id="udobstva6">
                                                    <span>Пылесос</span>
                                                </label>
                                                <label for="udobstva7" class="checkbox">
                                                    <input type="checkbox" id="udobstva7">
                                                    <span>Кухонная плита</span>
                                                </label>
                                                <label for="udobstva8" class="checkbox">
                                                    <input type="checkbox" id="udobstva8">
                                                    <span>Кондиционер</span>
                                                </label>
                                                <label for="udobstva9" class="checkbox">
                                                    <input type="checkbox" id="udobstva9">
                                                    <span>Микроволновка</span>
                                                </label>
                                                <label for="udobstva10" class="checkbox">
                                                    <input type="checkbox" id="udobstva10">
                                                    <span>Балкон/лоджия</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-row-flex">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Условия проживания</div>
                                            <div class="radio-group">
                                                <label for="uslovia1" class="radio">
                                                    <input type="radio" id="uslovia1" name="uslovia"
                                                           class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="uslovia2" class="radio">
                                                    <input type="radio" id="uslovia2" name="uslovia"
                                                           class="radio__input">
                                                    <span>Можно с детьми</span>
                                                </label>
                                                <label for="uslovia3" class="radio">
                                                    <input type="radio" id="uslovia3" name="uslovia"
                                                           class="radio__input">
                                                    <span>Можно с животными</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Планировка</div>
                                            <div class="radio-group">
                                                <label for="planirovka1" class="radio">
                                                    <input type="radio" id="planirovka1" name="planirovka"
                                                           class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="planirovka2" class="radio">
                                                    <input type="radio" id="planirovka2" name="planirovka"
                                                           class="radio__input">
                                                    <span>Смежная</span>
                                                </label>
                                                <label for="planirovka3" class="radio">
                                                    <input type="radio" id="planirovka3" name="planirovka"
                                                           class="radio__input">
                                                    <span>Изолированная</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Апартаменты</div>
                                            <div class="radio-group">
                                                <label for="apart1" class="radio">
                                                    <input type="radio" id="apart1" name="apart" class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="apart2" class="radio">
                                                    <input type="radio" id="apart2" name="apart" class="radio__input">
                                                    <span>Без апартаментов</span>
                                                </label>
                                                <label for="apart3" class="radio">
                                                    <input type="radio" id="apart3" name="apart" class="radio__input">
                                                    <span>Только апартаменты</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-222">
                                <div class="filter-row-3">
                                    <div class="filter-col">
                                        <label for="" class="form-label form-label--location">
                                            <input type="text" name="" class="form-input"
                                                   placeholder="Город, адрес, район, ЖК">
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-hide" style="display: none;">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-333">
                                <div class="filter-row-3">
                                    <div class="filter-col">
                                        <label for="" class="form-label form-label--location">
                                            <input type="text" name="" class="form-input"
                                                   placeholder="Город, адрес, район, ЖК">
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-hide" style="display: none;">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-444">
                                <div class="filter-row-3">
                                    <div class="filter-col">
                                        <label for="" class="form-label form-label--location">
                                            <input type="text" name="" class="form-input"
                                                   placeholder="Город, адрес, район, ЖК">
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-hide" style="display: none;">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-btns">
                            <div class="filter-btns-left">
                                <button class="filter-more filter-toggle" v-bind:class="{ 'filter-close': show }"
                                        v-on:click="show === false ? show = true : show = false">
                                    <div v-if="show === false" style="display: inline-flex; align-items: center">
                                        <i class="icomoon icon-filter"></i><span>Расширенный поиск</span>
                                    </div>
                                    <div v-else style="display: inline-flex; align-items: center">
                                        <span>Свернуть</span><i class="icomoon icon-chevron-up"></i>
                                    </div>

                                </button>
                                <button class="filter-reset">
                                    Сбросить всё
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
                    <div class="catalog-select">
                        <select class="form-input select-sort" name="sort">
                            <option value="">По умолчанию</option>
                            <option value="">По цене (сначала дешевле)</option>
                            <option value="">По цене (сначала дороже)</option>
                            <option value="">По общей площади</option>
                            <option value="">По дате добавления (сначала старые)</option>
                            <option value="">По дате добавления (сначала новые)</option>
                        </select>
                    </div>
                    <div class="cards catalog-cards">
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="offer">
                            <div class="offer-img">
                                <img src="img/offer/offer-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="offer">
                            <div class="offer-img">
                                <img src="img/offer/offer-img.jpg" alt="">
                            </div>
                        </div>
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="cards-item">
                            <!-- Swiper -->
                            <div class="cards-slider">
                                <div class="btns-group">
                                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                                   alt=""><span>3D-просмотр</span></a>
                                </div>
                                <span class="gallery-value">+12</span>
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
                                                <h3 class="heading-3">3-к, Логинова, 19</h3>
                                                <ul class="cards-specifications">
                                                    <li>Площадь: 150 м²</li>
                                                    <li>Этаж: 2 из 19</li>
                                                </ul>
                                            </div>
                                            <div class="builder">
                                                <div class="builder-title">Москва</div>
                                                <div class="builder-info">
                                                    <a href="#" class="builder-name">ЖК Optima Development</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cards-info-second">
                                            <div class="cards-price">
                                                <div class="cards-price-wrapper">
                                                    <div class="cards-price-main">19 800 000 ₽</div>
                                                </div>
                                                <div class="cards-price-second">360 161 ₽/м2</div>
                                            </div>
                                            <div class="cards-date">Добавлено: 15.03.22</div>
                                            <div class="cards-views">119 просмотров</div>
                                        </div>
                                    </div>
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
                        <div class="pagination">
                            <div class="pagination-text">Вы посмотрели 20 из 234 квартир</div>
                            <div class="nav-links">
                                <a href="#" class="prev icomoon icon-chevron-left disabled"></a>
                                <span class="page-numbers current">1</span>
                                <a href="#" class="page-numbers">2</a>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="page-numbers">4</a>
                                <a href="#" class="page-numbers">5</a>
                                <a href="#" class="page-numbers">6</a>
                                <a href="#" class="page-numbers">7</a>
                                <a href="#" class="next icomoon icon-chevron-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="request">
                <div class="container">
                    <div class="request-wrapper">
                        <div class="heading">
                            <h3 class="heading-3">Не можете найти подходящий вариант?</h3>
                            <p class="text-2">Мы сможем вам почоь! Оставьте свои контактные данные и с Вами свяжется наш
                                риэлтор.</p>
                        </div>
                        <form action="#" class="form">
                            <label for="" class="form-label">
                                <input type="number" name="" id="" class="form-input form-input--big"
                                       placeholder="Ваш номер телефона">
                            </label>
                            <div class="col">
                                <button class="btn btn-xl">Оставить заявку</button>
                                <label for="" class="accept checkbox">
                                    <input type="checkbox" id="">
                                    <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                </label>
                            </div>
                        </form>
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

    </div>
    </body>
</template>

<script>
    export default {
        name: "AppCatalog",
        props: ['page'],
        provide() {
            return {
                'page': this.page,
            }
        },
        data() {
            return {
                show: false,
            }
        }
    }
</script>

<style scoped>
</style>
