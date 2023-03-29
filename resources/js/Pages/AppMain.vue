<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import {Link} from '@inertiajs/vue3'

    //sections
    import Hero from "../Components/MainSections/Hero.vue";
    import Special from "../Components/MainSections/Special.vue";
    import Services from "../Components/MainSections/Services.vue";
    import Jk from "../Components/MainSections/Jk.vue";
    import Villages from "../Components/MainSections/Villages.vue";
    import Working from "@/Components/MainSections/Working.vue";
    import Support from "@/Components/MainSections/Support.vue";
    import Commerc from "@/Components/MainSections/Commerc.vue";
    import Shale from "@/Components/MainSections/Commerc.vue";
    import Villa from "@/Components/MainSections/Villa.vue";

</script>

<template>

    <body>
    <div class="wrapper">

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false"
                           @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <main class="page-home">

            <Hero :options="options"></Hero>

            <Special></Special>

            <Services></Services>

            <Jk v-if="jk.length > 0" :user="user" :jk="jk"></Jk>

            <Villages v-if="villages.length > 0" :villages="villages"></Villages>

            <section class="offer" v-if="villages.length > 0">
                <div class="container">
                    <div class="offer-img">
                        <img src="img/offer/offer-img.jpg" alt="">
                    </div>
                </div>
            </section>

            <Villa v-if="villa.length > 0" :villa="villa" ></Villa>

            <Shale v-if="shale.length > 0" :shale="shale"></Shale>

            <section class="offer" v-if="shale.length > 0 || villa.length > 0">
                <div class="container">
                    <div class="offer-img">
                        <img src="img/offer/offer-img.jpg" alt="">
                    </div>
                </div>
            </section>

            <Commerc v-if="ecom.length > 0" :ecom="ecom" ></Commerc>

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

            <Support v-if="support.length > 0" :support="support"></Support>

            <Working v-if="working.length > 0" :working="working" ></Working>

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

<!--        <div class="state city-state" data-state="city">-->
<!--            <div class="state-box">-->
<!--                <div class="state-heading">-->
<!--                    <div class="heading-4">Выберите регион или город</div>-->
<!--                    <div class="icomoon icon-close"></div>-->
<!--                </div>-->
<!--                <div class="search-group">-->
<!--                    <label class="form-label">-->
<!--                        <input type="text" class="form-input" placeholder="Выберите регион или город">-->
<!--                    </label>-->
<!--                    <button type="submit" class="btn btn-lg">Выбрать</button>-->
<!--                </div>-->
<!--                <div class="city-switchers">-->
<!--                    <div class="city-switchers__btns">-->
<!--                        <button class="btn-border btn-sm">Москва</button>-->
<!--                        <button class="btn-border btn-sm">Московская область</button>-->
<!--                        <button class="btn-border btn-sm">Санкт-Петербург</button>-->
<!--                        <button class="btn-border btn-sm">Ленинградская область</button>-->
<!--                        <button class="btn-border btn-sm">Екатеринбург</button>-->
<!--                        <button class="btn-border btn-sm">Краснодар</button>-->
<!--                        <button class="btn-border btn-sm">Новосибирск</button>-->
<!--                        <button class="btn-border btn-sm">Красноярск</button>-->
<!--                    </div>-->
<!--                    <ul class="city-switchers__list">-->
<!--                        <li>-->
<!--                            <button>Москва</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Московская область</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Санкт-Петербург</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Ленинградская область</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Екатеринбург</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Краснодар</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Новосибирск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Красноярск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Челябинск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Ростов-на-Дону</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Тюмень</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Уфа</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Казань</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Пермь</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Нижний Новгород</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Самара</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Саратов</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Омск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Балашиха</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Волгоград</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Воронеж</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Иркутск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Хабаровск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Томск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Ярославль</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Сочи</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Сургут</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Подольск</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Мытищи</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Владивосток</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Калуга</button>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <button>Пятигорск</button>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>

    <!-- Script-->
    <link href="css/fancybox.css" rel="stylesheet">


    </body>

</template>

<script>

    import {router} from '@inertiajs/vue3'

    export default {
        props: ['page', 'sale_jk', 'services', 'jk', 'user', 'villages', 'villa', 'shale', 'ecom', 'support', 'working', 'options'],
        provide() {
            return {
                'page': this.page,
                'sale_jk': this.sale_jk,
                'services': this.services,
                'user': this.user
            }
        },
        data() {
            return {
                show_reg: false,
                show_login: false,
            }
        },
        created() {

        },
        name: "AppMain",
        methods: {
            link(link, data) {
                router.visit(link, {
                    method: 'get',
                    replace: true,
                    onSuccess: page => {
                        window.scrollTo(0, 0)
                    },
                    preserveState: true,
                    preserveScroll: true,
                })
            },

        }
    }
</script>

<style scoped>

</style>
