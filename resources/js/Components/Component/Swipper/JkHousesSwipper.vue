<script setup>

    import { Link } from '@inertiajs/vue3';

</script>

<template>
<!--    <div class="swiper-container">-->
        <swiper
            :modules="modules"
            :space-between="30"
            :slides-per-view="3"
            :slides-per-group="3"
            navigation
        >

            <swiper-slide class="swiper-slide" v-for="item in jk">
                    <div class="jk-bl-slide">
                        <!-- Swiper -->
                        <ImageSwipper :images="item.images_array"></ImageSwipper>
                        <div class="jk-bl-slide-content">
                            <div class="jk-bl-slide-info">
                                <div class="jk-bl-slide-heading">
                                    <h3 class="heading-3">{{ item.title }}</h3>
                                    <button type="button" class="btn-icon"
                                            v-if="item.favorite === false"
                                            @click="$emit('addFavorite', item, 0)">
                                        <i class="icomoon icon-favourites"></i>
                                    </button>
                                    <button type="button" class="btn-icon"
                                            v-else
                                            @click="$emit('removeFavorite', item, 0)">
                                        <i class="icomoon icon-favourites RedColor"></i>
                                    </button>
                                </div>
                                <p class="text-2">{{ item.address }}</p>
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
                                        <div class="builder-name">{{ item.builder !== null ? item.builder.name : '-' }}</div>
                                        <div class="builder-status">{{ item.status }}</div>
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
                                <Link :href="'/jk/' + item.slug" class="btn btn-lg">Подробнее</Link>
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
        </swiper>
<!--    </div>-->

</template>

<script>
    import { defineComponent } from 'vue'
    import { Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/navigation'
    import ImageSwipper from '@/Components/Component/Swipper/SwipperImages/ImageSwipper.vue';

    export default {
        props:['jk'],
        // inject:['jk'],
        title: 'Navigation',
        url: import.meta.url,
        components: {
            Swiper,
            SwiperSlide,
            ImageSwipper
        },
        name: "JkHousesSwipper",
        setup() {
            return {
                modules: [Navigation]
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
        },
        created() {
            console.log(this.jk)
        }
    }
</script>

<style scoped>
    .RedColor {
        color: red!important;
    }
</style>
