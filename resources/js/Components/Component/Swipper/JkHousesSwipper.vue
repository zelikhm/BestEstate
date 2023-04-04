<template>
    <!--    <div class="swiper-container">-->
    <swiper
        class="swiper jk-blSwiper jk-nav-button"
        :modules="modules"
        :space-between="30"
        :slides-per-view="3"
        :slides-per-group="3"
        :loop="true"
        :loop-fill-group-with-blank="true"
        :navigation="{
      prevEl: prev,
      nextEl: next,
    }"
        :pagination="{ clickable: true }"

    >
        <swiper-slide class="swiper-slide" v-for="item in jk">
            <JkCard :sliderStatus="true" :user="user" :house="item"></JkCard>
        </swiper-slide>
    </swiper>
    <div class="swiper-nav">
        <div ref="next" style="" class="swiper-button-next jk-blSwiper-next"></div>
        <div ref="prev" class="swiper-button-prev jk-blSwiper-prev"></div>
    </div>
<!--    <div ref="prev" class="swiper-button-prev">prev</div>-->
<!--    <div ref="next" class="swiper-button-next">next</div>-->
    <!--    </div>-->

</template>

<script>
    import { ref } from 'vue';
    import {defineComponent} from 'vue'
    import {Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'vue-awesome-swiper'
    // import 'swiper/css'
    // import 'swiper/css/navigation'
    import {Link} from '@inertiajs/vue3';
    import JkCard from "@/Components/Component/Cards/JkCard.vue";

    export default {
        props: ['jk', 'user'],
        // inject:['jk'],
        title: 'Navigation',
        url: import.meta.url,
        components: {
            Swiper,
            SwiperSlide,
            Link,
            JkCard
        },
        mounted() {

        },
        name: "JkHousesSwipper",
        setup() {
            const prev = ref(null);
            const next = ref(null);
            return {
                modules: [Navigation],
                prev,
                next,
            }
        },
        methods: {
            getDate(date) {
                let date1 = new Date(date);

                switch (date1.getMonth()) {
                    case 0:
                        return date1.getDate() + ' января';
                    case 1:
                        return date1.getDate() + ' февраля';
                    case 2:
                        return date1.getDate() + ' марта';
                    case 3:
                        return date1.getDate() + ' апреля';
                    case 4:
                        return date1.getDate() + ' мая';
                    case 5:
                        return date1.getDate() + ' июня';
                    case 6:
                        return date1.getDate() + ' июля';
                    case 7:
                        return date1.getDate() + ' августа';
                    case 8:
                        return date1.getDate() + ' сентября';
                    case 9:
                        return date1.getDate() + ' октября';
                    case 10:
                        return date1.getDate() + ' ноября';
                    case 11:
                        return date1.getDate() + ' декабря';
                }
            }
        },
        created() {

        }
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
