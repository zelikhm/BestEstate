<script setup>
    import Support from '../Component/Swipper/Support.vue'
</script>

<template>
    <section class="consult">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Консультация эксперта</h2>
            </div>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper consultSwiper">
                    <div class="swiper-wrapper">
                        <Support :support="support"></Support>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['support'],
        name: "Support"
    }
</script>

<style scoped>

</style>
