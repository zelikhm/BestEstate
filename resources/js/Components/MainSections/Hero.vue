<template>
    <section class="hero">

        <div class="container">
            <div class="slider-container">
                <!--                        <a href="#" class="location to-state" data-state="city">-->
                <!--                            <i class="icomoon icon-location"></i>-->
                <!--                            <span>Москва</span>-->
                <!--                        </a>-->
                <!-- Swiper -->
                <div class="swiper heroSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="heroSwiper-slide heroSwiper-slide-1">
                                <div class="container--fluid">
                                    <h1 class="heading-1">Аренда недвижимости на&nbsp;В&nbsp;МОСКВЕ И СОЧИ</h1>
                                    <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                        порталах и маркетплейсах
                                        компании</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="heroSwiper-slide heroSwiper-slide-2">
                                <div class="container--fluid">
                                    <h1 class="heading-1">Аренда недвижимости В&nbsp;СОЧИ</h1>
                                    <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                        порталах и маркетплейсах
                                        компании</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="heroSwiper-slide heroSwiper-slide-3">
                                <div class="container--fluid">
                                    <h1 class="heading-1">Аренда недвижимости на&nbsp;В&nbsp;МОСКВЕ И СОЧИ</h1>
                                    <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                        порталах и маркетплейсах
                                        компании</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="heroSwiper-slide heroSwiper-slide-4">
                                <div class="container--fluid">
                                    <h1 class="heading-1">Аренда недвижимости В&nbsp;СОЧИ</h1>
                                    <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических
                                        порталах и маркетплейсах
                                        компании</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="container--fluid">
                <div class="filter">
                    <ul class="filter-nav">
                        <li style="cursor: pointer"><a v-on:click="type = 1" :class="{'active': type == 1}">Купить</a></li>
                        <li style="cursor: pointer"><a v-on:click="type = 2" :class="{'active': type == 2}">Снять</a></li>
                        <li style="cursor: pointer"><a v-on:click="type = 3" :class="{'active': type == 3}">Посуточно</a></li>
                        <li style="cursor: pointer"><a v-on:click="type = 4" :class="{'active': type == 4}">VR</a></li>
                    </ul>
                    <div class="filter-row-3">
                        <div class="filter-col filter-col-2">
                            <div class="select select-house">
                                <select class="form-input select-default" name="house">
                                    <option v-on:click="type_jk = 1" value="">Квартиру</option>
                                    <option v-on:click="type_jk = 2" value="">Виллу</option>
                                    <option v-on:click="type_jk = 3" value="">Шалле</option>
                                    <option v-on:click="type_jk = 4" value="">Коммерческая недвижимость</option>
                                </select>
                            </div>
                            <div class="filter-radio-group" v-if="type_jk === 1">
                                <label for="0" class="filter-radio">
                                    <input v-on:click="plan = 0" type="radio" id="0" name="studia"
                                           class="filter-radio__input" :checked="plan === 0">
                                    <span>студия</span>
                                </label>
                                <label for="1" class="filter-radio">
                                    <input v-on:click="plan = 1" type="radio" id="1" name="studia"
                                           class="filter-radio__input" :checked="plan === 1">
                                    <span>1</span>
                                </label>
                                <label for="2" class="filter-radio">
                                    <input v-on:click="plan = 2" type="radio" id="2" name="studia"
                                           class="filter-radio__input" :checked="plan === 2">
                                    <span>2</span>
                                </label>
                                <label for="3" class="filter-radio">
                                    <input v-on:click="plan = 3" type="radio" id="3" name="studia"
                                           class="filter-radio__input" :checked="plan === 3">
                                    <span>3</span>
                                </label>
                                <label for="4+" class="filter-radio">
                                    <input v-on:click="plan = 4" type="radio" id="4+" name="studia"
                                           class="filter-radio__input" :checked="plan === 4">
                                    <span>4+</span>
                                </label>
                            </div>
                        </div>
                        <div class="filter-col">
                            <div for="" class="form-label form-label-range">
                                <label class="form-range-group">
                                    от <input id="start" type="number" @input="getCountHouse" v-model="price.min"> ₽
                                </label>
                                <span class="form-range-separator">–</span>
                                <label class="form-range-group">
                                    до <input id="end" type="number" @input="getCountHouse" v-model="price.max"> ₽
                                </label>
                            </div>
                        </div>
                        <div class="filter-col">
                            <label class="form-label form-label--location">
                                <select class="form-input" v-model="selected">
                                    <option disabled value="">Выберите один из вариантов</option>
                                    <option v-on:click="city_select = city.id, getCountHouse()" v-for="city in cities">{{ city.city_name }}</option>
                                </select>
                            </label>
                        </div>
                        <div class="filter-hide" v-show="show">
                            <div class="filter-row-flex">
                                <div class="filter-col" v-for="(item, idx) in option_array" :key="item.id">
                                    <div class="filter-col-title">{{ item.name }}</div>
                                    <div class="radio-group">
                                        <label :for="'block' + idx + 'id' + index" class="checkbox"
                                               v-for="(option, index) in item.opt" :key="option.id">
                                            <input v-on:click="getCountHouse()" v-model="option_array[idx].opt[index].active"
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
                    <div class="filter-btns">
                        <div class="filter-btns-left">
                            <button class="filter-more" v-on:click="show = !show">
                                <i class="icomoon icon-filter"></i>
                                Расширенный поиск
                            </button>
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
            </div>

        </div>

    </section>
</template>

<script>
    import {router, useForm} from "@inertiajs/vue3";

    export default {
        props:['options', 'cities'],
        name: "Hero",
        data() {
            return {
                type: 1,
                type_jk: 1,
                option_array: {},
                show: false,
                plan: 0,
                price: {
                    min: 0,
                    max: 0,
                },
                count: 0,
                preloader: true,

                city_select: 0,

            }
        },
        watch: {
            type_jk(item) {
                this.option_array = this.opt.find(item => item.type === this.type_jk).opt;

                this.getCountHouse();
            },
            plan(item) {
                this.getCountHouse();
            },
            type() {
                this.getCountHouse();
            }
        },
        created() {

            this.option_array = this.options.find(item => item.type === this.type_jk).options;
            this.getCountHouse();

        },
        methods: {
            getMap() {
                const form = useForm({
                    'type_jk': this.type_jk,
                    'options': this.option_array,
                    'price': this.price,
                    'city': this.city_select,
                    'plan': this.plan,
                    'cost': this.type
                })

                router.post('/map', form);
            },
            getCountHouse() {
                this.preloader = true;

                axios.post('/api/getCountFlats', {
                    'type_jk': this.type_jk,
                    'options': this.option_array,
                    'price': this.price,
                    'city': this.city_select,
                    'plan': this.plan,
                    'cost': this.type
                }).then(res => {
                    this.count = res.data;
                    this.preloader = false;
                })

            },
            sendOptions() {

                const form = useForm({
                    'type_jk': this.type_jk,
                    'options': this.option_array,
                    'price': this.price,
                    'city': this.city_select,
                    'plan': this.plan,
                    'cost': this.type
                })

                router.post('/catalog?type_jk=' + this.type_jk + '&type_cost=' + this.type, form);

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
