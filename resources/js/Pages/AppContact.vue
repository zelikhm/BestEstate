<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import { Link } from '@inertiajs/vue3';
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
            <title>Контакты</title>
            <meta name="description" content="главная">
        </Head>

        <main class="page-contacts">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <span>Контакты</span>
                </nav>
            </div>

            <section class="contacts">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Контактная информация</h1>
                    </div>
                    <div class="contacts__group">
                        <div class="contacts__group-item">
                            <h2 class="heading-2">Мы всегда на связи:</h2>
                            <div class="contacts__group-item-group">
                                <a href="tel:79670643224" class="btn btn-border btn-md"><i
                                    class="icomoon icon-calling-bold"></i><span>{{ contact.phone }}</span></a>
                                <a href="#" class="btn btn-md to-state" data-state="connection" v-on:click="activeForm = !activeForm">Позвоните мне</a>
                            </div>
                        </div>
                        <div class="contacts__group-item">
                            <h2 class="heading-2">Наши соц.сети</h2>
                            <ul class="contacts-social">
                                <li v-for="soc in social">
                                    <img :src="soc.icon" alt="">
                                    <a :href="soc.link" target="_blank">{{ soc.title }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contacts-rekvizity">
                        <h2 class="heading-2">Реквизиты:</h2>
                        <ul class="rekvizity">
                            <li class="rekvizity-item" v-for="item in info">
                                <div class="rekvizity-title">{{ item.title }}</div>
                                <div class="rekvizity-value">{{ item.name }}</div>
                            </li>
                        </ul>
                    </div>
                    <div class="contacts-location">
                        <h2 class="heading-2">Где мы находимся</h2>
                        <GoogleMap></GoogleMap>
                    </div>
                </div>
            </section>
        </main>
        <Footer></Footer>
    </div>
    </body>

    <ContactForm :active="activeForm" @closeForm="activeForm = !activeForm"></ContactForm>

</template>

<script>
    import GoogleMap from "../Components/Component/GoogleMap.vue";
    import ContactForm from "@/Components/Component/Forms/ContactForm.vue";

    export default {
        components: {
            GoogleMap,
            ContactForm
        },
        props: ['page', 'contact', 'social', 'info'],
        provide() {
            return {
                'key': 'AIzaSyBo8Ws9ujugchMacJ3BNAvGWTn6b1cmtJ4',
                'page': this.page,
            }
        },
        data() {
            return {
                show_login: false,
                show_reg: false,
                activeForm: false,
            }
        },
        name: "AppContact",
        mounted() {

        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
