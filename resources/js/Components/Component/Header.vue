<script setup>

    import { Link } from '@inertiajs/vue3';
    import Register from "../Component/Modal/Register.vue";

</script>

<template>
    <header class="header">
        <div class="container header__container">
            <a :href="route('main')" class="logo">
                <img src="img/logo-black.png" alt="">
            </a>
            <nav class="nav" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><Link :href="route('main')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 1 }">главная</Link></li>
                    <li class="nav__item"><Link :href="route('catalog')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 2 }">каталог</Link></li>
                    <li class="nav__item"><Link :href="route('flat')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 3 }">квартиры</Link></li>
                    <li class="nav__item"><Link :href="route('service')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 4 }">услуги</Link></li>
                    <li class="nav__item"><Link :href="route('news')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 5 }">новости</Link></li>
                    <li class="nav__item"><Link :href="route('about')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 6 }">о компании</Link></li>
                    <li class="nav__item"><Link :href="route('contact')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 7 }">контакты</Link></li>
                </ul>
                <ul class="course__list">
                    <li class="course__item">
                        <div class="course__item-name">BTC</div>
                        <div class="course__item-rate green-color">$ 43 212,3</div>
                    </li>
                    <li class="course__item">
                        <div class="course__item-name">ETH</div>
                        <div class="course__item-rate green-color">$ 2 887,61</div>
                    </li>
                    <li class="course__item">
                        <div class="course__item-name">USD</div>
                        <div class="course__item-rate green-color">117,43 ₽</div>
                    </li>
                    <li class="course__item">
                        <div class="course__item-name">CNY</div>
                        <div class="course__item-rate red-color">16,36 ₽</div>
                    </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="icomoon icon-close"></i>
                </div>
            </nav>
            <div class="nav__btns">
                <a href="#" class="btn-icon">
                    <i class="icomoon icon-favourites"></i>
                </a>
                <div class="lang">
                    <div class="lang-btn"><img src="img/lang/ru.svg" alt="Русский"></div>
                    <div class="lang-content">
                        <div class="lang-btn"><img src="img/lang/ru.svg" alt="Русский"></div>
                        <div class="lang-btn"><img src="img/lang/en.svg" alt="Английский"></div>
                        <div class="lang-btn"><img src="img/lang/cn.svg" alt="Китайский"></div>
                    </div>
                </div>
                <a href="#" class="btn-icon" id="search-btn" v-on:click="showSearch === true ? showSearch = false : showSearch = true">
                    <i class="icomoon icon-search" v-bind:class="{ 'icon-close': showSearch }"></i>
                </a>
                <a class="btn-icon to-state" data-state="login" @click="$emit('openLogin')">
                    <i class="icomoon icon-login"></i>
                </a>
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="icomoon icon-menu"></i>
                </div>
            </div>
        </div>
        <form action="" class="search-bar-container" v-bind:class="{ 'active': showSearch }">
            <input type="search" id="search-bar" class="form-input" placeholder="Введите...">
            <label for="search-bar" class="icomoon icon-search"></label>
        </form>

    </header>
</template>

<script>
    export default {
        inject:['page'],
        data() {
          return {
              showSearch: false,
              showReg: false,
          }
        },
        mounted() {
            console.log(this.page);
        },
        name: "Header"
    }
</script>

<style scoped>

</style>
