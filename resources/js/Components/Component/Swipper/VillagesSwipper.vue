<template>
    <div class="kp-bl__cards-item" v-for="item in villages">
        <!-- Swiper -->
            <swiper class="swiper gallerySwiper" :modules="modules" navigation style="margin-right: 0">
                <swiper-slide class="slide" v-for="image in item.images_array"><img :src="image" alt=""></swiper-slide>
            </swiper>
        <div class="kp-bl__cards-content">
            <div class="kp-bl__cards-info">
                <div class="kp-bl__cards-heading">
                    <h3 class="heading-3">{{ item.title }}</h3>
                    <p class="text-2">{{ item.address }}</p>
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
                <Link :href="'/jk/' + item.slug" class="btn btn-lg">Подробнее</Link>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'swiper/vue'
    // import 'swiper/css'
    // import 'swiper/css/navigation'
    import { Link } from '@inertiajs/vue3';

    export default {
        props:['villages'],
        name: "VillagesSwipper",
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
        created() {

        }
    }
</script>

<style scoped>

</style>
