<script setup>

    import { Link } from '@inertiajs/vue3';
    import Register from "../Component/Modal/Register.vue";

</script>

<template>
    <header class="header">
        <div class="container header__container">
            <Link :href="route('main')" class="logo">
                <img src="/img/logo-black.png" alt="">
            </Link>
            <nav class="nav" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><Link :href="route('main')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 1 }">главная</Link></li>
                    <li class="nav__item"><Link href="/catalog?type_jk=1" class="nav__link" v-bind:class="{ 'nav__link-active': page === 2 }">каталог</Link></li>
<!--                    <li class="nav__item"><Link :href="route('flat')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 3 }">квартиры</Link></li>-->
                    <li class="nav__item"><Link :href="route('service')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 4 }">услуги</Link></li>
                    <li class="nav__item"><Link :href="route('news')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 5 }">новости</Link></li>
                    <li class="nav__item"><Link :href="route('about')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 6 }">о компании</Link></li>
                    <li class="nav__item"><Link :href="route('contact')" class="nav__link" v-bind:class="{ 'nav__link-active': page === 7 }">контакты</Link></li>
                </ul>
                <ul class="course__list">
                    <li class="course__item" v-for="(item, index) in course">
                        <div class="course__item-name">{{ item.name }}</div>
                        <div class="course__item-rate green-color">{{ item.price }} {{ index < 2 ? '$' : '₽' }}</div>
                    </li>
                </ul>
                <div class="nav__close" id="nav-close">
                    <i class="icomoon icon-close"></i>
                </div>
            </nav>
            <div class="nav__btns">
                <div id="ytWidget" style="display: none;"></div>
                <Link href="/favorites" class="btn-icon" v-if="auth === true">
                    <i class="icomoon icon-favourites"></i>
                </Link>
                <div class="lang">
                    <div class="lang-btn">
                        <img src="/img/lang/ru.svg" v-if="selectLang === 0" alt="Русский">
                        <img src="/img/lang/en.svg" v-else-if="selectLang === 1" alt="Английский">
                        <img src="/img/lang/cn.svg" v-else-if="selectLang === 2" alt="Китайский">
                    </div>
                    <div class="lang-content">
                        <div class="lang-btn" @click="SelectLangHead('ru')"><img src="/img/lang/ru.svg" alt="Русский"></div>
                        <div class="lang-btn" @click="SelectLangHead('en')"><img src="/img/lang/en.svg" alt="Английский"></div>
                        <div class="lang-btn" @click="SelectLangHead('zh')"><img src="/img/lang/cn.svg" alt="Китайский"></div>
                    </div>
                </div>
                <a href="#" class="btn-icon" id="search-btn" v-on:click="showSearch === true ? showSearch = false : showSearch = true">
                    <i class="icomoon icon-search" v-bind:class="{ 'icon-close': showSearch }"></i>
                </a>
                <a class="btn-icon to-state" data-state="login" @click="$emit('openLogin')" v-if="auth === false">
                    <i class="icomoon icon-login"></i>
                </a>
                <a class="btn-icon to-state" data-state="login" @click="getLogout" v-if="auth === true">
                    <i class="icomoon icon-login"></i>
                </a>
                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="icomoon icon-menu"></i>
                </div>
            </div>
        </div>
        <form class="search-bar-container" v-bind:class="{ 'active': showSearch }">
            <input type="search" id="search-bar" class="form-input" placeholder="Введите..." v-model="search" @input="getContent()">
            <label for="search-bar" class="icomoon icon-search"></label>

            <div class="search-vivod" style="width: 100%;display: block;" v-if="content.jk.length > 0 || content.flats.length > 0">
                <div>
                    <h1>Недвижимость (обьекты)</h1>
                        <div v-for="(item, idx) in content.jk">
                                <div class="s-card">
                                    <img :src="'/' + item.image" alt="">
                                    <div>
                                        <h3 class="heading-3">{{ item.title }}</h3>
                                        <div class="s-card-price">от {{ item.minPrice !== null ? item.minPrice.toLocaleString('ru') : 0 }} до {{ item.maxPrice !== null ? item.maxPrice.toLocaleString('ru') : 0 }}  ₽</div>
                                    </div>
                                    <Link :href="'/jk/' + item.slug" class="btn btn-md">Подробнее</Link>
                                </div>
                        </div>

                    <h1>Недвижимость (квартиры)</h1>
                    <div v-for="item in content.flats">
                            <div class="s-card">
                                <img :src="'/' + item.image" alt="">
                                <div>
                                    <h3 class="heading-3">{{ item.title }}</h3>
                                    <div class="s-card-price">{{ item.price.toLocaleString('ru') }} ₽</div>
                                </div>
                                <Link :href="'/jk/' + item.jk.slug + '/' + item.slug" class="btn btn-md">Подробнее</Link>
                            </div>
                    </div>


                </div>
            </div>
        </form>
    </header>
</template>

<script>

    import { router, useForm } from '@inertiajs/vue3'
    import { computed } from 'vue'
    import { usePage } from '@inertiajs/vue3'

    export default {
        inject:['page', 'user'],
        data() {
          return {
              showSearch: false,
              showReg: false,
              auth: false,
              search: '',
              content: {
                  jk: [],
                  flats: [],
              },
              course: computed(() => usePage().props.course),
              yatranslate: {
                  lang: "ru",
              },
              selectLang: 0,
          }
        },
        created() {
            if(this.user !== null) {
                this.auth = true;
            }
        },
        setup() {

        },
        mounted() {
            this.yaTranslateInit();
        },
        methods: {

            SelectLangHead(lang) {

                this.yatranslate.lang = lang
                this.yaTranslateSetLang(lang);
                // Перезагружаем страницу
                window.location.reload();
            },
            yaTranslateInit() {

                if (this.yatranslate.langFirstVisit && !localStorage.getItem('yt-widget')) {
                    /* Если установлен язык перевода для первого посещения и в localStorage нет yt-widget */
                    this.yaTranslateSetLang(this.yatranslate.langFirstVisit);
                }

                if(JSON.parse(localStorage.getItem('yt-widget')).lang == 'ru') {
                    this.selectLang = 0;
                } else if (JSON.parse(localStorage.getItem('yt-widget')).lang == 'en') {
                    this.selectLang = 1;
                } else if (JSON.parse(localStorage.getItem('yt-widget')).lang == 'zh') {
                    this.selectLang = 2;
                }

                // Подключаем виджет yandex translate
                let script = document.createElement('script');
                script.src = `https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=${this.yatranslate.lang}&widgetTheme=light&autoMode=false`;
                document.getElementsByTagName('head')[0].appendChild(script);
            },
            yaTranslateSetLang(lang) {
                // Записываем выбранный язык в localStorage объект yt-widget
                localStorage.setItem('yt-widget', JSON.stringify({
                    "lang": lang,
                    "active": true
                }));
            },

            getContent() {

                axios.post('/api/search/get', {
                    title: this.search
                }).then(res => {
                    this.content = res.data;

                })

            },
            getLogout() {
                const form = useForm({});

                form.post('/logout');
            }
        },
        name: "Header"
    }
</script>

<style scoped>

</style>
