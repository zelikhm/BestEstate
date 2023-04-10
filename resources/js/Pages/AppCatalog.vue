<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import {Link} from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
    import CatalogFlat from "@/Components/Component/CatalogFlat.vue";
    import { Head } from '@inertiajs/vue3'

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false"
                           @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <Head>
            <title>Каталог</title>
            <meta name="description" content="главная">
        </Head>

        <main class="page-catalog">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <span>Каталог</span>
                </nav>
            </div>

            <section class="catalog">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Каталог {{ type == 1 ? 'квартир' : type == 2 ? 'вилл' : type == 3 ?
                            'шалле' : 'коммерческой недвижимости' }}</h1>
                    </div>
                    <div class="filter" v-bind:class="{ 'filter-open': show }" id="filterTabs">
                        <!-- Кнопки -->
                        <ul class="filter-nav">
                            <li><a style="cursor: pointer" v-bind:class="{ 'active': type_cost == 1 }"
                                   v-on:click="type_cost = 1">Купить</a></li>
                            <li><a style="cursor: pointer" v-bind:class="{ 'active': type_cost == 2 }"
                                   v-on:click="type_cost = 2">Снять</a></li>
                            <li><a style="cursor: pointer" v-bind:class="{ 'active': type_cost == 3 }"
                                   v-on:click="type_cost = 3">Посуточно</a></li>
                            <li><a style="cursor: pointer" v-bind:class="{ 'active': type_cost == 4 }"
                                   v-on:click="type_cost = 4">VR</a></li>
                        </ul>
                        <!-- Контент -->
                        <div class="tabs-items">
                            <div class="tabs-item" id="tab-111">
                                <div class="filter-row-3">
                                    <div class="filter-col filter-col-2">
                                        <div class="select select-house">
                                            <select class="form-input select-default" name="house">
                                                <option :selected="type == 1" v-on:click="visit(1)">Квартира</option>
                                                <option :selected="type == 2" v-on:click="visit(2)">Вилла</option>
                                                <option :selected="type == 3" v-on:click="visit(3)">Шалле</option>
                                                <option :selected="type == 4" v-on:click="visit(4)">Коммерческая
                                                    недвижимость
                                                </option>
                                            </select>
                                        </div>
                                        <div class="filter-radio-group" v-if="type == 1">
<!--                                            <span class="filter-radio-group-title">Комнат</span>-->
                                            <label for="0" class="filter-radio">
                                                <input v-on:click="plan = 0, getCount()" type="radio" id="0" name="studia"
                                                       class="filter-radio__input" :checked="plan === 0">
                                                <span>Студия</span>
                                            </label>
                                            <label for="1" class="filter-radio">
                                                <input v-on:click="plan = 1, getCount()" type="radio" id="1" name="studia"
                                                       class="filter-radio__input" :checked="plan === 1">
                                                <span>1</span>
                                            </label>
                                            <label for="2" class="filter-radio">
                                                <input v-on:click="plan = 2, getCount()" type="radio" id="2" name="studia"
                                                       class="filter-radio__input" :checked="plan === 2">
                                                <span>2</span>
                                            </label>
                                            <label for="3" class="filter-radio">
                                                <input v-on:click="plan = 3, getCount()" type="radio" id="3" name="studia"
                                                       class="filter-radio__input" :checked="plan === 3">
                                                <span>3</span>
                                            </label>
                                            <label for="4+" class="filter-radio">
                                                <input v-on:click="plan = 4, getCount()" type="radio" id="4+" name="studia"
                                                       class="filter-radio__input" :checked="plan === 4">
                                                <span>4+</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="filter-col">
                                        <div for="" class="form-label form-label-range">
                                            <label class="form-range-group">
                                                от <input id="start" type="number" @input="getCount()" v-model="price.min"> ₽
                                            </label>
                                            <span class="form-range-separator">–</span>
                                            <label class="form-range-group">
                                                до <input id="end" type="number" @input="getCount()" v-model="price.max"> ₽
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="filter-col">
                                      <label for="" class="form-label form-label-range">
                                        <div class="form-range-group">
                                          от <input id="start" type="number" value=""> ₽
                                        </div>
                                        <span class="form-range-separator">–</span>
                                        <div class="form-range-group">
                                          до <input id="end" type="number" value=""> ₽
                                        </div>
                                      </label>
                                    </div> -->
                                    <div class="filter-col">
                                        <label class="form-label form-label--location">
                                            <select class="form-input" v-model="selected">
                                                <option disabled value="">Выберите один из вариантов</option>
                                                <option v-on:click="city_select = city.id, getCount()" v-for="city in cities">{{ city.city_name }}</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-hide" v-show="show">
                                    <div class="filter-row-flex">
                                        <div class="filter-col" v-for="(item, idx) in options" :key="item.id">
                                            <div class="filter-col-title">{{ item.name }}</div>
                                            <div class="radio-group">
                                                <label :for="'block' + idx + 'id' + index" class="checkbox"
                                                       v-for="(option, index) in item.opt" :key="option.id">
                                                    <input v-on:click="check()" v-model="options[idx].opt[index].active"
                                                           type="checkbox" :id="'block' + idx + 'id' + index"
                                                           name="uslovia"
                                                           class="radio__input">
                                                    <span>{{ option.title }}</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-btns">
                            <div class="filter-btns-left">
                                <button class="filter-more filter-toggle" v-bind:class="{ 'filter-close': show }"
                                        v-on:click="show = !show">
                                    <div v-if="show === false" style="display: inline-flex; align-items: center">
                                        <i class="icomoon icon-filter"></i><span>Расширенный поиск</span>
                                    </div>
                                    <div v-else style="display: inline-flex; align-items: center">
                                        <span>Свернуть</span><i class="icomoon icon-chevron-up"></i>
                                    </div>

                                </button>
                                <Link :href="'/catalog?type_jk=' + type + '&method=' + type_cost" class="filter-reset">
                                    Сбросить всё
                                </Link>
                            </div>
                            <div class="filter-btns-right">
                                <button class="btn-border btn-lg" v-on:click="getMap()">
                                    <i class="icomoon icon-location-bold"></i>
                                    Смотреть на карте
                                </button>
                                <button class="btn btn-lg" v-on:click="sendOptions()" v-if="preloader === false">
                                    Показать {{ count }} объявлений
                                </button>
                                <button class="btn btn-lg" v-else>
                                    <div class="loader"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-select">
                        <select class="form-input select-sort" name="sort">
                            <option v-on:click="filter_type = 1">По цене (сначала дешевле)</option>
                            <option v-on:click="filter_type = 2">По цене (сначала дороже)</option>
                            <option v-on:click="filter_type = 3">По общей площади</option>
                            <option v-on:click="filter_type = 4">По дате добавления (сначала старые)</option>
                            <option v-on:click="filter_type = 5">По дате добавления (сначала новые)</option>
                        </select>
                    </div>
                    <CatalogFlat :spliceStatus="false" :jk="getFilters" :user="user"></CatalogFlat>
                    <div class="link-center" v-if="load">
                        <button class="btn btn-xl" v-on:click="loadCount += 20">Показать ещё</button>
                    </div>
<!--                    <button  >Показать еще</button>-->
                </div>
            </section>

            <Form2></Form2>

        </main>

        <Footer></Footer>

    </div>
    </body>
</template>

<script>
    import Form2 from "../Components/Component/Forms/Form2.vue";
    import {router, useForm} from '@inertiajs/vue3'

    export default {
        name: "AppCatalog",
        props: [
            'page',
            'jk',
            'type',
            'user',
            'options',
            'method_cost',
            'cities'
        ],
        components: {
            Form2
        },
        provide() {
            return {
                'page': this.page,
                'user': this.user,
            }
        },
        mounted() {
            this.type_cost = this.method_cost;
            this.getCount();
        },
        created() {
            window.scrollTo({
                top: 1000,
                behavior: 'smooth'
            });
        },
        methods: {
            getMap() {
                const form = useForm({
                    'type_jk': this.type,
                    'options': this.options,
                    'price': this.price,
                    'city': this.city,
                    'plan': this.plan,
                    'cost': this.type_cost
                })

                router.post('/map', form);
            },
            getCount() {
                this.preloader = true;

                axios.post('/api/getCountFlats', {
                    'type_jk': this.type,
                    'options': this.options,
                    'price': this.price,
                    'city': this.city_select,
                    'plan': this.plan,
                    'cost': this.type_cost
                }).then(res => {
                    this.count = res.data;
                    this.preloader = false;
                })
            },
            visit(id) {
                router.visit('/catalog?type_jk=' + id);
            },
            check() {
                this.getCount();
            },
            sendOptions() {

                const form = useForm({
                    'type_jk': this.type,
                    'options': this.options,
                    'price': this.price,
                    'city': this.city,
                    'plan': this.plan,
                    'cost': this.type_cost
                })

                router.post('/catalog?type_jk=' + this.type + '&type_cost=' + this.type_cost, form);

            }
        },
        data() {
            return {
                show: false,
                show_login: false,
                show_reg: false,
                filter_type: 1,
                type_cost: 1,
                price: {
                    min: 0,
                    max: 0,
                },
                plan: 5,
                load: false,
                loadCount: 20,
                count: 0,
                preloader: true,
                city_select: 0,
            }
        },
        computed: {
            getFilters() {

                if (this.jk.length > this.loadCount) {
                    this.load = true;
                } else {
                    this.load = false;
                }

                if (this.filter_type === 0) {
                    let arr = Object.values(this.jk).splice(0, this.loadCount);
                    return arr.sort((a, b) => a.price - b.price);
                } else if (this.filter_type === 1) {
                    let arr = Object.values(this.jk).splice(0, this.loadCount);
                    return arr.sort((a, b) => a.price - b.price);
                } else if (this.filter_type === 2) {
                    let arr = Object.values(this.jk).splice(0, this.loadCount);
                    return arr.sort((a, b) => b.price - a.price);
                } else if (this.filter_type === 3) {
                    let arr = Object.values(this.jk).splice(0, this.loadCount);
                    return arr.sort((a, b) => b.square_main - a.square_main);
                } else if (this.filter_type === 4) {
                    let arr = Object.values(this.jk).splice(0, this.loadCount);
                    return arr.sort((a, b) => new Date(a.updated_at) - new Date(b.updated_at));
                } else if (this.filter_type === 5) {
                    let arr = Object.values(this.jk).splice(0, this.loadCount);
                    return arr.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at));
                }

            }
        }
    }
</script>

<style scoped>
    .loader {
        border: 10px solid #f3f3f3; /* Light grey */
        border-top: 10px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 10px;
        height: 10px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
