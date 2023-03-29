<script setup>
    import Services from "../Component/Services.vue";
</script>

<template>
    <section class="services-bl">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Услуги компании</h2>
            </div>
            <div class="swiper specialSwiper">
                <div class="swiper-wrapper">
                    <Services></Services>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Services"
    }
</script>

<style scoped>

</style>
