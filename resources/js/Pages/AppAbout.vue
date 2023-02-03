<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'

</script>


<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header></Header>

        <main class="page-about">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <a href="index.html">Главная</a>
                    <span>О компании</span>
                </nav>
            </div>

            <section class="about">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">О компании <span>Russia Best Real Estate</span></h1>
                        <p class="text-1">Мы собрали лучшую недвижимость Москвы и Сочи на&nbsp;тематических порталах и
                            маркетплейсах компании</p>
                    </div>
                    <div class="about-content">
                        <h2 class="heading-2">Агентство недвижимости</h2>
                        <p>
                            Агентство недвижимости Russia Best Estate предоставляет услуги с 2010 года по покупке,
                            продаже, сдаче в аренду
                            недвижимости в России. Нашими Клиентами являются физические и юридические лица, а также VR
                            World NFT. Мы познакомим вас
                            с новым форматом недвижимости 3D туры прямо из вашего устройства.
                        </p>
                        <p>
                            Агентство недвижимости "RBE" оказывает услуги на рынке недвижимости во всех сегментах
                            городской, загородной,
                            коммерческой и элитной недвижимости.
                        </p>
                        <p>
                            Мы готовы помочь Вам купить, продать, обменять недвижимость, оформить права собственности с
                            выгодой и комфортом для Вас.
                            Наши сотрудники проконсультируют Вас как правильно сдать и снять квартиру, коммерческую или
                            загородную недвижимость,
                            помогут разобраться в сложных ситуациях.
                        </p>
                        <p>
                            Агентство недвижимости "Russia Best Estate"осуществляет сопровождение и реализацию проектов
                            коммерческой и жилой
                            недвижимости, в том числе трудноразрешимых. Комплекс услуг включает экспертизу документов,
                            регистрацию земельных
                            правоотношений. <br>
                            Основными принципами в работе являются индивидуальный подход, забота об интересах клиента,
                            доверительность и
                            прозрачность отношений. Привлекая агентство недвижимости для решения задач, Вы получаете
                            гарантию полной
                            конфиденциальности используемой информации.
                        </p>
                    </div>
                    <div class="about-services">
                        <h2 class="heading-2">Наши услуги</h2>
                        <ul class="about-services__cards">
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/01.svg" alt=""></div>
                                <p class="about-services__title">Покупка и продажа недвижимости в&nbsp;Москве</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/02.svg" alt=""></div>
                                <p class="about-services__title">Жилищная ипотека</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/03.svg" alt=""></div>
                                <p class="about-services__title">Обмен и расселение квартир</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/04.svg" alt=""></div>
                                <p class="about-services__title">Срочный выкуп объектов недвижимости</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/05.svg" alt=""></div>
                                <p class="about-services__title">Документальное оформление сделок</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/06.svg" alt=""></div>
                                <p class="about-services__title">Оценка недвижимости</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/07.svg" alt=""></div>
                                <p class="about-services__title">Бесплатное консультирование</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/08.svg" alt=""></div>
                                <p class="about-services__title">Страхование недвижимости</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/09.svg" alt=""></div>
                                <p class="about-services__title">Приватизация</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/10.svg" alt=""></div>
                                <p class="about-services__title">Консультация по&nbsp;криптовалютам</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/11.svg" alt=""></div>
                                <p class="about-services__title">3D сьемка вашего обьекта по&nbsp;всей&nbsp;России</p>
                            </li>
                            <li class="about-services__item">
                                <div class="about-services__icon"><img src="img/about/12.svg" alt=""></div>
                                <p class="about-services__title">Помощь при работе с&nbsp;криптовалютой</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="question">
                <div class="container">
                    <div class="question-wrapper">
                        <div class="heading">
                            <p v-if="success" style="color: green">* ваш запрос отправлен</p>
                            <h2 class="heading-2">Есть вопрос?</h2>
                            <p class="text-2">Оставьте свои контактные данные и наш эксперт по недвижимости свяжется с
                                вами!</p>
                        </div>
<!--                        <form action="#" class="form question-form">-->
                            <div class="radiob-group">
                                <label class="radiob tg">
                                    <input type="checkbox" id="" class="radiob__input" v-on:click="request.isTg === true ? request.isTg = false : request.isTg = true">
                                    <span>напишите мне в telegram</span>
                                </label>
                                <label class="radiob wa">
                                    <input type="checkbox" id="" class="radiob__input" v-on:click="request.isWhatsapp === true ? request.isWhatsapp = false : request.isWhatsapp = true">
                                    <span>напишите мне в whats app</span>
                                </label>
                                <label class="radiob vb">
                                    <input type="checkbox" id="" class="radiob__input" v-on:click="request.isViber === true ? request.isViber = false : request.isViber = true">
                                    <span>напишите мне в viber</span>
                                </label>
                                <label class="radiob ph">
                                    <input type="checkbox" id="" class="radiob__input" v-on:click="request.isPhone === true ? request.isPhone = false : request.isPhone = true">
                                    <span>звонок</span>
                                </label>
                            </div>
                            <div class="question-row">
                                <label class="form-label">
                                    <input type="text" v-bind:class="{ 'Error': error_array.nameError }" v-model="request.name" name="" id="" class="form-input form-input--big"
                                           placeholder="Ваше имя">
                                </label>
                                <label class="form-label">
                                    <input v-bind:class="{ 'Error': error_array.phoneError }" v-model="request.phone" type="number" name="" id="" class="form-input form-input--big"
                                           placeholder="Ваш номер телефона">
                                </label>
                                <div class="question-column">
                                    <button class="btn btn-xl" v-on:click="sendRequest()">Оставить заявку</button>
                                    <label class="accept checkbox" >
                                        <input type="checkbox" id="" v-on:click="request.check === false ? request.check = true : request.check = false">
                                        <span v-bind:class="{ 'ErrorCheck': error_array.checkError }">Даю согласие на обработку <a href="#">персональных данных</a></span>
                                    </label>
                                </div>
                            </div>
<!--                        </form>-->
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
        props: ['page'],
        provide() {
            return {
                'page': this.page,
            }
        },
        data() {
            return {
                request: {
                    isPhone: false,
                    isWhatsapp: false,
                    isViber: false,
                    isTg: false,
                    name: '',
                    phone: '',
                    check: false,
                },
                error_array: {
                    nameError: false,
                    phoneError: false,
                    checkError: false,
                },
                success: false,
            }
        },
        methods: {

            validation() {

                this.request.phone < 11 ? this.error_array.phoneError = true : this.error_array.phoneError = false;
                this.request.name.length < 3 ? this.error_array.nameError = true : this.error_array.nameError = false;
                this.request.check === false ? this.error_array.checkError = true : this.error_array.checkError = false;

                if(this.error_array.nameError === false && this.error_array.phoneError === false && this.error_array.checkError === false) {
                    return true;
                } else {
                    return false;
                }

            },
            sendRequest() {
                let status = this.validation();

                if(status && this.success === false) {
                    axios.post('/api/manager/send', {
                        isTg: this.request.isTg,
                        isWhatsapp: this.request.isWhatsapp,
                        isViber: this.request.isViber,
                        isPhone: this.request.isPhone,
                        name: this.request.name,
                        phone: this.request.phone,
                    }).then(res => {
                        this.success = true;
                    })
                }
            }

        },

        name: "AppAbout",
    }
</script>

<style scoped>
    .Error {
        border-color: red;
    }
    .ErrorCheck {
        color: red!important;
    }
</style>
