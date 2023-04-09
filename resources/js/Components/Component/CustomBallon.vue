<template>
    <div class="yandex-balloon">

        <img :src="jk.image" alt="">
        <p>
            кол-во квартир: {{ jk.flat.length }}
        </p>
        <p>
            цена от: {{ jk.minPrice }}
            цена до: {{ jk.maxPrice }}
        </p>

        <Link :href="'/jk/' + jk.slug">
            Перейти
        </Link>
    </div>
</template>

<script>
    import {Link} from '@inertiajs/vue3';

    export default {

        components: {
          Link
        },
        props:[
            'jk'
        ]

    }
</script>

<script setup>
    defineEmits(['update:modelValue']);
</script>

<style>

</style>
