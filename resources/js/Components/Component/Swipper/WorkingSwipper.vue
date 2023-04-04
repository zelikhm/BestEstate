<template>
    <swiper
        class="swiper partnersSwiper"
        :modules="modules"
        :space-between="30"
        :keyboard="{ enabled: true }"
        :pagination="{ clickable: true }"
        :navigation="{
      prevEl: prev,
      nextEl: next,
    }"
        :slides-per-view="3"
        :slides-per-group="3"
        :loop="true"
        :loop-fill-group-with-blank="true"
    >
        <swiper-slide class="slide" v-for="work in working"><img :src="work.image" alt=""></swiper-slide>
    </swiper>
    <div class="swiper-nav">
        <div ref="next" class="swiper-button-next partnersSwiper-next"></div>
        <div class="swiper-pagination partnersSwiper-pagination"></div>
        <div ref="prev" class="swiper-button-prev partnersSwiper-prev"></div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Navigation, Pagination } from 'swiper'
    import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
    import 'swiper/css'
    import 'swiper/css/navigation'
    import 'swiper/css/pagination'
    import { ref } from 'vue';

    export default {
        name: "WorkingSwipper",
        props:['working'],
        components: {
            Swiper,
            SwiperSlide
        },
        setup() {
            const prev = ref(null);
            const next = ref(null);
            return {
                modules: [Navigation, Pagination],
                prev,
                next,
            }
        },
    }
</script>

<style scoped>
    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        top: 50%;
        width: 38px;
        height: 38px;
        z-index: 10;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        background-color: var(--global-color);
    }
    .swiper-button-next {
        right: -3%;
    }
    .swiper-button-prev {
        left: -3%;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        /*font-family: "icomoon";*/
        font-size: 14px;
        font-weight: 400;
        color: var(--white-color);
    }
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: var(--globalHover-color);
    }
</style>
