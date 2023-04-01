<template>
    <swiper
        class="swiper specialSwiper"
        :modules="modules"
        :space-between="30"
        :slides-per-view="3"
        :slides-per-group="3"
        :loop="true"
        :loop-fill-group-with-blank="true"
        :navigation="true"
        :pagination="{ clickable: true }"
    >
        <swiper-slide v-for="jk in sale_jk">
            <div class="swiper-slide">
                <div class="special-slide">
                    <div class="special-slide-img">
                        <div class="discount"><img src="img/special/discount.svg"
                                                   alt=""><span>акция до {{ getDate(jk.sale_date) }}</span>
                        </div>
                        <img :src="jk.image" alt="">
                    </div>
                    <div class="special-slide-content">
                        <div class="special-slide-info">
                            <h3 class="heading-3">{{ jk.title }}</h3>
                            <p class="text-2">{{ jk.description }}</p>
                        </div>
                        <div class="special-slide-nav">
                            <Link :href="'/jk/' + jk.slug" class="btn btn-md">Подробнее</Link>
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
        </swiper-slide>
    </swiper>

</template>

<script>
    import {defineComponent} from 'vue'
    import {Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'vue-awesome-swiper'
    // import 'swiper/css'
    // import 'swiper/css/navigation'
    import {Link} from '@inertiajs/vue3';

    export default {
        components: {
            Swiper,
            SwiperSlide,
            Link
        },
        setup() {
            return {
                modules: [Navigation]
            }
        },
        inject: ['sale_jk'],
        name: "JkSwipper",
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
    .swiper-button-next {
        position: absolute;
        top: 70%;
        width: 58px;
        height: 58px;
        z-index: 10;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        background-color: var(--global-color);
    }
    .swiper-button-prev {
        position: absolute;
        top: 70%;
        width: 58px;
        height: 58px;
        z-index: 10;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        background-color: var(--global-color);
    }
</style>
