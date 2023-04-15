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
                                                              alt=""><span>{{ getMinFlat(item) }}–{{ getMaxFlat(item) }} комнат</span></div>
                    <div class="specifications-col-item"><img src="img/jk-bl/square.png"
                                                              alt=""><span>от {{ getMinSquare(item) }} до {{ getMaxSquare(item) }} м²</span>
                    </div>
                    <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от {{ getMinPrice(item) }} млн. ₽</span>
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

        },
        methods: {
            getMinFlat(item) {

                if (item.flat.length > 0) {
                    return item.flat.sort((a, b) => a.rooms - b.rooms)[0].rooms;
                } else {
                    return 0;
                }

            },
            getMaxFlat(item) {

                if (item.flat.length > 0) {
                    return item.flat.sort((a, b) => b.rooms - a.rooms)[0].rooms;
                } else {
                    return 0;
                }

            },
            getMinSquare(item) {
                if (item.flat.length > 0) {
                    return item.flat.sort((a, b) => a.square_main - b.square_main)[0].square_main;
                } else {
                    return 0;
                }
            },
            getMaxSquare(item) {
                if (item.flat.length > 0) {
                    return item.flat.sort((a, b) => b.square_main - a.square_main)[0].square_main;
                } else {
                    return 0;
                }
            },
            getMinPrice(item) {

                if (item.flat.length > 0) {
                    return (item.flat.sort((a, b) => a.square_main - b.square_main)[0].price).toLocaleString('ru');
                } else {
                    return 0;
                }

            }
        }
    }
</script>

<style scoped>

</style>
