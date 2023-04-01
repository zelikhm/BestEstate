<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false" @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <main class="page-about">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <span>Новости</span>
                </nav>
            </div>

            <section class="news">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Новости агентства <span>Russia Best Real Estate</span></h1>
                    </div>
                    <div class="news__cards">
                        <div v-for="(item, index) in news_array">
                            <div class="news__item">
                                <div class="news__item-img"><img :src="item.image" alt=""></div>
                                <div class="news__item-content">
                                    <div class="news__item-heading">
                                        <h3 class="heading-2">{{ item.title }}</h3>
                                        <p class="text-2" v-html="item.description"></p>
                                    </div>
                                    <div class="news__item-nav">
                                        <Link :href="'/news/' + item.slug" class="btn btn-xl">Читать статью</Link>
                                        <div class="date">{{ item.created_at }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="link-center" style="cursor: pointer" v-on:click="clickReload()">
                        <p class="btn-second btn-md">Смотреть все</p>
                    </div>
                </div>
            </section>

        </main>

        <Footer></Footer>

    </div>

    </body>
</template>

<script>
    export default {
        props: ['page', 'news'],
        provide() {
            return {
                'page': this.page,
            }
        },
        data() {
            return {
                news_array: [],
                show_login: false,
                show_reg: false,
            }
        },
        name: "AppNews",
        mounted() {
            this.news_array = JSON.parse(JSON.stringify(this.news)).splice(0, 5);
        },
        methods: {
            clickReload() {
                this.news_array = JSON.parse(JSON.stringify(this.news));
            }
        }
    }
</script>

<style scoped>

</style>
