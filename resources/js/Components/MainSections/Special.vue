<script setup>
    import JkSlider from '../Component/Swipper/JkSwipper.vue'
</script>

<template>
    <section class="special">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Спецпредложения</h2>
            </div>
            <div class="swiper-containerr">
                <JkSlider></JkSlider>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Special"
    }
</script>

<style scoped>

</style>
