<template>
    <div class="kp-bl__cards-item" v-for="item in villages">
        <!-- Swiper -->
        <div class="swiper gallerySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></div>
            </div>
            <div class="swiper-button-next--fluid"></div>
            <div class="swiper-button-prev--fluid"></div>
            <div class="swiper-pagination--fluid"></div>
        </div>
        <div class="kp-bl__cards-content">
            <div class="kp-bl__cards-info">
                <div class="kp-bl__cards-heading">
                    <h3 class="heading-3">{{ item.title }}</h3>
                    <p class="text-2">{{ item.address }}</p>
                </div>
                <div class="specifications-col">
                    <div class="specifications-col-item"><img src="img/jk-bl/rooms.png"
                                                              alt=""><span>1–8 комнат</span></div>
                    <div class="specifications-col-item"><img src="img/jk-bl/square.png"
                                                              alt=""><span>от 224 до 411 м²</span>
                    </div>
                    <div class="specifications-col-item"><img src="img/jk-bl/cost.png" alt=""><span>от 48 млн. ₽</span>
                    </div>
                </div>
            </div>
            <div class="kp-bl__cards-nav">
                <a href="#" class="btn btn-lg">Подробнее</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['villages'],
        name: "VillagesSwipper",
        created() {
            console.lo
        }
    }
</script>

<style scoped>

</style>
