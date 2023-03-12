<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";
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
                    <span>Каталог</span>
                </nav>
            </div>

            <section class="catalog">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Каталог недвижимости</h1>
                    </div>
                    <div class="filter" v-bind:class="{ 'filter-open': show }" id="filterTabs">
                        <!-- Кнопки -->
                        <ul class="filter-nav">
                            <li><a href="#tab-111">Купить</a></li>
                            <li><a href="#tab-222">Снять</a></li>
                            <li><a href="#tab-333">Посуточно</a></li>
                            <li><a href="#tab-444">VR</a></li>
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
                                                <option :selected="type == 4" v-on:click="visit(4)">Коммерческая недвижимость</option>
                                            </select>
                                        </div>
                                        <div class="filter-radio-group">
                                            <span class="filter-radio-group-title">Студия</span>
                                            <label for="1" class="filter-radio">
                                                <input type="radio" id="1" name="studia" class="filter-radio__input"
                                                       checked>
                                                <span>1</span>
                                            </label>
                                            <label for="2" class="filter-radio">
                                                <input type="radio" id="2" name="studia" class="filter-radio__input">
                                                <span>2</span>
                                            </label>
                                            <label for="3" class="filter-radio">
                                                <input type="radio" id="3" name="studia" class="filter-radio__input">
                                                <span>3</span>
                                            </label>
                                            <label for="4+" class="filter-radio">
                                                <input type="radio" id="4+" name="studia" class="filter-radio__input">
                                                <span>4+</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="filter-col">
                                        <div for="" class="form-label form-label-range">
                                            <label class="form-range-group">
                                                от <input id="start" type="number" value=""> ₽
                                            </label>
                                            <span class="form-range-separator">–</span>
                                            <label class="form-range-group">
                                                до <input id="end" type="number" value=""> ₽
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
                                        <label for="" class="form-label form-label--location">
                                            <input type="text" name="" id="" class="form-input"
                                                   placeholder="Город, адрес, район, ЖК">
                                        </label>
                                    </div>
                                </div>
                                <div class="filter-hide" v-show="show">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input id="" type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input id="" type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Площадь кухни:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input id="" type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input id="" type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Жилая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input id="" type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input id="" type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="filter-row-flex">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Условия проживания</div>
                                            <div class="radio-group">
                                                <label for="uslovia1" class="radio">
                                                    <input type="radio" id="uslovia1" name="uslovia"
                                                           class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="uslovia2" class="radio">
                                                    <input type="radio" id="uslovia2" name="uslovia"
                                                           class="radio__input">
                                                    <span>Можно с детьми</span>
                                                </label>
                                                <label for="uslovia3" class="radio">
                                                    <input type="radio" id="uslovia3" name="uslovia"
                                                           class="radio__input">
                                                    <span>Можно с животными</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Планировка</div>
                                            <div class="radio-group">
                                                <label for="planirovka1" class="radio">
                                                    <input type="radio" id="planirovka1" name="planirovka"
                                                           class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="planirovka2" class="radio">
                                                    <input type="radio" id="planirovka2" name="planirovka"
                                                           class="radio__input">
                                                    <span>Смежная</span>
                                                </label>
                                                <label for="planirovka3" class="radio">
                                                    <input type="radio" id="planirovka3" name="planirovka"
                                                           class="radio__input">
                                                    <span>Изолированная</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-col">
                                            <div class="filter-col-title">Апартаменты</div>
                                            <div class="radio-group">
                                                <label for="apart1" class="radio">
                                                    <input type="radio" id="apart1" name="apart" class="radio__input">
                                                    <span>Неважно</span>
                                                </label>
                                                <label for="apart2" class="radio">
                                                    <input type="radio" id="apart2" name="apart" class="radio__input">
                                                    <span>Без апартаментов</span>
                                                </label>
                                                <label for="apart3" class="radio">
                                                    <input type="radio" id="apart3" name="apart" class="radio__input">
                                                    <span>Только апартаменты</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-222">
                                <div class="filter-hide" style="display: none;">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-333">
                                <div class="filter-hide" style="display: none;">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-item" id="tab-444">
                                <div class="filter-hide" style="display: none;">
                                    <div class="filter-row-3">
                                        <div class="filter-col">
                                            <div class="filter-col-title">Общая площадь:</div>
                                            <label for="" class="form-label form-label-range">
                                                <div class="form-range-group">
                                                    от <input type="number" value="">
                                                </div>
                                                <span class="form-range-separator">–</span>
                                                <div class="form-range-group">
                                                    до <input type="number" value=""> м²
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-btns">
                            <div class="filter-btns-left">
                                <button class="filter-more filter-toggle" v-bind:class="{ 'filter-close': show }"
                                        v-on:click="show === false ? show = true : show = false">
                                    <div v-if="show === false" style="display: inline-flex; align-items: center">
                                        <i class="icomoon icon-filter"></i><span>Расширенный поиск</span>
                                    </div>
                                    <div v-else style="display: inline-flex; align-items: center">
                                        <span>Свернуть</span><i class="icomoon icon-chevron-up"></i>
                                    </div>

                                </button>
                                <button class="filter-reset">
                                    Сбросить всё
                                </button>
                            </div>
                            <div class="filter-btns-right">
                                <button class="btn-border btn-lg">
                                    <i class="icomoon icon-location-bold"></i>
                                    Смотреть на карте
                                </button>
                                <button class="btn btn-lg">
                                    Показать 100 объявлений
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
                    <CatalogFlat :jk="getFilters"></CatalogFlat>
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
    import { router } from '@inertiajs/vue3'

    export default {
        name: "AppCatalog",
        props: [
            'page',
            'jk',
            'type',
            'user',

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

        },
        created() {
            window.scrollTo({
                top: 1000,
                behavior: 'smooth'
            });
        },
        methods: {
            visit(id) {
                router.visit('/catalog?type_jk=' + id);
            }
        },
        data() {
            return {
                show: false,
                show_login: false,
                show_reg: false,
                filter_type: 1,
            }
        },
        computed: {
            getFilters() {
                if(this.filter_type === 0) {
                    return this.jk.sort((a, b) => a.price - b.price );
                } else if(this.filter_type === 1) {
                    return this.jk.sort((a, b) => a.price - b.price );
                } else if(this.filter_type === 2) {
                    return this.jk.sort((a, b) => b.price - a.price );
                } else if(this.filter_type === 3) {
                    return this.jk.sort((a, b) => b.square_main - a.square_main);
                } else if(this.filter_type === 4) {
                    return this.jk.sort((a, b) => new Date(a.updated_at) - new Date(b.updated_at) );
                } else if(this.filter_type === 5) {
                    return this.jk.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at) );
                }

            }
        }
    }
</script>

<style scoped>
</style>
