<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import {Link} from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import JkCard from "@/Components/Component/Cards/JkCard.vue";
    import { Head } from '@inertiajs/vue3'

</script>


<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false"
                           @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <Head>
            <title>Обьекты недвижимости</title>
            <meta name="description" content="главная">
        </Head>

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
                    <div v-for="house in houses">
                        <JkCard :user="user" :sliderStatus="false" :house="house"></JkCard>
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
        props: ['page', 'houses', 'user'],
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
        // computed: {
        //     housesArray() {
        //
        //         return this.houses;
        //
        //     }
        // }
    }
</script>

<style scoped>
    .special-slide, .jk-bl-slide {
        width: 450px!important;
    }
</style>
