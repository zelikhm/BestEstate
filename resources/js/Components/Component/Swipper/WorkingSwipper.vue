<template>
    <swiper
        class="swiper partnersSwiper"
        :modules="modules"
        :space-between="30"
        :keyboard="{ enabled: true }"
        :pagination="{ clickable: true }"
        :navigation="true"
        :slides-per-view="3"
        :slides-per-group="3"
        :loop="true"
        :loop-fill-group-with-blank="true"
    >
        <swiper-slide class="slide" v-for="work in working"><img :src="work.image" alt=""></swiper-slide>
    </swiper>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
    import 'swiper/css'
    import 'swiper/css/navigation'

    export default {
        name: "WorkingSwipper",
        props:['working'],
        components: {
            Swiper,
            SwiperSlide
        },
        setup() {
            return {
                modules: [Navigation]
            }
        },
    }
</script>

<style scoped>

</style>
