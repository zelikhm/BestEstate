<template>
    <swiper
        class="swiper"
        :modules="modules"
        :slides-per-view="1"
        :space-between="30"
        :loop="true"
        :pagination="{ clickable: true }"
        :navigation="{
                      prevEl: prev,
                      nextEl: next,
                    }"
    >
        <swiper-slide v-if="images.length > 0" v-for="image in images"><img
            :src="image" alt=""></swiper-slide>
        <swiper-slide v-else><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></swiper-slide>
    </swiper>
    <div ref="next" class="swiper-button-next--fluid"></div>
    <div ref="prev" class="swiper-button-prev--fluid"></div>
</template>

<script>
    import {defineComponent} from 'vue'
    import {Pagination, Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/pagination'
    import 'swiper/css/navigation'
    import {ref} from 'vue';
    import {Link} from "@inertiajs/vue3";

    export default {
        props:['images'],
        name: "ImageSwipperFlat",
        components: {
            Swiper,
            SwiperSlide,
            Link
        },
        setup() {
            const prev = ref(null);
            const next = ref(null);
            return {
                modules: [Pagination, Navigation],
                prev,
                next,
            }
        }
    }
</script>

<style scoped>

</style>
