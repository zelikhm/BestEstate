<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';
    import RegistrationModal from "../Components/Component/Modal/Register.vue";
    import Login from "../Components/Component/Modal/Login.vue";

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->
        <Header @openLogin="show_login = true"></Header>
        <RegistrationModal :status="show_reg" @close="show_reg = false" @openLogin="show_login = true, show_reg = false"></RegistrationModal>
        <Login :status="show_login" @close="show_login = false" @openReg="show_reg = true, show_login = false"></Login>

        <main class="page-about">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <span>Услуги агентства</span>
                </nav>
            </div>

            <section class="services">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Услуги агентства <span>Russia Best Real Estate</span></h1>
                    </div>
                    <div class="services__cards">
                        <div class="services__cards-row">
                            <div class="services__cards-column">
                                <a href="#" class="services__item services__item-1">
                                    <div class="services__item-descr">– покупателю и собственнику</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-01-icon.svg" alt=""></div>
                                            <p class="services__item-title">Купля–продажа</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="services__cards-column--two">
                                <a href="#" class="services__item services__item-2">
                                    <div class="services__item-descr">– покупателю и собственнику</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-02-icon.svg" alt=""></div>
                                            <p class="services__item-title">Ипотека</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                                <a href="#" class="services__item services__item-3">
                                    <div class="services__item-descr">– арендатору</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-03-icon.svg" alt=""></div>
                                            <p class="services__item-title">Аренда</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="services__cards-column">
                                <a href="#" class="services__item services__item-4">
                                    <div class="services__item-descr">– документация</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-04-icon.svg" alt=""></div>
                                            <p class="services__item-title">Составление договоров</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="services__cards-column">
                                <a href="#" class="services__item services__item-5">
                                    <div class="services__item-descr">– покупателю и арендодателю</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-05-icon.svg" alt=""></div>
                                            <p class="services__item-title">Сопровождение</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="services__cards-column">
                                <a href="#" class="services__item services__item-6">
                                    <div class="services__item-descr">– покупателю и арендодателю</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-06-icon.svg" alt=""></div>
                                            <p class="services__item-title">Консультирование</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="services__cards-column">
                                <a href="#" class="services__item services__item-7">
                                    <div class="services__item-descr">– покупателю и арендодателю</div>
                                    <div class="services__item-content">
                                        <div class="services__item-info">
                                            <div class="services__item-icon"><img
                                                src="img/services/services-07-icon.svg" alt=""></div>
                                            <p class="services__item-title">Оценка</p>
                                        </div>
                                        <i class="icomoon icon-chevron-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="services__cards-column">
                            <a href="#" class="services__item services__item-8">
                                <div class="services__item-descr">– криптовалюта</div>
                                <div class="services__item-content">
                                    <div class="services__item-info">
                                        <div class="services__item-icon"><img src="img/services/services-08-icon.svg"
                                                                              alt=""></div>
                                        <p class="services__item-title">Помощь при работе с криптовалютой</p>
                                    </div>
                                    <i class="icomoon icon-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="services__cards-column">
                            <a href="#" class="services__item services__item-9">
                                <div class="services__item-descr">– покупателю и арендодателю</div>
                                <div class="services__item-content">
                                    <div class="services__item-info">
                                        <div class="services__item-icon"><img src="img/services/services-09-icon.svg"
                                                                              alt=""></div>
                                        <p class="services__item-title">Создание 3D туров</p>
                                    </div>
                                    <i class="icomoon icon-chevron-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="services-content">
                        <h2 class="heading-2">Агентство недвижимости</h2>
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
                show_login: false,
                show_reg: false,
            }
        },
        name: "AppService"
    }
</script>

<style scoped>

</style>
