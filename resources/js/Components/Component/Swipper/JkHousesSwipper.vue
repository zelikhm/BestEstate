<template>
    <!--    <div class="swiper-container">-->
    <swiper
        class="swiper jk-blSwiper"
        :modules="modules"
        :space-between="30"
        :slides-per-view="3"
        :slides-per-group="3"
        :loop="true"
        :loop-fill-group-with-blank="true"
        :navigation="true"
        :pagination="{ clickable: true }"
    >
        <swiper-slide class="swiper-slide" v-for="item in jk">
            <JkCard :sliderStatus="true" :user="user" :house="item"></JkCard>
        </swiper-slide>
    </swiper>
    <!--    </div>-->

</template>

<script>
    import {defineComponent} from 'vue'
    import {Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'vue-awesome-swiper'
    import 'swiper/css'
    import 'swiper/css/navigation'
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
        name: "JkHousesSwipper",
        setup() {
            return {
                modules: [Navigation]
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

</style>
