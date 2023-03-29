<script setup>
    import Villages from '../Component/Swipper/VillagesSwipper.vue'
    import {Link} from '@inertiajs/vue3'
</script>

<template>
    <section class="kp-bl">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Коттеджные поселки</h2>
                <Link :href="'/villages'" class="btn-second btn-md">Смотреть все</Link>
            </div>
            <div class="kp-bl__cards">
                <Villages
                    :villages="villages"
                ></Villages>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['villages'],
        name: "Villages"
    }
</script>

<style scoped>

</style>
