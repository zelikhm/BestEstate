<template>
    <div class="apart-graphics">
        <div class="btns-group">
            <a style="cursor: pointer" v-bind:class="{'active': type == 0}" v-on:click="type = 0" class="btn-w"><img
                src="/img/icons/image.svg" alt=""><span>27 фото</span></a>
            <a v-if="flat.plan_image" style="cursor: pointer" v-bind:class="{'active': type == 1}" v-on:click="type = 1"
               class="btn-w"><img src="/img/icons/plan.svg" alt=""><span>Планировка</span></a>
            <a style="cursor: pointer" v-bind:class="{'active': type == 2}" v-if="flat.render" v-on:click="type = 2" class="btn-w"><img
                src="/img/icons/3d.png" alt=""><span>3D-просмотр</span></a>
            <a style="cursor: pointer" v-bind:class="{'active': type == 3}" v-on:click="type = 3" class="btn-w"><img
                src="/img/icons/location.svg" alt=""><span>На карте</span></a>
            <a style="cursor: pointer" v-bind:class="{'active': type == 4}" v-on:click="type = 4" class="btn-w"><img
                src="/img/icons/video.svg" alt=""><span>Видео</span></a>
        </div>
        <swiper
            v-if="type == 0"
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
            <swiper-slide v-if="flat.images_array.length > 0" v-for="image in flat.images_array">
                <img :src="'/' + image" alt=""></swiper-slide>
            <swiper-slide v-else><img src="/img/kp-bl/kpGallerySwiper4.jpg" alt=""></swiper-slide>
        </swiper>
        <div ref="next" class="swiper-button-next--fluid"></div>
        <div ref="prev" class="swiper-button-prev--fluid"></div>

        <swiper
            v-if="type == 1"
            class="swiper"
            :slides-per-view="1"
            :space-between="30"
            :loop="true"
            :pagination="{ clickable: false }"
            :navigation="false"
        >
            <swiper-slide>
                <img :src="flat.plan_image" alt="">
            </swiper-slide>
        </swiper>

        <div v-html="flat.render" v-if="type == 2">

        </div>

        <YandexMap v-if="type == 3" :flat="flat" :jk="jk"></YandexMap>

    </div>
</template>

<script>

    import {defineComponent} from 'vue'
    import {Pagination, Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/pagination'
    import 'swiper/css/navigation'
    import {ref} from 'vue';

    import YandexMap from '../Component/YandexMap.vue'
    export default {
        props: ['flat', 'jk'],
        name: "Image",
        data() {
            return {
                type: 0,
                settings: [],
                scenes: [
                    {
                        key: 'M4wOy2s',
                        panorama: {
                            source: '/img/kp-bl/kpGallerySwiper4.jpg',
                            type: 'image'
                        },
                        x: 0,
                        y: 0,
                        z: 0,
                        rx: 0,
                        rz: 0,
                        ry: 90,
                        connections: [
                            'eIm7la',
                            'eId9l0',
                            'fK2dL7l'
                        ]
                    },
                    {
                        key: 'eIm7la',
                        panorama: {
                            source: '/img/kp-bl/kpGallerySwiper4.jpg',
                            type: 'cube'
                        },
                        x: 100,
                        y: 0,
                        z: 200,
                        rx: 0,
                        rz: 0,
                        ry: 0,
                        connections: [
                            'M4wOy2s'
                        ]
                    },
                    {
                        key: 'eId9l0',
                        panorama: {
                            source: '/img/kp-bl/kpGallerySwiper4.jpg',
                            type: 'cube'
                        },
                        x: 150,
                        y: 0,
                        z: -300,
                        rx: 0,
                        rz: 0,
                        ry: 0,
                        connections: [
                            'M4wOy2s'
                        ]
                    },
                    {
                        key: 'fK2dL7l',
                        panorama: {
                            source: '/img/kp-bl/kpGallerySwiper4.jpg',
                            type: 'cube'
                        },
                        x: -150,
                        y: 0,
                        z: -300,
                        rx: 0,
                        rz: 0,
                        ry: 0,
                        connections: [
                            'M4wOy2s'
                        ]
                    }
                ],
                coordinates: [55, 33],
                controls: ['fullscreenControl'],
                detailedControls: { zoomControl: { position: { right: 10, top: 50 } } },
            }
        },
        components: {
            Swiper,
            SwiperSlide,
            YandexMap,
        },
        created() {
            this.settings = {

            }
        },
        setup() {
            const prev = ref(null);
            const next = ref(null);
            return {
                modules: [Pagination, Navigation],
                prev,
                next,
            }
        },
        methods: {}
    }
</script>

<style scoped>

</style>
