<script setup>

    import Header from '../components/component/Header.vue';
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
                    <span>Новости</span>
                </nav>
            </div>

            <section class="news">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Новости агентства <span>Russia Best Real Estate</span></h1>
                    </div>
                    <div class="news__cards">
                        <div class="news__item">
                            <div class="news__item-img"><img src="img/news/news-01.jpg" alt=""></div>
                            <div class="news__item-content">
                                <div class="news__item-heading">
                                    <h3 class="heading-2">На сколько подорожала недвижимость в 2022 году?</h3>
                                    <p class="text-2">
                                        Консалтинговая компания Knight Frank основана в Лондоне в 1896 году и является
                                        крупнейшей независимой международной
                                        консалтинговой компанией, предоставляющей своим клиентам услуги на рынке
                                        коммерческой и жилой недвижимости
                                    </p>
                                </div>
                                <div class="news__item-nav">
                                    <a href="article.html" class="btn btn-xl">Читать статью</a>
                                    <div class="date">24.07.2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__item-img"><img src="img/news/news-02.jpg" alt=""></div>
                            <div class="news__item-content">
                                <div class="news__item-heading">
                                    <h3 class="heading-2">На сколько подорожала недвижимость в 2022 году?</h3>
                                    <p class="text-2">
                                        Консалтинговая компания Knight Frank основана в Лондоне в 1896 году и является
                                        крупнейшей независимой международной
                                        консалтинговой компанией, предоставляющей своим клиентам услуги на рынке
                                        коммерческой и жилой недвижимости слуги на рынке коммерческой и жилой
                                        недвижимости
                                    </p>
                                </div>
                                <div class="news__item-nav">
                                    <a href="article.html" class="btn btn-xl">Читать статью</a>
                                    <div class="date">24.07.2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="news__cards-row">
                            <div class="news__item">
                                <div class="news__item-img"><img src="img/news/news-03.jpg" alt=""></div>
                                <div class="news__item-content">
                                    <div class="news__item-heading">
                                        <h3 class="heading-2">На сколько подорожала недвижимость в 2022 году?</h3>
                                    </div>
                                    <div class="news__item-nav">
                                        <a href="article.html" class="btn btn-xl">Читать статью</a>
                                        <div class="date">24.07.2020</div>
                                    </div>
                                </div>
                            </div>
                            <div class="news__item">
                                <div class="news__item-img"><img src="img/news/news-04.jpg" alt=""></div>
                                <div class="news__item-content">
                                    <div class="news__item-heading">
                                        <h3 class="heading-2">На сколько подорожала недвижимость в 2022 году?</h3>
                                    </div>
                                    <div class="news__item-nav">
                                        <a href="article.html" class="btn btn-xl">Читать статью</a>
                                        <div class="date">24.07.2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__item-img"><img src="img/news/news-05.jpg" alt=""></div>
                            <div class="news__item-content">
                                <div class="news__item-heading">
                                    <h3 class="heading-2">На сколько подорожала недвижимость в 2022 году?</h3>
                                    <p class="text-2">
                                        Консалтинговая компания Knight Frank основана в Лондоне в 1896 году и является
                                        крупнейшей независимой
                                        международной
                                        консалтинговой компанией, предоставляющей своим клиентам услуги на рынке
                                        коммерческой и жилой недвижимости слуги
                                        на рынке коммерческой и жилой недвижимости
                                    </p>
                                </div>
                                <div class="news__item-nav">
                                    <a href="article.html" class="btn btn-xl">Читать статью</a>
                                    <div class="date">24.07.2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-center">
                        <a href="#" class="btn-second btn-md">Смотреть все</a>
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

        name: "AppNews"
    }
</script>

<style scoped>

</style>
