<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import CatalogHouse from "@/Components/Component/CatalogHouse.vue";
</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false" @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <main class="page-catalog">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <span>Избранное</span>
                </nav>
            </div>

            <section class="catalog">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Избранное</h1>
                    </div>
                    <CatalogHouse :jk="jk"></CatalogHouse>
                </div>
            </section>
        </main>

        <Footer></Footer>

    </div>
    </body>
</template>

<script>
    export default {
        name: "AppFavorite",
        props: ['page', 'jk', 'user'],
        provide() {
            return {
                'page': this.page,
                'user': this.user,
            }
        },
        created() {
            window.scrollTo({
                top: 1000,
                behavior: 'smooth'
            });
        },
        data() {
            return {
                show: false,
                show_login: false,
                show_reg: false,
            }
        },
    }
</script>

<style scoped>

</style>
