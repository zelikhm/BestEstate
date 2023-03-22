<script setup>
    import {Link} from '@inertiajs/vue3'
</script>

<template>
    <section class="kn-bl">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Коммерческая недвижимость</h2>
                <Link :href="'/catalog?type_jk=4&method=1'" class="btn-second btn-md">Смотреть все</Link>
            </div>
            <div class="cards">
                <div class="cards-item cards-item--kn" v-for="item in ecom">
                    <!-- Swiper -->
                    <div class="cards-slider">
                        <div class="swiper gallerySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img :src="item.image" alt="">
                                </div>
                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper1.jpg" alt="">
                                </div>
                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper2.jpg" alt="">
                                </div>
                                <div class="swiper-slide"><img src="img/kp-bl/kpGallerySwiper3.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next--fluid"></div>
                            <div class="swiper-button-prev--fluid"></div>
                            <div class="swiper-pagination--fluid"></div>
                        </div>
                    </div>

                    <div class="cards-content">
                        <div class="cards-info">
                            <div class="cards-info-wrapper">
                                <div class="cards-info-main">
                                    <div class="cards-heading">
                                        <h3 class="heading-3">{{ item.title }}</h3>
                                        <p class="text-3">{{ item.description }}</p>
                                    </div>
                                </div>
                                <div class="cards-info-second">
                                    <div class="cards-price">
                                        <div class="cards-price-wrapper">
                                            <div class="cards-price-main">{{ item.price.toLocaleString('ru') }}
                                                ₽
                                            </div>
                                            <!-- <div class="select-wallet-container">
                                              <select class="select-wallet" name="wallet">
                                                <option value="">₽</option>
                                                <option value="">₽</option>
                                                <option value="">₽</option>
                                              </select>
                                            </div> -->
                                        </div>
                                        <div class="cards-price-second">{{ (item.price /
                                            item.square).toLocaleString('ru') }} ₽/м2
                                        </div>
                                    </div>
                                    <div class="cards-date">Добавлено: {{ item.created_at }}</div>
                                    <div class="cards-views" v-if="item.visible">{{ item.visible }} просмотров
                                    </div>
                                </div>
                            </div>

                            <ul class="cards-specifications">
                                <li>Площадь: 150 м²</li>
                                <li>Вид на море/океан</li>
                                <li>Бассейн</li>
                                <li>Фитнес–центр</li>
                                <li>Собственный пляж</li>
                                <li>Продавец кто то там на английском</li>
                            </ul>
                        </div>

                        <div class="cards-nav">
                            <a href="#" class="btn-border btn-lg to-state" data-state="contacts"><i
                                class="icomoon icon-calling-bold"></i><span>Показать контакты</span></a>
                            <a href="#" class="btn-ic active"><i class="icomoon icon-favourites"></i></a>
                            <a href="#" class="btn-ic"><i class="icomoon icon-location"></i></a>
                            <a href="img/logo-black.png" download="filename" class="btn-ic"><i
                                class="icomoon icon-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['ecom'],
        name: "Commerc"
    }
</script>

<style scoped>

</style>
