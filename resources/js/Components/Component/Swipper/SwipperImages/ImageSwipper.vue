<template>
    <swiper class="swiper gallerySwiper jk-bl-gallerySwiper"
            :modules="modules"
            :navigation="{
      prevEl: prev,
      nextEl: next,
    }"
    >
        <swiper-slide class="slide" v-for="image in images"><img :src="image" alt=""></swiper-slide>
    </swiper>
    <div ref="next" class="swiper-button-next--fluid"></div>
    <div ref="prev" class="swiper-button-prev--fluid"></div>
</template>


<script>
    import { defineComponent } from 'vue'
    import { Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/navigation'
    import { ref } from 'vue';

    export default {
        props:['images'],
        name: "ImageSwipper",
        title: 'Navigation',
        url: import.meta.url,
        components: {
            Swiper,
            SwiperSlide
        },
        setup() {
            const prev = ref(null);
            const next = ref(null);
            return {
                modules: [Navigation],
                prev,
                next,
            }
        },
        created() {

        },
    }
</script>

<style scoped>
    .swiper-button-next--fluid,
    .swiper-button-prev--fluid {
        position: absolute;
        top: 15%;
        transform: translateY(-50%);
        width: 26px;
        height: 26px;
        z-index: 10;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        background: rgba(0, 0, 0, 0.6);
    }
    .swiper-button-next--fluid::after,
    .swiper-button-prev--fluid::after {
        font-family: "icomoon";
        font-size: 18px;
        font-weight: 400;
        color: var(--white-color);
    }
    .swiper-button-next--fluid:hover,
    .swiper-button-prev--fluid:hover {
        background: rgba(0, 0, 0, 0.9);
    }
</style>
