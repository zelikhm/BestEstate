<script setup>

    import Header from '../Components/Component/Header.vue';
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import { Head } from '@inertiajs/vue3'

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->
        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false" @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <Head>
            <title>Новость - {{info.title}}</title>
            <meta name="description" content="главная">
        </Head>

        <main class="page-article">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <Link :href="route('news')">Новости</link>
                    <span>Статья “{{ info.title }}”</span>
                </nav>
            </div>

            <section class="article">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">{{ info.title }}</h1>
                        <div class="date">{{ info.created_at }}</div>
                    </div>
                    <div class="article-content" v-html="info.description">

                    </div>
                </div>
            </section>

            <section class="other-news">
                <div class="container">
                    <div class="heading">
                        <h2 class="heading-2">Другие статьи:</h2>
                    </div>
                    <div class="news__cards">
                        <div class="news__cards-row">
                            <div class="news__item" v-for="item in news">
                                <div class="news__item-img"><img :src="item.image" alt=""></div>
                                <div class="news__item-content">
                                    <div class="news__item-heading">
                                        <h3 class="heading-2">{{ item.title }}</h3>
                                    </div>
                                    <div class="news__item-nav">
                                        <Link :href="'/news/' + item.slug" class="btn btn-xl">Читать статью</Link>
                                        <div class="date">{{ item.created_at }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <Footer></Footer>

        </main>
    </div>
    </body>
</template>

<script>
    export default {
        props:['page', 'info', 'news'],
        provide() {
            return {
                'page': this.page,
            }
        },
        data() {
            return {
                show_login: false,
                show_reg: false,
            }
        },
        name: "AppNew"
    }
</script>

<style scoped>

</style>
