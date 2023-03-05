<template>
    <swiper class="swiper gallerySwiper jk-bl-gallerySwiper" :modules="modules" navigation>
        <swiper-slide class="slide" v-for="image in images"><img :src="image" alt=""></swiper-slide>
    </swiper>
</template>


<script>
    import { defineComponent } from 'vue'
    import { Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/navigation'

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
            return {
                modules: [Navigation]
            }
        },
        created() {

        },
    }
</script>

<style scoped>

</style>
