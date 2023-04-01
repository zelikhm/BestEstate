<template>
    <div class="jk-bl-slide">
        <!-- Swiper -->
        <ImageSwipper v-if="sliderStatus === true" :images="item.images_array"></ImageSwipper>
        <swiper v-else class="swiper gallerySwiper jk-bl-gallerySwiper" :modules="modules" navigation>
            <swiper-slide style="width: 500px" class="slide"><img style="" :src="item.images_array[0]" alt="">
            </swiper-slide>
        </swiper>
        <div class="jk-bl-slide-content">
            <div class="jk-bl-slide-info">
                <div class="jk-bl-slide-heading">
                    <h3 class="heading-3">{{ item.title }}</h3>
                    <button type="button" class="btn-icon"
                            v-if="item.favorite === false"
                            @click="addFavorite(item, 0)">
                        <i class="icomoon icon-favourites"></i>
                    </button>
                    <button type="button" class="btn-icon"
                            v-else
                            @click="removeFavorite(item, 0)">
                        <i class="icomoon icon-favourites RedColor"></i>
                    </button>
                </div>
                <p class="text-2">{{ item.address }}</p>
                <div class="way">
                    <div class="way-main">
                        <span class="circle"></span>
                        <span class="way-main-text">Аэропорт</span>
                    </div>
                    <div class="way-info">
                        <span class="circle"></span>
                        <img src="img/jk-bl/way.png" alt="">
                        <span class="way-info-text">12 м.</span>
                    </div>
                </div>
                <div class="builder">
                    <div class="builder-title">застройщик</div>
                    <div class="builder-info">
                        <div class="builder-name">{{ item.builder !== null ? item.builder.name : '-' }}</div>
                        <div class="builder-status">{{ item.status }}</div>
                    </div>
                </div>
            </div>
            <div class="jk-bl-slide-specifications">
                <div class="row readmore">
                    <div class="column">
                        <div class="column-title"><img src="img/jk-bl/rooms.png" alt=""><span>комнат</span>
                        </div>
                        <div class="column-item">студия</div>
                        <div class="column-item">1 комната</div>
                        <div class="column-item">2 комнаты</div>
                        <div class="column-item">3 комнаты</div>
                        <div class="column-item">4 комнаты</div>
                    </div>
                    <div class="column">
                        <div class="column-title"><img src="img/jk-bl/square.png"
                                                       alt=""><span>площадь</span></div>
                        <div class="column-item">{{ getSquare(0) }} м²</div>
                        <div class="column-item">{{ getSquare(1) }} м²</div>
                        <div class="column-item">{{ getSquare(2) }} м²</div>
                        <div class="column-item">{{ getSquare(3) }} м²</div>
                        <div class="column-item">{{ getSquare(4) }} м²</div>
                    </div>
                    <div class="column">
                        <div class="column-title"><img src="img/jk-bl/cost.png"
                                                       alt=""><span>стоимость</span>
                        </div>
                        <div class="column-item">{{ getPrice(0) }} млн</div>
                        <div class="column-item">{{ getPrice(1) }} млн</div>
                        <div class="column-item">{{ getPrice(2) }} млн</div>
                        <div class="column-item">{{ getPrice(3) }} млн</div>
                        <div class="column-item">{{ getPrice(4) }} млн</div>
                    </div>
                </div>
                <!--                        <span class="read-more__link-wrap"><a href="#" class="read-more__link">Смотреть полностью...</a></span>-->
            </div>
            <div class="jk-bl-slide-nav">
                <Link :href="'/jk/' + item.slug" class="btn btn-lg">Подробнее</Link>
                <div class="btn-contacts">
                    <i class="icomoon icon-calling-bold"></i>
                    <div class="btn-contacts-list">
                        <a href="#"><img src="img/social/telegram.png" alt=""></a>
                        <a href="#"><img src="img/social/whatsapp.png" alt=""></a>
                        <a href="#"><img src="img/social/viber.png" alt=""></a>
                        <a href="#"><img src="img/social/call.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ImageSwipper from '@/Components/Component/Swipper/SwipperImages/ImageSwipper.vue';
    import {defineComponent} from 'vue'
    import {Navigation} from 'swiper'
    import {Swiper, SwiperSlide} from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/navigation'

    export default {
        props: ['house', 'sliderStatus', 'user'],
        name: "JkCard",
        created() {
            this.item = this.house;
        },
        data() {
            return {
              item: [],
            }
        },
        methods: {
            addFavorite(item, type) {

                if (this.user !== null) {

                    axios.post('/api/favorite/add', {
                        user_id: this.user.id,
                        flat_id: type === 1 ? item.id : null,
                        jk_id: type === 0 ? item.id : null,
                    }).then(res => {
                        if (res.status === 200) {
                            this.item.favorite = true;
                        }
                    })

                }

            },
            removeFavorite(item, type) {
                if (this.user !== null) {

                    axios.post('/api/favorite/remove', {
                        user_id: this.user.id,
                        flat_id: type === 1 ? item.id : null,
                        jk_id: type === 0 ? item.id : null,
                    }).then(res => {
                        if (res.status === 200) {
                            this.item.favorite = false;
                        }
                    })

                }
            },
            getSquare(type) {

                if (this.item.flat.length > 0) {
                    let obj = this.item.flat.filter(item => item.rooms === type);
                    if (obj.length > 0) {
                        return obj.sort((a, b) => a.square_main - b.square_main)[0].square_main + '--' + obj.sort((a, b) => b.square_main - a.square_main)[0].square_main;
                    } else {
                        return '0 -- 0';
                    }
                } else {
                    return '0 -- 0';
                }

            },
            getPrice(type) {
                if (this.item.flat.length > 0) {
                    let obj = this.item.flat.filter(item => item.rooms === type);
                    if (obj.length > 0) {
                        return (obj.sort((a, b) => a.price - b.price)[0].price) / 1000000 + '--' + (obj.sort((a, b) => b.price - a.price)[0].price) / 1000000;
                    } else {
                        return '0 -- 0';
                    }
                } else {
                    return '0 -- 0';
                }
            }
        },
        components: {
            ImageSwipper,
            Swiper,
            SwiperSlide
        },
        setup() {
            return {
                modules: [Navigation]
            }
        },
    }
</script>

<style scoped>
    .RedColor {
        color: red !important;
    }
</style>
