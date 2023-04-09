<script setup>
    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import {Link} from '@inertiajs/vue3'
    import { Head } from '@inertiajs/vue3'

    import { ref } from 'vue';
    import { YandexMap, YandexMarker, YandexCollection } from 'vue-yandex-maps'
    import CustomBalloon from '@/Components/Component/CustomBallon.vue';


    const props = defineProps({
        flat: Object,
        objects: Object
    })

    const marker = [];
    const coordinates = ref([64, 40]);

    props.objects.forEach(item => {
        item.coordinate = [parseFloat(item.longitude, 10), parseFloat(item.latitude, 10)];
    });

    const name = ref('Custom');

</script>

<template>
    <div class="wrapper">

        <!-- header -->
        <Head>
            <title>Карта</title>
            <meta name="description" content="главная">
        </Head>

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false"
                           @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <main class="page-catalog">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="'/'">Главная</Link>
                    <span>Карта</span>
                </nav>
            </div>

            <section class="catalog">
                <div class="container">
                    <YandexMap class="catalog-map" :coordinates="coordinates">
                        <YandexClusterer :options="{ preset: 'islands#nightClusterIcons' }">
                            <YandexMarker
                                v-for="i in objects"
                                v-on:click="getJk(i)"
                                :key="`2-marker-${i.id}`"
                                :coordinates="i.coordinate"
                                :marker-id="`2-marker-${i.id}`"
                            >
                                <template #component>
                                    <CustomBalloon v-model="name" :jk="jk" />
                                </template>
                            </YandexMarker>
                        </YandexClusterer>
                    </YandexMap>
                </div>
            </section>

        </main>

    </div>
</template>

<script>

    export default {
        name: "AppMap",
        props:[
            'objects',
            'page',
            'user'
        ],
        data() {
            return {
                jk: [],
            }
        },
        mounted() {

        },
        created() {

        },
        methods: {
            getJk(i) {
                this.jk = i;
                console.log(this.jk)
            },

        }

    }
</script>

<style>

    .yandex-balloon {
        height: 300px;
        width: 300px;
    }

</style>
