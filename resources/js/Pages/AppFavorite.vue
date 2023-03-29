<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import CatalogHouse from "@/Components/Component/CatalogHouse.vue";
    import CatalogFlat from "@/Components/Component/CatalogFlat.vue";

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
                    <div class="heading-row">
                        <div class="heading">
                            <h1 class="heading-1">Избранное</h1>
                        </div>
                        <div class="catalog-select">
                            <select class="form-input select-sort" name="sort">
                                <option v-on:click="setType(0)" :selected="type_fillter === 0">Новостройки ({{ jk.length }})</option>
                                <option v-on:click="setType(1)" :selected="type_fillter === 1">Котеджные поселки ({{ villages.length }})</option>
                                <option v-on:click="setType(2)" :selected="type_fillter === 2">Квартиры ({{ flat.length }})</option>
                                <option v-on:click="setType(3)" :selected="type_fillter === 3">Виллы ({{ villa.length }})</option>
                                <option v-on:click="setType(4)" :selected="type_fillter === 4">Шалле ({{ shale.length }})</option>
                                <option v-on:click="setType(5)" :selected="type_fillter === 5">Коммерческие недвижимости ({{ ecom.length }})</option>
                            </select>
                        </div>
                    </div>
                    <CatalogHouse v-if="type_fillter === 0" :jk="jk"></CatalogHouse>
                    <CatalogHouse v-if="type_fillter === 1" :jk="villages"></CatalogHouse>
                    <CatalogFlat v-if="type_fillter === 2" :spliceStatus="true" :jk="flat" :user="user"></CatalogFlat>
                    <CatalogFlat v-if="type_fillter === 3" :spliceStatus="true" :jk="villa" :user="user"></CatalogFlat>
                    <CatalogFlat v-if="type_fillter === 4" :spliceStatus="true" :jk="shale" :user="user"></CatalogFlat>
                    <CatalogFlat v-if="type_fillter === 5" :spliceStatus="true" :jk="ecom" :user="user"></CatalogFlat>

                    <div v-if="checkEmpty()">
                        <div class="content-box" style="height: 150px">
                            <p class="align-items-center">
                                В избранном пока что ничего нет
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <Footer></Footer>

    </div>
    </body>
</template>

<script>
    import { Inertia } from '@inertiajs/inertia'

    export default {
        name: "AppFavorite",
        props: [
            'page',
            'jk',
            'user',
            'villages',
            'villa',
            'flat',
            'shale',
            'ecom',
            'type_fillter'
        ],
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
        methods: {
            setType(type) {
                this.$inertia.visit('/favorites?type_fillter=' + type);
            },
            checkEmpty() {

                if(this.type_fillter === 0) {
                    return this.jk.length === 0;
                } else if (this.type_fillter === 1) {
                    return this.villages.length === 0;
                } else if (this.type_fillter === 2) {
                    return this.flat.length === 0;
                } else if (this.type_fillter === 3) {
                    return this.villa.length === 0;
                } else if (this.type_fillter === 4) {
                    return this.shale.length === 0;
                } else if (this.type_fillter === 5) {
                    return this.ecom.length === 0;
                }

            }
        }
    }
</script>

<style scoped>

</style>
