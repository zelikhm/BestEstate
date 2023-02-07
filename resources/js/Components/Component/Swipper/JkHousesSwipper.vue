<script setup>

    import { Link } from '@inertiajs/vue3';
    import ImageSwipper from '../Swipper/SwipperImages/ImageSwipper.vue';

</script>

<template>
<!--    <div class="swiper-container">-->
        <swiper
            :modules="modules"
            :space-between="30"
            :slides-per-view="3"
            :slides-per-group="3"
            :autoplay="{ delay: 3500, disableOnInteraction: false }"
            :loop="true"
            :loop-fill-group-with-blank="true"
            :navigation="true"
            :pagination="{ clickable: true }"
        >

            <swiper-slide class="swiper-slide">
                    <div class="jk-bl-slide">
                        <!-- Swiper -->
                        <div class="swiper gallerySwiper jk-bl-gallerySwiper">
                            <div class="swiper-wrapper">
                                <ImageSwipper></ImageSwipper>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
            <swiper-slide>
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
            </swiper-slide>
        </swiper>
<!--    </div>-->

</template>

<script>
    import SwiperClass, {Pagination, Autoplay} from 'swiper'
    import {Swiper, SwiperSlide} from 'vue-awesome-swiper'

    export default {
        inject:['jk_array'],
        components: {
            Swiper,
            SwiperSlide
        },
        name: "JkHousesSwipper",
        setup() {
            return {
                modules: [Pagination, Autoplay]
            }
        },
        methods: {
            getDate(date) {
                let date1 = new Date(date);

                switch (date1.getMonth()) {
                    case 0:
                        return date1.getDate() + ' января';
                    case 1:
                        return date1.getDate() + ' февраля';
                    case 2:
                        return date1.getDate() + ' марта';
                    case 3:
                        return date1.getDate() + ' апреля';
                    case 4:
                        return date1.getDate() + ' мая';
                    case 5:
                        return date1.getDate() + ' июня';
                    case 6:
                        return date1.getDate() + ' июля';
                    case 7:
                        return date1.getDate() + ' августа';
                    case 8:
                        return date1.getDate() + ' сентября';
                    case 9:
                        return date1.getDate() + ' октября';
                    case 10:
                        return date1.getDate() + ' ноября';
                    case 11:
                        return date1.getDate() + ' декабря';
                }
            }
        }
    }
</script>

<style scoped>

</style>
