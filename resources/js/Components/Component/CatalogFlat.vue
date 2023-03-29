<template>
    <div class="cards catalog-cards">
        <div class="cards-item" v-for="(item, index) in jk" :key="index">
            <!-- Swiper -->
            <div class="cards-slider">
                <div class="btns-group">
                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                   alt=""><span>3D-просмотр</span></a>
                </div>
                <span class="gallery-value">+{{ item.images_array.length }}</span>
                <swiper
                    class="swiper"
                    :modules="modules"
                    :slides-per-view="1"
                    :space-between="30"
                    :loop="true"
                    :pagination="{ clickable: true }"
                    :navigation="true"
                >
                    <swiper-slide v-if="item.images_array.length > 0" v-for="image in item.images_array"><img :src="image" alt=""></swiper-slide>
                    <swiper-slide v-else><img src="img/kp-bl/kpGallerySwiper4.jpg" alt=""></swiper-slide>
                </swiper>
            </div>
            <div class="cards-content">
                <div class="cards-info">
                    <div class="cards-info-wrapper">
                        <div class="cards-info-main">
                            <div class="cards-heading">
                                <h3 class="heading-3">
                                    <Link :href="'/jk/' + item.jk.slug + '/' + item.slug">
                                        {{ item.title }}
                                    </Link>
                                </h3>
                                <ul class="cards-specifications">
                                    <li v-if="item.square_main">Площадь: {{ item.square_main }} м²</li>
                                    <li v-if="item.float">Этаж: {{ item.float }} из {{ item.jk.floors }}</li>
                                </ul>
                            </div>
                            <div class="builder">
                                <div class="builder-title">{{ item.address }}</div>
                                <div class="builder-info">
                                    <a href="#" class="builder-name" v-if="item.builder !== undefined">{{ item.builder.name }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="cards-info-second">
                            <div class="cards-price">
                                <div class="cards-price-wrapper">
                                    <div class="cards-price-main">{{ getPrice(item) }} ₽</div>
                                </div>
                                <div class="cards-price-second">{{ getSquarePrice(item) }} ₽/м2</div>
                            </div>
                            <div class="cards-date">Добавлено: {{ item.created_at }}</div>
                            <div class="cards-views" v-if="item.view">{{ item.view }} просмотров</div>
                        </div>
                    </div>
                </div>
                <div class="cards-nav">
                    <a href="#" class="btn-border btn-lg to-state" data-state="contacts"><i
                        class="icomoon icon-calling-bold"></i><span>Показать контакты</span></a>
                    <a href="#" class="btn-ic"><i class="icomoon icon-favourites"></i></a>
                    <a href="#" class="btn-ic"><i class="icomoon icon-location"></i></a>
                    <a href="/img/logo-black.png" download="filename" class="btn-ic"><i
                        class="icomoon icon-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Pagination, Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'swiper/vue'
    import 'swiper/css'
    import 'swiper/css/pagination'
    import 'swiper/css/navigation'

    import { Link } from '@inertiajs/vue3'

    export default {
        name: "CatalogFlat",
        props:['jk'],
        data() {
            return {
                show: 0,
            }
        },
        created() {
          console.log(this.jk);
        },
        methods: {
            getPrice(item) {
                return item.price.toLocaleString('ru');
            },
            getSquarePrice(item) {
                if(item.square_main) {
                    return (item.price / item.square_main).toLocaleString('ru');
                } else {
                    return 'not';
                }
            },
            addFavorite(item, type) {

                if(this.user !== null) {

                    axios.post('/api/favorite/add', {
                        user_id: this.user.id,
                        flat_id: type === 1 ? item.id : null,
                        jk_id: type === 0 ? item.id : null,
                    }).then(res => {
                        if(res.status === 200) {
                            item.favorite = true;
                        }
                    })

                }

            },
            removeFavorite(item, type) {
                if(this.user !== null) {

                    axios.post('/api/favorite/remove', {
                        user_id: this.user.id,
                        flat_id: type === 1 ? item.id : null,
                        jk_id: type === 0 ? item.id : null,
                    }).then(res => {
                        if(res.status === 200) {
                            item.favorite = false;
                        }
                    })

                }
            }
        },
        components: {
            Swiper,
            SwiperSlide,
            Link
        },
        setup() {
            return {
                modules: [Pagination, Navigation]
            }
        }
    }
</script>

<style scoped>

</style>
