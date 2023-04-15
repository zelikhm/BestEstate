<template>

    <swiper
        class="swiper"
        :modules="modules"
        :space-between="30"
        :slides-per-view="3"
        :centered-slides="true"
        :pagination="false"
        :loop="true"
    >
        <swiper-slide v-for="video in videos" class="swiper-slide">
            <a target="_blank" class="videosSwiper-slide"
               href="https://www.youtube.com/watch?v=z2X2HaTvkl8">
                <div class="btn-play"><i class="icomoon icon-play"></i></div>
                <div class="videosSwiper-slide-content">
                    <h3 class="heading-3">{{ video.title }}</h3>
                    <p class="text-3">{{ video.description }}</p>
                </div>
                <div class="videosSwiper-slide-img">
                    <img :src="video.image"/>
                </div>
            </a>
        </swiper-slide>
    </swiper>
</template>

<script>

    import {defineComponent, reactive} from 'vue'
    import {Navigation, Pagination} from 'swiper'
    import {Swiper, SwiperSlide} from 'vue-awesome-swiper'
    import 'swiper/css'
    import 'swiper/css/navigation'
    import 'swiper/css/pagination'
    import {ref} from 'vue';

    export default {
        props:['videos'],
        name: "VideosSwiper",

        components: {
            Swiper,
            SwiperSlide
        },
        setup() {
            return {
                modules: [Pagination],
            }
        },
    }
</script>

<style scoped>

</style>
