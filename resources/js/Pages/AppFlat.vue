<template>

    <body>
    <div class="wrapper">

        <!-- header -->
        <Header></Header>

        <main class="page-apartament">

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <nav class="container">
                    <Link :href="'/'">Главная</Link>
                    <Link :href="'/catalog'">Купить</Link>
                    <Link :href="'/jk/' + jk.slug">{{jk.title}}</Link>
                    <span>{{ flat.title }}</span>
                </nav>
            </div>

            <section class="apart">
                <div class="container">
                    <div class="apart-heading">
                        <div class="heading">
                            <h1 class="heading-3">{{ flat.title }}</h1>
                            <p class="text-3">{{ jk.address }}</p>
                        </div>
                        <div class="apart-heading-nav">
                            <a href="#" class="btn-ic"><i class="icomoon icon-favourites"></i></a>
<!--                            <a href="/img/logo-black.png" download="filename" class="btn-ic"><i-->
<!--                                class="icomoon icon-download"></i></a>-->
                        </div>
                    </div>
                    <div class="apart-container">
                        <div class="apart-left">
                            <ImageFlat
                                :flat="flat"
                                :jk="jk"
                            ></ImageFlat>
                            <div class="apart-info-group">
                                <div class="apart-info-item">
                                    <div class="apart-info-title">общая</div>
                                    <div class="apart-info-value">{{ flat.square_main }} м²</div>
                                </div>
                                <div class="apart-info-item">
                                    <div class="apart-info-title">жилая</div>
                                    <div class="apart-info-value">{{ flat.square_life }} м²</div>
                                </div>
                                <div class="apart-info-item">
                                    <div class="apart-info-title">кухня</div>
                                    <div class="apart-info-value">{{ flat.square_kitchen }} м²</div>
                                </div>
                                <div class="apart-info-item">
                                    <div class="apart-info-title">из 12</div>
                                    <div class="apart-info-value">{{ flat.float }} этаж</div>
                                </div>
                                <div class="apart-info-item">
                                    <div class="apart-info-title">потолки</div>
                                    <div class="apart-info-value">{{ flat.height }} м</div>
                                </div>
                                <div class="apart-info-item">
                                    <div class="apart-info-title">год постройки</div>
                                    <div class="apart-info-value">{{ flat.date_building }} год</div>
                                </div>
                            </div>
                            <div class="apart-right">
                                <div class="apart-card">
                                    <div class="price-dropdown" v-if="flat.price_object">
                                        <div class="price">
                                            <img src="/img/apartament/wallet.svg" alt="">
                                            <span>{{flat.price_object.price.toLocaleString('ru')}}</span>
                                            <div class="price-arrow">₽</div>
                                        </div>
                                        <ul class="price-dropdown-content">
                                            <li><img src="/img/icons/dollar.svg" alt=""><span>209 800 000</span></li>
                                            <li><img src="/img/icons/ruble.svg" alt=""><span>100 800 000 000</span></li>
                                            <li><img src="/img/icons/bitcoin.svg" alt=""><span>200.210</span></li>
                                            <li><img src="/img/icons/ethereum.svg" alt=""><span>400.210</span></li>
                                            <li><img src="/img/icons/yen.svg" alt=""><span>300 000 000</span></li>
                                        </ul>
                                    </div>
                                    <div class="objects-square"><img src="/img/icons/square.png" alt="">{{
                                        ((flat.price_object.price / flat.square_main).toFixed(0)).toLocaleString('ru') }} ₽/м2
                                    </div>
                                    <div class="apart-second">
                                        <div class="cards-date">Добавлено: {{ flat.created_at }}</div>
                                        <div class="cards-views">{{ flat.view }} просмотров</div>
                                    </div>
<!--                                    <div class="apart-btns">-->
<!--                                        <a href="#" class="btn btn-md"><img src="/img/icons/bitcoin-white.svg"-->
<!--                                                                            alt=""><span>Купить</span></a>-->
<!--                                        <a href="#" class="btn-second btn-md">Забронировать</a>-->
<!--                                    </div>-->
                                </div>
                                <div class="expert" v-if="flat.support">
                                    <div class="expert-info">
                                        <div class="expert-info-main">
                                            <img v-if="flat.support.image === null" src="/img/kp/expert-img.jpg" alt="">
                                            <img v-if="flat.support.image !== null" :src="flat.support.image" alt="">
                                            <div class="expert-info-content">
                                                <span>об этом объекте все знает:</span>
                                                <h4>{{ flat.support.name }}</h4>
                                            </div>
                                        </div>
                                        <div class="expert-descr">{{ flat.support.status }}</div>
                                        <a href="tel:79005005640" class="phone"><i
                                            class="icomoon icon-calling-bold"></i><span>{{ flat.support.phone }}</span></a>
                                    </div>
                                    <div class="form-title">Или оставьте ваш номер и я вам перезвоню:</div>
                                    <form action="#" class="form expert-form">
                                        <div class="row">
                                            <label for="" class="form-label">
                                                <input type="number" name="" class="form-input"
                                                       placeholder="Ваш номер телефона">
                                            </label>
                                            <button class="btn btn-md">Перезвоните мне</button>
                                        </div>
                                        <label for="checkboxCta" class="accept checkbox">
                                            <input type="checkbox" id="checkboxCta">
                                            <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                            <div class="info apart-info">
                                <div class="info-heading">
                                    <h3 class="heading-3">Описание объекта:</h3>
                                </div>
                                <div class="readmore js-read-more" data-rm-words="65" v-html="flat.description">

                                </div>
                            </div>
                            <div class="apart-general">
                                <div class="info-heading">
                                    <h3 class="heading-3">Общая информация</h3>
                                </div>
                                <ul class="apart-general-list">
                                    <li class="apart-general-item">
                                        <div class="apart-general-title" v-if="flat.type">Тип жилья</div>
                                        <hr>
                                        <div class="apart-general-value">{{ flat.type }}</div>
                                    </li>
                                    <li class="apart-general-item">
                                        <div class="apart-general-title">Высота потолков</div>
                                        <hr>
                                        <div class="apart-general-value">{{ flat.height }} м</div>
                                    </li>
                                    <li class="apart-general-item" v-if="flat.bathroom !== 0">
                                        <div class="apart-general-title">Санузел</div>
                                        <hr>
                                        <div class="apart-general-value">{{ flat.bathroom }} совмещенных</div>
                                    </li>
                                    <li class="apart-general-item" v-if="flat.balcon !== 0">
                                        <div class="apart-general-title">Балкон/лоджия</div>
                                        <hr>
                                        <div class="apart-general-value">{{ flat.balcon }} балкон</div>
                                    </li>
                                    <li class="apart-general-item" v-if="flat.repair">
                                        <div class="apart-general-title">Тип ремонта</div>
                                        <hr>
                                        <div class="apart-general-value">{{ flat.repair }}</div>
                                    </li>
                                    <li class="apart-general-item">
                                        <div class="apart-general-title">Вид из окон</div>
                                        <hr>
                                        <div class="apart-general-value">На улицу и двор</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="request">
                <div class="container">
                    <div class="request-wrapper">
                        <div class="heading">
                            <h3 class="heading-3">Заявка на подбор недвижимости</h3>
                            <p class="text-2">Оставьте свои контактные данные и с Вами свяжется наш риэлтор.</p>
                        </div>
                        <form action="#" class="form">
                            <label for="" class="form-label">
                                <input type="number" name="" class="form-input form-input--big"
                                       placeholder="Ваш номер телефона">
                            </label>
                            <div class="col">
                                <button class="btn btn-xl">Оставить заявку</button>
                                <label class="accept checkbox">
                                    <input type="checkbox">
                                    <span>Даю согласие на обработку <a href="#">персональных данных</a></span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section class="similar">
                <div class="container">
                    <div class="heading">
                        <h2 class="heading-2">Похожие объявления</h2>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <OtherFlatSwipper :flats="flats"></OtherFlatSwipper>
                    </div>
                </div>
            </section>

        </main>

        <Footer></Footer>

        <!--------Modal-------->

<!--        <div class="state contacts-state" data-state="contacts">-->
<!--            <div class="state-box">-->
<!--                <div class="state-heading">-->
<!--                    <div class="heading-4">Контакты:</div>-->
<!--                    <div class="icomoon icon-close"></div>-->
<!--                </div>-->
<!--                <div class="contacts-state-group">-->
<!--                    <a href="#" class="btn btn-md"><i-->
<!--                        class="icomoon icon-calling-bold"></i><span>+7 (967) 064–32–24</span></a>-->
<!--                    <a href="#" class="btn btn-md btn-tg">Написать в Telegram</a>-->
<!--                    <a href="#" class="btn btn-md btn-wa">Написать в WhatsApp</a>-->
<!--                    <a href="#" class="btn btn-md btn-vb">Написать в Viber</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="state" data-state="login">-->
<!--            <div class="state-box">-->
<!--                <div class="state-heading">-->
<!--                    <img src="/img/modal-logo.svg" alt="">-->
<!--                    <div class="icomoon icon-close"></div>-->
<!--                </div>-->
<!--                <div class="heading-3">Авторизация</div>-->
<!--                <form action="#" class="form">-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Логин</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="text" name="" id="" class="form-input" placeholder="">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Пароль</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="password" name="password" id="loginPasswordInput"-->
<!--                                   class="form-input password-input" placeholder="">-->
<!--                            <a href="#" class="password-control" id="loginPasswordControl"></a>-->
<!--                        </label>-->
<!--                        <a href="#" class="form-link">забыли пароль?</a>-->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-lg">Войти в аккаунт</button>-->
<!--                </form>-->
<!--                <div class="form-other">-->
<!--                    <div class="form-other-title">Войти в аккаунт через:</div>-->
<!--                    <div class="form-other-btns">-->
<!--                        <a href="#" class="form-other-btn">-->
<!--                            <img src="/img/modal/google.svg" alt="">-->
<!--                            Google-->
<!--                        </a>-->
<!--                        <a href="#" class="form-other-btn">-->
<!--                            <img src="/img/modal/vk.svg" alt="">-->
<!--                            Вконтакте-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="form-other-link">У вас нет аккаунта? <a href="#" class="to-state" data-state="sign-up">Зарегистрируйтесь</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="state" data-state="sign-up">-->
<!--            <div class="state-box">-->
<!--                <div class="state-heading">-->
<!--                    <img src="/img/modal-logo.svg" alt="">-->
<!--                    <div class="icomoon icon-close"></div>-->
<!--                </div>-->
<!--                <div class="heading-3">Регистрация аккаунта</div>-->
<!--                <form action="#" class="form">-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Логин</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="text" name="" id="" class="form-input" placeholder="">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Электронная почта</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="email" name="" id="" class="form-input" placeholder="">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Пароль</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="password" name="password" id="signPasswordInput"-->
<!--                                   class="form-input password-input" placeholder="">-->
<!--                            <a href="#" class="password-control" id="signPasswordControl"></a>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Повторите пароль</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="password" name="password" id="signVerifyPasswordInput"-->
<!--                                   class="form-input password-input" placeholder="">-->
<!--                            <a href="#" class="password-control" id="signVerifyPasswordControl"></a>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <button type="submit" class="btn btn-lg">Зарегистрироваться</button>-->
<!--                </form>-->
<!--                <div class="form-other">-->
<!--                    <div class="form-other-link">Уже есть аккаунт? <a href="#" class="to-state"-->
<!--                                                                      data-state="login">Войти</a></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="state" data-state="connection">-->
<!--            <div class="state-box">-->
<!--                <div class="state-heading">-->
<!--                    <img src="/img/modal-logo.svg" alt="">-->
<!--                    <div class="icomoon icon-close"></div>-->
<!--                </div>-->
<!--                <div class="heading-3">Позвоните мне</div>-->
<!--                <form action="#" class="form">-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Имя</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="text" name="" id="" class="form-input" placeholder="">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Телефон</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="number" name="" id="" class="form-input" placeholder="">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Электронная почта</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <input type="email" name="" id="" class="form-input" placeholder="">-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <span class="form-group-title">Сообщение</span>-->
<!--                        <label for="" class="form-label">-->
<!--                            <textarea name="" id="" cols="30" rows="5" class="form-input"></textarea>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <label class="accept checkbox">-->
<!--                        <input type="checkbox">-->
<!--                        <span>Даю согласие на обработку <a href="#">персональных данных</a></span>-->
<!--                    </label>-->
<!--                    <button type="submit" class="btn btn-lg">Позвоните мне</button>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->

    </div>

    </body>
</template>

<script>
    import Header from '../Components/Component/Header.vue'
    import Footer from '../Components/Component/Footer.vue'
    import FlatSwiper from "@/Components/Component/FlatSwiper.vue";
    import OtherFlatSwipper from "@/Components/FlatComponent/OtherFlatSwipper.vue";

    import {Link} from '@inertiajs/vue3'

    import ImageFlat from '../Components/FlatComponent/Image.vue'
    export default {
        props: ['page', 'jk', 'flat', 'flats'],
        provide() {
            return {
                'page': this.page,
            }
        },
        name: "AppFlat",
        components: {
            Link,
            Header,
            Footer,
            FlatSwiper,
            ImageFlat,
            OtherFlatSwipper
        },
    }
</script>

<style scoped>

</style>
