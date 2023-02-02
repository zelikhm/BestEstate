<script setup>

    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'

</script>

<template>
    <body>
    <div class="wrapper">

        <!-- header -->

        <Header></Header>

        <main class="page-contacts">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <a href="index.html">Главная</a>
                    <span>Контакты</span>
                </nav>
            </div>

            <section class="contacts">
                <div class="container">
                    <div class="heading">
                        <h1 class="heading-1">Контактная информация</h1>
                    </div>
                    <div class="contacts__group">
                        <div class="contacts__group-item">
                            <h2 class="heading-2">Мы всегда на связи:</h2>
                            <div class="contacts__group-item-group">
                                <a href="tel:79670643224" class="btn btn-border btn-md"><i
                                    class="icomoon icon-calling-bold"></i><span>+7 (967) 064–32–24</span></a>
                                <a href="#" class="btn btn-md to-state" data-state="connection">Позвоните мне</a>
                            </div>
                        </div>
                        <div class="contacts__group-item">
                            <h2 class="heading-2">Наши соц.сети</h2>
                            <ul class="contacts-social">
                                <li>
                                    <img src="img/footer/yappimedia.svg" alt="">
                                    <a href="#">Мы в Yappi</a>
                                </li>
                                <li>
                                    <img src="img/footer/telegram.svg" alt="">
                                    <a href="#">Мы в Telegram</a>
                                </li>
                                <li>
                                    <img src="img/footer/youtube.svg" alt="">
                                    <a href="#">Мы в Youtube</a>
                                </li>
                                <li>
                                    <img src="img/footer/vk.svg" alt="">
                                    <a href="#">Мы в ВКонтакте</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contacts-rekvizity">
                        <h2 class="heading-2">Реквизиты:</h2>
                        <ul class="rekvizity">
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">Наименование организации</div>
                                <div class="rekvizity-value">АО «Найт Фрэнк»</div>
                            </li>
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">Юридический адрес</div>
                                <div class="rekvizity-value">127006, г. Москва, Воротниковский пер., д. 8, стр. 1</div>
                            </li>
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">ИНН</div>
                                <div class="rekvizity-value">7710656907</div>
                            </li>
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">ОГРН</div>
                                <div class="rekvizity-value">1067761421452</div>
                            </li>
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">БИК</div>
                                <div class="rekvizity-value">044525298</div>
                            </li>
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">Адрес</div>
                                <div class="rekvizity-value">123100, г. Москва, 1-й Красногвардейский проезд, д. 15
                                </div>
                            </li>
                            <li class="rekvizity-item">
                                <div class="rekvizity-title">Генеральный директор</div>
                                <div class="rekvizity-value">.Г. Бакулин</div>
                            </li>
                        </ul>
                    </div>
                    <div class="contacts-location">
                        <h2 class="heading-2">Где мы находимся</h2>
                        <div class="map"></div>
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
        name: "AppContact",
    }
</script>

<style scoped>

</style>
