<template>
    <div class="apart-graphics">
        <div class="btns-group">
            <a href="#" class="btn-w" v-on:click="tab = 1" v-bind:class="{ 'active': tab === 1}" v-if="isImages"><img src="/img/icons/image.svg"
                                                  alt=""><span>{{ images.length }} фото</span></a>
            <a href="#" class="btn-w" v-on:click="tab = 2" v-bind:class="{ 'active': tab === 2}" v-if="isPlans"><img src="/img/icons/plan.svg"
                                           alt=""><span>Планировка</span></a>
            <a href="#" class="btn-w" v-on:click="tab = 3" v-bind:class="{ 'active': tab === 3}" v-if="isRender"><img src="/img/icons/3d.png"
                                           alt=""><span>3D-просмотр</span></a>
            <a href="#" class="btn-w" v-on:click="tab = 4" v-bind:class="{ 'active': tab === 4}" v-if="isMap"><img src="/img/icons/location.svg"
                                           alt=""><span>На карте</span></a>
            <a href="#" class="btn-w" v-on:click="tab = 5" v-bind:class="{ 'active': tab === 5}" v-if="isVideo"><img src="/img/icons/video.svg"
                                           alt=""><span>Видео</span></a>
        </div>
        <div class="apart-graphics-content">
            <div class="swiper apartMainSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" v-for="image in images">
                        <a :href="image.image" data-fancybox="galleryApart">
                            <img :src="image.image" alt="">
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next--fluid"></div>
                <div class="swiper-button-prev--fluid"></div>
                <div class="swiper-pagination--fluid"></div>
            </div>
<!--            <div thumbsSlider="" class="swiper apartSecondSwiper">-->
<!--                <div class="swiper-wrapper">-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-2.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-2.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-2.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-2.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-2.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-1.jpg" alt="">-->
<!--                    </div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/apart-img-2.jpg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
<!--    <div class="apart-graphics">-->
<!--        <div class="btns-group">-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/image.svg" alt=""><span>27 фото</span></a>-->
<!--            <a href="#" class="btn-w active"><img src="/img/icons/plan.svg" alt=""><span>Планировка</span></a>-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/3d.png"-->
<!--                                           alt=""><span>3D-просмотр</span></a>-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/location.svg"-->
<!--                                           alt=""><span>На карте</span></a>-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/video.svg"-->
<!--                                           alt=""><span>Видео</span></a>-->
<!--        </div>-->
<!--        <div class="apart-graphics-content">-->
<!--            <div class="swiper apartPlanMainSwiper">-->
<!--                <div class="swiper-wrapper">-->
<!--                    <div class="swiper-slide">-->
<!--                        <a href="/img/apartament/plan-1.jpg" data-fancybox="planApart">-->
<!--                            <img src="/img/apartament/plan-1.jpg" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="swiper-slide">-->
<!--                        <a href="/img/apartament/plan-1.jpg" data-fancybox="planApart">-->
<!--                            <img src="/img/apartament/plan-1.jpg" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-button-next&#45;&#45;fluid"></div>-->
<!--                <div class="swiper-button-prev&#45;&#45;fluid"></div>-->
<!--                <div class="swiper-pagination&#45;&#45;fluid"></div>-->
<!--            </div>-->
<!--            <div thumbsSlider="" class="swiper apartPlanSecondSwiper">-->
<!--                <div class="swiper-wrapper">-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/plan-1.jpg" alt=""></div>-->
<!--                    <div class="swiper-slide"><img src="/img/apartament/plan-1.jpg" alt=""></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="apart-graphics">-->
<!--        <div class="btns-group">-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/image.svg" alt=""><span>27 фото</span></a>-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/plan.svg"-->
<!--                                           alt=""><span>Планировка</span></a>-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/3d.png"-->
<!--                                           alt=""><span>3D-просмотр</span></a>-->
<!--            <a href="#" class="btn-w"><img src="/img/icons/location.svg"-->
<!--                                           alt=""><span>На карте</span></a>-->
<!--            <a href="#" class="btn-w active"><img src="/img/icons/video.svg"-->
<!--                                                  alt=""><span>Видео</span></a>-->
<!--        </div>-->
<!--        <div class="apart-graphics-content">-->
<!--            <iframe class="apart-graphics-video" width="560" height="315"-->
<!--                    src="https://www.youtube.com/embed/39Y8VLMoXi0" title="YouTube video player"-->
<!--                    frameborder="0"-->
<!--                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"-->
<!--                    allowfullscreen></iframe>-->
<!--        </div>-->
<!--    </div>-->
</template>

<script>
    export default {
        props:['images', 'plans'],
        name: "FlatSwiper",
        data() {
            return {
                isImages: false,
                isPlans: false,
                isRender: false,
                isMap: false,
                isVideo: false,
                tab: 1
            }
        },
        created() {

            if(this.images !== undefined) {
                this.isImages = true;
            }

            if(this.plans !== undefined) {
                this.isPlans = true;
            }

        }
    }
</script>

<style scoped>

</style>
