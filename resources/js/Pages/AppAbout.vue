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
                            <h2 class="heading-2">Есть вопрос?</h2>
                            <p class="text-2">Оставьте свои контактные данные и наш эксперт по недвижимости свяжется с
                                вами!</p>
                        </div>
                        <form action="#" class="form question-form">
                            <div class="radiob-group">
                                <label class="radiob tg">
                                    <input type="checkbox" id="" class="radiob__input">
                                    <span>напишите мне в telegram</span>
                                </label>
                                <label class="radiob wa">
                                    <input type="checkbox" id="" class="radiob__input">
                                    <span>напишите мне в whats app</span>
                                </label>
                                <label class="radiob vb">
                                    <input type="checkbox" id="" class="radiob__input">
                                    <span>напишите мне в viber</span>
                                </label>
                                <label class="radiob ph">
                                    <input type="checkbox" id="" class="radiob__input">
                                    <span>звонок</span>
                                </label>
                            </div>
                            <div class="question-row">
                                <label class="form-label">
                                    <input type="text" name="" id="" class="form-input form-input--big"
                                           placeholder="Ваше имя">
                                </label>
                                <label class="form-label">
                                    <input type="number" name="" id="" class="form-input form-input--big"
                                           placeholder="Ваш номер телефона">
                                </label>
                                <div class="question-column">
                                    <button class="btn btn-xl">Оставить заявку</button>
                                    <label class="accept checkbox">
                                        <input type="checkbox" id="">
                                        <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </main>

        <Footer></Footer>

        <!--------Modal-------->

        <div class="state contacts-state" data-state="contacts">
            <div class="state-box">
                <div class="state-heading">
                    <div class="heading-4">Контакты:</div>
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="contacts-state-group">
                    <a href="#" class="btn btn-md"><i
                        class="icomoon icon-calling-bold"></i><span>+7 (967) 064–32–24</span></a>
                    <a href="#" class="btn btn-md btn-tg">Написать в Telegram</a>
                    <a href="#" class="btn btn-md btn-wa">Написать в WhatsApp</a>
                    <a href="#" class="btn btn-md btn-vb">Написать в Viber</a>
                </div>
            </div>
        </div>

        <div class="state" data-state="login">
            <div class="state-box">
                <div class="state-heading">
                    <img src="img/modal-logo.svg" alt="">
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="heading-3">Авторизация</div>
                <form action="#" class="form">
                    <div class="form-group">
                        <span class="form-group-title">Логин</span>
                        <label for="" class="form-label">
                            <input type="text" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Пароль</span>
                        <label for="" class="form-label">
                            <input type="password" name="password" id="loginPasswordInput"
                                   class="form-input password-input" placeholder="">
                            <a href="#" class="password-control" id="loginPasswordControl"></a>
                        </label>
                        <a href="#" class="form-link">забыли пароль?</a>
                    </div>
                    <button type="submit" class="btn btn-lg">Войти в аккаунт</button>
                </form>
                <div class="form-other">
                    <div class="form-other-title">Войти в аккаунт через:</div>
                    <div class="form-other-btns">
                        <a href="#" class="form-other-btn">
                            <img src="img/modal/google.svg" alt="">
                            Google
                        </a>
                        <a href="#" class="form-other-btn">
                            <img src="img/modal/vk.svg" alt="">
                            Вконтакте
                        </a>
                    </div>
                    <div class="form-other-link">У вас нет аккаунта? <a href="#" class="to-state" data-state="sign-up">Зарегистрируйтесь</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="state" data-state="sign-up">
            <div class="state-box">
                <div class="state-heading">
                    <img src="img/modal-logo.svg" alt="">
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="heading-3">Регистрация аккаунта</div>
                <form action="#" class="form">
                    <div class="form-group">
                        <span class="form-group-title">Логин</span>
                        <label for="" class="form-label">
                            <input type="text" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Электронная почта</span>
                        <label for="" class="form-label">
                            <input type="email" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Пароль</span>
                        <label for="" class="form-label">
                            <input type="password" name="password" id="signPasswordInput"
                                   class="form-input password-input" placeholder="">
                            <a href="#" class="password-control" id="signPasswordControl"></a>
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Повторите пароль</span>
                        <label for="" class="form-label">
                            <input type="password" name="password" id="signVerifyPasswordInput"
                                   class="form-input password-input" placeholder="">
                            <a href="#" class="password-control" id="signVerifyPasswordControl"></a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-lg">Зарегистрироваться</button>
                </form>
                <div class="form-other">
                    <div class="form-other-link">Уже есть аккаунт? <a href="#" class="to-state"
                                                                      data-state="login">Войти</a></div>
                </div>
            </div>
        </div>

        <div class="state" data-state="connection">
            <div class="state-box">
                <div class="state-heading">
                    <img src="img/modal-logo.svg" alt="">
                    <div class="icomoon icon-close"></div>
                </div>
                <div class="heading-3">Позвоните мне</div>
                <form action="#" class="form">
                    <div class="form-group">
                        <span class="form-group-title">Имя</span>
                        <label for="" class="form-label">
                            <input type="text" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Телефон</span>
                        <label for="" class="form-label">
                            <input type="number" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Электронная почта</span>
                        <label for="" class="form-label">
                            <input type="email" name="" id="" class="form-input" placeholder="">
                        </label>
                    </div>
                    <div class="form-group">
                        <span class="form-group-title">Сообщение</span>
                        <label for="" class="form-label">
                            <textarea name="" id="" cols="30" rows="5" class="form-input"></textarea>
                        </label>
                    </div>
                    <label class="accept checkbox">
                        <input type="checkbox">
                        <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                    </label>
                    <button type="submit" class="btn btn-lg">Позвоните мне</button>
                </form>
            </div>
        </div>

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

        name: "AppAbout",
    }
</script>

<style scoped>

</style>
