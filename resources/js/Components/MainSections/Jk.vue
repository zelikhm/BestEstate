<script setup>
    import JkHousesSwipper from '../Component/Swipper/JkHousesSwipper.vue'
    import {Link} from '@inertiajs/vue3'

</script>

<template>
    <section class="jk-bl">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Жилые комплексы</h2>
                <Link :href="'/houses'" class="btn-second btn-md">Смотреть все</Link>
            </div>
            <!-- Swiper -->

            <div class="swiper-container">
                <JkHousesSwipper
                    :user="user"
                    :jk="jk"
                ></JkHousesSwipper>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['user', 'jk'],
        name: "Jk",
    }
</script>

<style scoped>

</style>
