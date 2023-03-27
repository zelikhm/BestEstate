<template>
    <body>
    <div class="wrapper">

        <!-- header -->
        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false"
                           @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <main class="page-kp">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <a href="#">Москва</a>
                    <a href="#">Купить</a>
                    <span>Жилой комплекс "{{ jk.title }}"</span>
                </nav>
            </div>

            <section class="kp">
                <div class="container">
                    <div class="jk-slider">
                        <!-- Swiper -->

                        <swiper class="swiper jkMainSwiper" :modules="modules" navigation>
                            <swiper-slide class="slide" v-for="image in jk.images_array"><img :src="'/' + image" alt="">
                            </swiper-slide>
                        </swiper>
                    </div>
                    <div class="jk-container">
                        <div class="jk-left">
                            <div class="jk-info">
                                <h3 class="jk-title">{{ jk.title }}</h3>
                                <p class="jk-text">{{ jk.address }}</p>
                                <div class="jk-info-grid">
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">год сдачи</div>
                                        <div class="jk-info-value">2020</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">класс</div>
                                        <div class="jk-info-value">{{ jk.class }}</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">этажность</div>
                                        <div class="jk-info-value">{{ jk.floors }}</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">корпусов</div>
                                        <div class="jk-info-value">{{ getFrames(jk.frames) }}</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">высота потолков</div>
                                        <div class="jk-info-value">{{ jk.height }} м</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">варианты отделки</div>
                                        <div class="jk-info-value">{{ jk.variable }}</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">парковка</div>
                                        <div class="jk-info-value">{{ jk.parking }}</div>
                                    </div>
                                    <div class="jk-info-item">
                                        <div class="jk-info-title">тип дома</div>
                                        <div class="jk-info-value">Монолитно-кирпичный</div>
                                    </div>
                                </div>
                            </div>
                            <div class="jk-right">
                                <div class="jk-card">
                                    <div class="jk-card-heading">
                                        <div class="prices">
                                            <div class="price">от <span>{{ minPrice }} ₽</span></div>
                                            <div class="price">до <span>{{ maxPrice }} ₽</span></div>
                                        </div>
                                        <a href="img/logo-black.png" download="filename" class="btn-ic"><i
                                            class="icomoon icon-download"></i></a>
                                    </div>
                                    <div class="builder" v-if="jk.builder !== null">
                                        <div class="builder-title">застройщик</div>
                                        <div class="builder-info">
                                            <div class="builder-name">{{ jk.builder.name }}</div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-lg to-state" data-state="contacts"><i
                                        class="icomoon icon-calling-bold"></i><span>Показать контакты</span></a>
                                </div>
                                <div class="expert" v-if="jk.support !== null">
                                    <div class="expert-info">
                                        <div class="expert-info-main">
                                            <img :src="jk.support.image" alt="">
                                            <div class="expert-info-content">
                                                <span>об этом объекте все знает:</span>
                                                <h4>{{ jk.support.name }}</h4>
                                            </div>
                                        </div>
                                        <div class="expert-descr">{{ jk.support.status }}</div>
                                        <a :href="'tel:' + jk.support.phone" class="phone"><i
                                            class="icomoon icon-calling-bold"></i><span>{{ jk.support.phone }}</span></a>
                                    </div>
                                    <div class="form-title">Или оставьте ваш номер и я вам перезвоню:</div>
                                    <form action="#" class="form expert-form">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                <input type="number" name="" id="" class="form-input"
                                                       placeholder="Ваш номер телефона">
                                            </label>
                                            <button class="btn btn-md">Перезвоните мне</button>
                                        </div>
                                        <label for="checkboxCta" class="accept checkbox">
                                            <input type="checkbox" id="checkboxCta">
                                            <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <!--                            info-->
                            <div v-if="jk.description !== null" v-for="info in jk.description">
                                <div v-if="info.category === 0" class="info">
                                    <div class="info-heading">
                                        <h3 class="heading-3">{{ info.title }}</h3>
                                    </div>
                                    <div class="advant" v-if="info.items !== null">
                                        <div class="advant-item" v-for="item in info.items">
                                            <div class="advant-icon"><img :src="item.image" alt=""></div>
                                            <span>{{ item.description }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="info.category === 1" class="stock">
                                    <h3 class="heading-3">{{ info.title }}</h3>
                                    <div class="stock-cards__item" v-bind:style="{ 'background-color': item.color }"
                                         v-for="item in info.items">
                                        <div class="stock-cards__item-content">
                                            <p v-html="item.description">

                                            </p>
                                        </div>
                                        <img :src="item.image" alt="" class="stock-cards__item-img">
                                    </div>
                                </div>
                                <div v-else-if="info.category === 2" class="interest">
                                    <h3 class="heading-3">{{ info.title }}</h3>
                                    <div class="interest-cards" v-if="info.items !== null">
                                        <div class="interest-cards__item" v-for="item in info.items">
                                            <div class="interest-cards__item-img">
                                                <img :src="item.image" alt="" style="object-fit: contain!important;">
                                            </div>
                                            <div class="interest-cards__item-content">
                                                <p>{{ item.description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="info.category === 3" class="info">
                                    <div class="info-heading">
                                        <h3 class="heading-3">{{info.title}}</h3>
                                    </div>

                                    <div class="swiper-container advantSwiper-container">
                                        <div class="swiper advantSwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="advant-slide advant-slide--1">
                                                        <h3 class="heading-3">Помещения для бизнеса</h3>
                                                        <p class="text-3">На первых этажах жилых корпусов расположены
                                                            помещения с отдельным входом, где можно открыть магазин,
                                                            супермаркет,
                                                            фермерскую лавку, пекарню, кофейню, бар, кафе, ресторан,
                                                            пиццерию, офис продаж, шоурум, мини-гостиницу, детский
                                                            развивающий центр, салон красоты, барбершоп, маникюрный
                                                            салон,
                                                            аптеку или офис.</p>
                                                        <a href="#" class="btn btn-md">Узнать больше о помещениях</a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="advant-slide advant-slide--2">
                                                        <h3 class="heading-3">Помещения для бизнеса</h3>
                                                        <p class="text-3">На первых этажах жилых корпусов расположены
                                                            помещения с отдельным входом, где можно открыть магазин,
                                                            супермаркет,
                                                            фермерскую лавку, пекарню, кофейню, бар, кафе, ресторан,
                                                            пиццерию, офис продаж, шоурум, мини-гостиницу, детский
                                                            развивающий центр, салон красоты, барбершоп, маникюрный
                                                            салон,
                                                            аптеку или офис.</p>
                                                        <a href="#" class="btn btn-md">Узнать больше о помещениях</a>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="advant-slide advant-slide--3">
                                                        <h3 class="heading-3">Помещения для бизнеса</h3>
                                                        <p class="text-3">На первых этажах жилых корпусов расположены
                                                            помещения с отдельным входом, где можно открыть магазин,
                                                            супермаркет,
                                                            фермерскую лавку, пекарню, кофейню, бар, кафе, ресторан,
                                                            пиццерию, офис продаж, шоурум, мини-гостиницу, детский
                                                            развивающий центр, салон красоты, барбершоп, маникюрный
                                                            салон,
                                                            аптеку или офис.</p>
                                                        <a href="#" class="btn btn-md">Узнать больше о помещениях</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-nav">
                                            <div class="swiper-button-next advantSwiper-next"></div>
                                            <div class="swiper-pagination advantSwiper-pagination"></div>
                                            <div class="swiper-button-prev advantSwiper-prev"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="info">
                        <div class="info-heading">
                            <h3 class="heading-3">Характеристики помещений</h3>
                        </div>
                        <!------ tabs ------>
                        <div id="charact-tabs">
                            <!-- Кнопки -->
                            <ul class="tabs-nav">
                                <li><a style="cursor: pointer" v-on:click="flat_filter = 0" v-bind:class="{ 'active': flat_filter == 0 }">Все планировки</a></li>
                                <li><a style="cursor: pointer" v-on:click="flat_filter = 1" v-bind:class="{ 'active': flat_filter == 1 }">1–комнатная</a></li>
                                <li><a style="cursor: pointer" v-on:click="flat_filter = 2" v-bind:class="{ 'active': flat_filter == 2 }">2–комнатная</a></li>
                                <li><a style="cursor: pointer" v-on:click="flat_filter = 3" v-bind:class="{ 'active': flat_filter == 3 }">3–комнатная</a></li>
                                <li><a style="cursor: pointer" v-on:click="flat_filter = 4" v-bind:class="{ 'active': flat_filter == 4 }">4–комнатная</a></li>
                            </ul>
                            <!-- Контент -->
                            <div class="tabs-items" v-if="jk.flat.length > 0">
                                <div class="tabs-item" id="charact-tab-1">
                                    <div class="charact-tab">
                                        <div class="charact-grid">
                                            <div class="charact-item" v-for="item in getFlat" :key="item.id">
                                                <div class="charact-img"><img :src="item.plan_image" alt=""></div>
                                                <div class="charact-title"><Link :href="'/jk/' + jk.slug + '/' + item.slug">{{ item.rooms }}–комнатная</Link></div>
                                                <div class="charact-info">
                                                    <img src="img/jk/charact-square.png" alt="">
                                                    <span>{{ item.square_main }} м²</span>
                                                </div>
                                            </div>
                                        </div>
<!--                                        <div class="link-center">-->
<!--                                            <a href="#" class="btn btn-lg">Посмотреть все планировки</a>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jk-container">
                        <div class="jk-left">
                            <div class="info-block">
                                <h3 class="heading-3">Площади от 39,7 до 234,4 м²</h3>
                                <ul>
                                    <li>Объем торговых помещений около 14 500 м²</li>
                                    <li>Все помещения имеют отдельный вход</li>
                                    <li>Витринное остекление</li>
                                    <li>Ввод в эксплуатацию в 2-м квартале 2021 года</li>
                                </ul>
                                <a href="#" class="btn btn-md">Узнать о спецпредложениях</a>
                            </div>
                            <div class="info" v-html="jk.description_page">

                            </div>
                            <div class="info">
                                <div class="info-heading">
                                    <h3 class="heading-3">Узнать еще больше об инфраструктуре от застройщика</h3>
                                </div>
                                <a href="#" class="btn btn-lg">Оставить заявку</a>
                            </div>
                            <div class="info-stats">
                                <h3 class="heading-2">AFI Development – системообразующая компания России</h3>
                                <div class="info-stats-grid">
                                    <div class="info-stats-item">
                                        <div class="info-stats-value">1,37</div>
                                        <div class="info-stats-text">млн. кв.м строятся</div>
                                    </div>
                                    <div class="info-stats-item">
                                        <div class="info-stats-value">19</div>
                                        <div class="info-stats-text">лет на рынке</div>
                                    </div>
                                    <div class="info-stats-item">
                                        <div class="info-stats-value">1,37</div>
                                        <div class="info-stats-text">млн. кв.м строятся</div>
                                    </div>
                                </div>
                            </div>
                            <div class="info-docs">
                                <div class="info-docs-info">
                                    <h3 class="heading-3">Паркинг для гостей</h3>
                                    <ul class="info-docs-list">
                                        <li class="info-docs-item">
                                            <a href="img/logo-black.png" download="filename">
                                                <i class="icomoon icon-download"></i>
                                                <span>Проектная декларация</span>
                                            </a>
                                        </li>
                                        <li class="info-docs-item">
                                            <a href="img/logo-black.png" download="filename">
                                                <i class="icomoon icon-download"></i>
                                                <span>Разрешение на строительство</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="info-docs-img"><img src="img/jk/info-docs-img.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="request">
                <div class="container">
                    <div class="request-wrapper">
                        <div class="heading">
                            <h3 class="heading-3">Заявка на подбор недвижимости</h3>
                            <p class="text-2">Оставьте свои контактные данные и с Вами свяжется наш риэлтор.</p>
                        </div>
                        <form action="#" class="form">
                            <label for="" class="form-label">
                                <input type="number" name="" id="" class="form-input form-input--big"
                                       placeholder="Ваш номер телефона">
                            </label>
                            <div class="col">
                                <button class="btn btn-xl">Оставить заявку</button>
                                <label class="accept checkbox">
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

    </div>
    </body>
</template>

<script>
    import {defineComponent} from 'vue'
    import {Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/navigation'
    import {Link} from '@inertiajs/vue3';

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";

    export default {
        props: ['page', 'jk', 'minPrice', 'maxPrice'],
        provide() {
            return {
                'page': this.page,
            }
        },
        data() {
            return {
                show_login: false,
                show_reg: false,
                flat_filter: 0,
            }
        },
        name: "AppJk",
        methods: {
            getFrames(frames) {

                if (frames === 0) {
                    return frames + ' корпусов';
                } else if (frames === 1) {
                    return frames + ' корпус';
                } else if (frames > 1 && frames < 5) {
                    return frames + ' корпуса';
                } else if (frames > 4) {
                    return frames + ' корпусов';
                }
            },
        },
        components: {
            Swiper,
            SwiperSlide,
            Link,
            Header,
            Footer,
            RegistrationModal,
            Login,
        },
        setup() {
            return {
                modules: [Navigation]
            }
        },
        computed: {
            getFlat() {

                if(this.flat_filter === 0) {
                    return this.jk.flat;
                } else if (this.flat_filter !== 0) {
                    // console.log(this.jk.flat.filter((item) => item.rooms === this.flat_filter));
                    return this.jk.flat.filter((item) => item.rooms === this.flat_filter);
                }
            }
        }
    }
</script>

<style scoped>

</style>
