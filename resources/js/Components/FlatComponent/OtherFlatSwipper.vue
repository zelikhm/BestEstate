<template>
    <div class="swiper-container">
        <swiper
            class="swiper similarSwiper"
            :modules="modules"
            :space-between="30"
            :slides-per-view="3"
            :slides-per-group="3"
            :loop="true"
            :loop-fill-group-with-blank="true"
            :navigation="false"
            :pagination="{ clickable: true }"
        >
            <swiper-slide v-for="flat in flats">
                <Link :href="'/jk/' + flat.jk.slug + '/' + flat.slug" class="similar-slide">
                    <div class="similar-slide-img">
                        <img :src="'/' + flat.image" alt="">
                    </div>
                    <div class="similar-slide-content">
                        <div class="similar-price">
                            <div class="price"><div class="price-progress"></div><span>{{ flat.price.toLocaleString('ru') }} ₽</span></div>
                        </div>
                        <div class="heading-3">{{ flat.square_main }} м², {{ flat.rooms !== 0 ? flat.rooms + ' -комнатная квартира' : 'студия' }}</div>
                        <div class="specifications">
                            <div class="specifications-item"><img src="/img/similar/rooms.png" alt=""><span>{{ flat.rooms !== 0 ? flat.rooms + ' комнаты' : 'студия' }}</span></div>
                            <div class="specifications-item"><img src="/img/similar/square.png" alt=""><span>{{ flat.square_main }} м²</span></div>
                        </div>
                        <p class="text-2">Ленинградский проспект, 37</p>
                    </div>
                </Link>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Pagination, Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/pagination'
    import 'swiper/css/navigation'
    import {Link} from '@inertiajs/vue3'

    export default {
        props:['flats'],
        name: "OtherFlatSwipper",
        components: {
            Swiper,
            SwiperSlide,
            Link
        },
        setup() {
            return {
                modules: [Pagination, Navigation]
            }
        }
    }
</script>

<style scoped>

</style>
