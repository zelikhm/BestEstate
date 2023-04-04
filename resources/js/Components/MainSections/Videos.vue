<template>
    <section class="videos">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Видео–обзоры</h2>
                <a href="#" class="btn-second btn-md">Смотреть все</a>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper videosSwiper">
            <div class="swiper-wrapper">
                <VideosSwiper></VideosSwiper>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</template>

<script>
    import VideosSwiper from "@/Components/Component/Swipper/VideosSwiper.vue";

    export default {
        name: "Videos",
        components: {
            VideosSwiper
        }
    }
</script>

<style scoped>
    .swiper {
        overflow: visible;
    }
</style>
