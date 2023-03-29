<template>
    <swiper
        class="swiper"
        :modules="modules"
        :slides-per-view="1"
        :space-between="30"
        :keyboard="{ enabled: true }"
        :pagination="{ clickable: true }"
        :navigation="true"
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
