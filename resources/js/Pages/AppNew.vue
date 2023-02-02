<script setup>

    import Header from '../components/component/Header.vue';
    import Footer from  '../Components/Component/Footer.vue'
    import { Link } from '@inertiajs/vue3';

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->
        <Header></Header>

        <main class="page-article">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="route('main')">Главная</Link>
                    <Link :href="route('news')">Новости</link>
                    <span>Статья “{{ info.title }}”</span>
                </nav>
            </div>

            <section class="article">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">{{ info.title }}</h1>
                        <div class="date">{{ info.created_at }}</div>
                    </div>
                    <div class="article-content" v-html="info.description">

                    </div>
                </div>
            </section>

            <section class="other-news">
                <div class="container">
                    <div class="heading">
                        <h2 class="heading-2">Другие статьи:</h2>
                    </div>
                    <div class="news__cards">
                        <div class="news__cards-row">
                            <div class="news__item" v-for="item in news">
                                <div class="news__item-img"><img :src="'/' + item.image" alt=""></div>
                                <div class="news__item-content">
                                    <div class="news__item-heading">
                                        <h3 class="heading-2">{{ item.title }}</h3>
                                    </div>
                                    <div class="news__item-nav">
                                        <Link :href="'/news/' + item.slug" class="btn btn-xl">Читать статью</Link>
                                        <div class="date">{{ item.created_at }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="footer">
            <div class="container--fluid">
                <ul class="footer-menu">
                    <li><a href="services.html">услуги</a></li>
                    <li><a href="catalog.html">каталог</a></li>
                    <li><a href="#">квартиры</a></li>
                    <li><a href="news.html">новости</a></li>
                    <li><a href="about.html">о компании</a></li>
                    <li><a href="contacts.html">контакты</a></li>
                </ul>
                <ul class="footer-nav">
                    <li class="footer-nav__item">
                        <div class="footer-nav__item-title">Загородная недвижимость</div>
                        <div class="footer-nav__item-groups">
                            <ul>
                                <li>Продажа</li>
                                <li><a href="#">Квартира</a></li>
                                <li><a href="#">Таунхаусы</a></li>
                                <li><a href="#">Коттеджные поселки</a></li>
                            </ul>
                            <ul>
                                <li>Аренда</li>
                                <li><a href="#">Коттеджи</a></li>
                                <li><a href="#">Участки</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-nav__item">
                        <div class="footer-nav__item-title">Городская недвижимость</div>
                        <div class="footer-nav__item-groups">
                            <ul>
                                <li>Продажа</li>
                                <li><a href="#">Квартира</a></li>
                                <li><a href="#">Пентхаус</a></li>
                                <li><a href="#">Особняк</a></li>
                                <li><a href="#">Новостройки</a></li>
                                <li><a href="#">Апартаменты</a></li>
                            </ul>
                            <ul>
                                <li>Аренда</li>
                                <li><a href="#">Квартира</a></li>
                                <li><a href="#">Пентхаус</a></li>
                                <li><a href="#">Особняк</a></li>
                                <li><a href="#">Новостройки</a></li>
                                <li><a href="#">Апартаменты</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-nav__item">
                        <div class="footer-nav__item-title">Зарубежная недвижимость</div>
                        <div class="footer-nav__item-groups">
                            <ul>
                                <li>Продажа</li>
                                <li><a href="#">Квартира</a></li>
                                <li><a href="#">Пентхаус</a></li>
                                <li><a href="#">Особняк</a></li>
                                <li><a href="#">Новостройки</a></li>
                                <li><a href="#">Апартаменты</a></li>
                            </ul>
                            <ul>
                                <li>Аренда</li>
                                <li><a href="#">Квартира</a></li>
                                <li><a href="#">Пентхаус</a></li>
                                <li><a href="#">Особняк</a></li>
                                <li><a href="#">Новостройки</a></li>
                                <li><a href="#">Апартаменты</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-nav__item">
                        <div class="footer-nav__item-title">Офисы</div>
                        <div class="footer-nav__item-groups">
                            <ul>
                                <li><a href="#">Коворкинги</a></li>
                                <li><a href="#">Бизнес–центры</a></li>
                                <li><a href="#">Бизнес–парк</a></li>
                                <li><a href="#">Особняк для офиса</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="footer-info">
                    <li class="footer-info__group">
                        <img src="img/footer-logo.svg" class="footer-logo" alt="">
                        <div class="footer-info__copy">
                            <span>© 2022 kf.expert Все права защищены</span>
                            <span>Официальный сайт Knight Frank Russia</span>
                        </div>
                        <a href="#" class="footer-info__link">Соглашение об обработке персональных данных</a>
                    </li>
                    <li class="footer-info__group">
                        <a href="tel:+79670643224" class="footer-info__title footer-info__title-link">+7 (967)
                            064–32–24</a>
                        <a href="#" class="btn-border btn-md">Позвоните мне</a>
                    </li>
                    <li class="footer-info__group">
                        <h4 class="footer-info__title">Наши социальные сети:</h4>
                        <ul class="footer-social">
                            <li>
                                <img src="img/footer/yappimedia.svg" alt="">
                                <a href="#">Yappi.media</a>
                            </li>
                            <li>
                                <img src="img/footer/telegram.svg" alt="">
                                <a href="#">Telegram</a>
                            </li>
                            <li>
                                <img src="img/footer/youtube.svg" alt="">
                                <a href="#">Youtube</a>
                            </li>
                            <li>
                                <img src="img/footer/vk.svg" alt="">
                                <a href="#">ВКонтакте</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-info__group">
                        <h4 class="footer-info__title">Сделано в</h4>
                        <a href="#" class="webmolot-logo"><img src="img/footer/webmolot.jpg" alt=""></a>
                    </li>
                </ul>
                <div class="footer-copy">
                    Настоящим информируем вас о том, что вся информация, размещенная на данном сайте, ни при каких
                    обстоятельствах не может
                    признаваться публичной офертой в соответствии со ст. 437.2 Гражданского кодекса РФ. Копирование и
                    воспроизведение
                    материалов этого сайта возможно с согласия администрации сайта. Посещая сайт https://kf.expert, вы
                    даете согласие на
                    обработку данных cookies и иных пользовательских данных, сбор которых автоматически осуществляется
                    АО «Найт Фрэнк»
                    (127006, г. Москва, Воротниковский пер., д. 8, стр. 1) на условиях <a href="#">«Положения об
                    обработке персональных данных АО «Найт
                    Фрэнк».</a>
                </div>
            </div>
        </footer>

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
        props:['page', 'info', 'news'],
        provide() {
            return {
                'page': this.page,
            }
        },
        name: "AppNew"
    }
</script>

<style scoped>

</style>
