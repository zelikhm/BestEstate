<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";

</script>


<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false"
                           @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>


        <main class="page-about">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <span>О компании</span>
                </nav>
            </div>

            <div class="container">
                <!-- Карточки ЖК -->
                <div class="jk-bl__cards">
                    <div class="jk-bl-slide">
                        <div class="jk-bl-slide-content">
                            <div class="jk-bl-slide-info">
                            <div class="jk-bl-slide-heading">
                                <h3 class="heading-3">Прайм парк</h3>
                                <button type="button" class="btn-icon"><i class="icomoon icon-favourites"></i></button>
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
                                <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span></div>
                                <div class="column-item">1 комната</div>
                                <div class="column-item">2 комнаты</div>
                                <div class="column-item">3 комнаты</div>
                                <div class="column-item">4 комнаты</div>
                                </div>
                                <div class="column">
                                <div class="column-title"><img src="img/jk-bl/square.png" alt=""><span>площадь</span></div>
                                <div class="column-item">40–53 м²</div>
                                <div class="column-item">60–73 м²</div>
                                <div class="column-item">80–100 м²</div>
                                <div class="column-item">110–133 м²</div>
                                </div>
                                <div class="column">
                                <div class="column-title"><img src="img/jk-bl/cost.png" alt=""><span>стоимость</span></div>
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
                    <div class="jk-bl-slide">
                        <div class="jk-bl-slide-content">
                            <div class="jk-bl-slide-info">
                            <div class="jk-bl-slide-heading">
                                <h3 class="heading-3">Прайм парк</h3>
                                <button type="button" class="btn-icon"><i class="icomoon icon-favourites"></i></button>
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
                                <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span></div>
                                <div class="column-item">1 комната</div>
                                <div class="column-item">2 комнаты</div>
                                <div class="column-item">3 комнаты</div>
                                <div class="column-item">4 комнаты</div>
                                </div>
                                <div class="column">
                                <div class="column-title"><img src="img/jk-bl/square.png" alt=""><span>площадь</span></div>
                                <div class="column-item">40–53 м²</div>
                                <div class="column-item">60–73 м²</div>
                                <div class="column-item">80–100 м²</div>
                                <div class="column-item">110–133 м²</div>
                                </div>
                                <div class="column">
                                <div class="column-title"><img src="img/jk-bl/cost.png" alt=""><span>стоимость</span></div>
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

                <!-- Карточки КП -->
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
                            <div class="specifications-col-item"><img src="img/jk-bl/rooms.png" alt=""><span>1–8 комнат</span></div>
                            <div class="specifications-col-item"><img src="img/jk-bl/square.png" alt=""><span>от 224 до 411 м²</span></div>
                            <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span></div>
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
                            <div class="specifications-col-item"><img src="img/jk-bl/rooms.png" alt=""><span>1–8 комнат</span></div>
                            <div class="specifications-col-item"><img src="img/jk-bl/square.png" alt=""><span>от 224 до 411 м²</span></div>
                            <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span></div>
                            </div>
                        </div>
                        <div class="kp-bl__cards-nav">
                            <a href="#" class="btn btn-lg">Подробнее</a>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <section class="about">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">О компании <span>Russia Best Real Estate</span></h1>
                        <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических порталах и
                            маркетплейсах компании</p>
                    </div>
                    <div class="about-content">
                        <h2 class="heading-2">Агентство недвижимости</h2>
                        <p>
                            Агентство недвижимости Russia Best Estate предоставляет услуги с 2010 года по покупке,
                            продаже, сдаче в аренду
                            недвижимости в России. Нашими Клиентами являются физические и юридические лица, а также VR
                            World NFT. Мы познакомим вас
                            с новым форматом недвижимости 3D туры прямо из вашего устройства.
                        </p>
                        <p>
                            Агентство недвижимости "RBE" оказывает услуги на рынке недвижимости во всех сегментах
                            городской, загородной,
                            коммерческой и элитной недвижимости.
                        </p>
                        <p>
                            Мы готовы помочь Вам купить, продать, обменять недвижимость, оформить права собственности с
                            выгодой и комфортом для Вас.
                            Наши сотрудники проконсультируют Вас как правильно сдать и снять квартиру, коммерческую или
                            загородную недвижимость,
                            помогут разобраться в сложных ситуациях.
                        </p>
                        <p>
                            Агентство недвижимости "Russia Best Estate"осуществляет сопровождение и реализацию проектов
                            коммерческой и жилой
                            недвижимости, в том числе трудноразрешимых. Комплекс услуг включает экспертизу документов,
                            регистрацию земельных
                            правоотношений. <br>
                            Основными принципами в работе являются индивидуальный подход, забота об интересах клиента,
                            доверительность и
                            прозрачность отношений. Привлекая агентство недвижимости для решения задач, Вы получаете
                            гарантию полной
                            конфиденциальности используемой информации.
                        </p>
                    </div>
                    <div class="about-services">
                        <h2 class="heading-2">Наши услуги</h2>
                        <ul class="about-services__cards">
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/01.svg" alt=""></div>
                                <p class="about-services__title">Покупка и продажа недвижимости в&nbsp;Москве</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/02.svg" alt=""></div>
                                <p class="about-services__title">Жилищная ипотека</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/03.svg" alt=""></div>
                                <p class="about-services__title">Обмен и расселение квартир</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/04.svg" alt=""></div>
                                <p class="about-services__title">Срочный выкуп объектов недвижимости</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/05.svg" alt=""></div>
                                <p class="about-services__title">Документальное оформление сделок</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/06.svg" alt=""></div>
                                <p class="about-services__title">Оценка недвижимости</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/07.svg" alt=""></div>
                                <p class="about-services__title">Бесплатное консультирование</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/08.svg" alt=""></div>
                                <p class="about-services__title">Страхование недвижимости</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/09.svg" alt=""></div>
                                <p class="about-services__title">Приватизация</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/10.svg" alt=""></div>
                                <p class="about-services__title">Консультация по&nbsp;криптовалютам</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/11.svg" alt=""></div>
                                <p class="about-services__title">3D сьемка вашего обьекта по&nbsp;всей&nbsp;России</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/12.svg" alt=""></div>
                                <p class="about-services__title">Помощь при работе с&nbsp;криптовалютой</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <Form1></Form1>

        </main>

        <Footer></Footer>
    </div>

    </body>
</template>

<script>
    import Form1 from "../Components/Component/Forms/Form1.vue";

    export default {
        props: ['page'],
        components: {
            Form1
        },
        provide() {
            return {
                'page': this.page,
            }
        },
        data() {
            return {
                show_login: false,
                show_reg: false,
            }
        },
        name: "AppAbout",
    }
</script>

<style scoped>

</style>
