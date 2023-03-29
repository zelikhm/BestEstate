<script setup>
    import WorkingSwipper from '../Component/Swipper/WorkingSwipper.vue'
</script>

<template>
    <section class="partners">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">С кем мы работаем</h2>
            </div>
            <!-- Swiper -->
            <div class="swiper-container partnersSwiper-container">
                <div class="swiper partnersSwiper">
                    <WorkingSwipper :working="working"></WorkingSwipper>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['working'],
        name: "Working"
    }
</script>

<style scoped>

</style>
