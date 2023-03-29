<template>
    <YandexMap :coordinates="coordinates">
        <YandexMarker :coordinates="coordinates" :marker-id="123">

        </YandexMarker>
    </YandexMap>
</template>

<script setup>
    import { ref } from 'vue';
    import { YandexMap, YandexMarker } from 'vue-yandex-maps'

    const props = defineProps({
        flat: Object,
        jk: Object
    })

    const coordinates = [props.jk.longitude, props.jk.latitude];
    const name = ref('Custom');
</script>

<style>
    .yandex-container {
        height: 400px;
    }

    .yandex-balloon {
        height: 200px;
        width: 200px;
    }
</style>

