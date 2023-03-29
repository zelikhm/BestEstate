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
                    <span>Обьекты недвижимости</span>
                </nav>
            </div>

            <div class="container">
                <!-- Карточки ЖК -->
                <div class="jk-bl__cards">
                    <div class="jk-bl-slide" v-for="house in housesArray">
                        <div class="jk-bl-slide-content">
                            <div class="jk-bl-slide-info">
                                <div class="jk-bl-slide-heading">
                                    <h3 class="heading-3">{{ house.title }}</h3>
<!--                                    <button type="button" class="btn-icon"><i class="icomoon icon-favourites"></i></button>-->
                                </div>
                                <p class="text-2">{{ house.address }}</p>
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
                                <div class="builder" v-if="house.builder">
                                    <div class="builder-title">застройщик</div>
                                    <div class="builder-info">
                                        <div class="builder-name">{{ house.builder.name }}</div>
                                        <div class="builder-status">{{ house.status }}</div>
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
                                <Link :href="'/jk/' + house.slug" class="btn btn-lg">Подробнее</Link>
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
<!--                <div class="kp-bl__cards">-->
<!--                    <div class="kp-bl__cards-item">-->
<!--                        &lt;!&ndash; Swiper &ndash;&gt;-->
<!--                        <div class="swiper gallerySwiper">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="swiper-button-next&#45;&#45;fluid"></div>-->
<!--                            <div class="swiper-button-prev&#45;&#45;fluid"></div>-->
<!--                            <div class="swiper-pagination&#45;&#45;fluid"></div>-->
<!--                        </div>-->
<!--                        <div class="kp-bl__cards-content">-->
<!--                            <div class="kp-bl__cards-info">-->
<!--                                <div class="kp-bl__cards-heading">-->
<!--                                    <h3 class="heading-3">КП “Новые вешки”</h3>-->
<!--                                    <p class="text-2">Архангельская область, Архангельск, Октябрьский</p>-->
<!--                                </div>-->
<!--                                <div class="specifications-col">-->
<!--                                    <div class="specifications-col-item"><img src="img/jk-bl/rooms.png" alt=""><span>1–8 комнат</span></div>-->
<!--                                    <div class="specifications-col-item"><img src="img/jk-bl/square.png" alt=""><span>от 224 до 411 м²</span></div>-->
<!--                                    <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="kp-bl__cards-nav">-->
<!--                                <a href="#" class="btn btn-lg">Подробнее</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="kp-bl__cards-item">-->
<!--                        &lt;!&ndash; Swiper &ndash;&gt;-->
<!--                        <div class="swiper gallerySwiper">-->
<!--                            <div class="swiper-wrapper">-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>-->
<!--                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>-->
<!--                            </div>-->
<!--                            <div class="swiper-button-next&#45;&#45;fluid"></div>-->
<!--                            <div class="swiper-button-prev&#45;&#45;fluid"></div>-->
<!--                            <div class="swiper-pagination&#45;&#45;fluid"></div>-->
<!--                        </div>-->
<!--                        <div class="kp-bl__cards-content">-->
<!--                            <div class="kp-bl__cards-info">-->
<!--                                <div class="kp-bl__cards-heading">-->
<!--                                    <h3 class="heading-3">КП “Петрово-дальнее”</h3>-->
<!--                                    <p class="text-2">Архангельская область, Архангельск, Октябрьский</p>-->
<!--                                </div>-->
<!--                                <div class="specifications-col">-->
<!--                                    <div class="specifications-col-item"><img src="img/jk-bl/rooms.png" alt=""><span>1–8 комнат</span></div>-->
<!--                                    <div class="specifications-col-item"><img src="img/jk-bl/square.png" alt=""><span>от 224 до 411 м²</span></div>-->
<!--                                    <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="kp-bl__cards-nav">-->
<!--                                <a href="#" class="btn btn-lg">Подробнее</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>

        </main>

        <Footer></Footer>
    </div>

    </body>
</template>

<script>

    export default {
        props: ['page', 'houses'],
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
        created() {
            window.scrollTo({
                top: 1000,
                behavior: 'smooth'
            });
        },
        name: "AppHouses",
        computed: {
            housesArray() {

                return this.houses;

            }
        }
    }
</script>

<style scoped>

</style>
