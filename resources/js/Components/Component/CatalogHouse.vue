<template>
    <div class="cards catalog-cards">
        <div class="cards-item" v-for="(item, index) in jk" :key="item.id">
            <!-- Swiper -->
            <div class="cards-slider">
                <div class="btns-group">
                    <a href="#" class="btn-w"><img src="img/icons/3d.png"
                                                   alt=""><span>3D-просмотр</span></a>
                </div>
                <span class="gallery-value">+{{ item.images_array.length }}</span>
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
                                <ul class="cards-specifications">
                                    <li v-if="item.square">Площадь: {{ item.square }} м²</li>
                                    <li v-if="item.square_main">Площадь: {{ item.square_main }} м²</li>
                                    <li v-if="item.floor">Этаж: {{ item.floor }} из {{ item.jk.floors }}</li>
                                    <li v-if="item.floors !== null">Этажей: {{ item.floors }}</li>
                                </ul>
                            </div>
                            <div class="builder">
                                <div class="builder-title">{{ item.address }}</div>
                                <div class="builder-info">
                                    <a href="#" class="builder-name" v-if="item.builder">{{ item.builder.name }}</a>
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
                            <div class="cards-views" v-if="item.visible">{{ item.visible }} просмотров</div>
                        </div>
                    </div>
                </div>
                <div class="cards-nav">
                    <a href="#" class="btn-border btn-lg to-state" data-state="contacts"><i
                        class="icomoon icon-calling-bold"></i><span>Показать контакты</span></a>
                    <a style="cursor: pointer" @click="removeFavorite(item, 0, index)" class="btn-ic"><i class="icomoon icon-favourites RedColor" ></i></a>
                    <a style="cursor: pointer" class="btn-ic"><i class="icomoon icon-location"></i></a>
                    <a href="img/logo-black.png" download="filename" class="btn-ic"><i
                        class="icomoon icon-download"></i></a>
                </div>
            </div>
        </div>
        <div class="pagination">
            <div class="pagination-text">Вы посмотрели {{ show }} из {{ jk.length }} обьектов</div>
            <div class="nav-links">
                <a href="#" class="prev icomoon icon-chevron-left disabled"></a>
                <span class="page-numbers current">1</span>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="page-numbers">4</a>
                <a href="#" class="page-numbers">5</a>
                <a href="#" class="page-numbers">6</a>
                <a href="#" class="page-numbers">7</a>
                <a href="#" class="next icomoon icon-chevron-right"></a>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "CatalogHouse",
        props:['jk'],
        inject:['user'],
        data() {
            return {
                show: 0,
            }
        },
        created() {
          console.log(this.jk)
        },
        methods: {
            getPrice(item) {
                return item.price.toLocaleString('ru');
            },
            getSquarePrice(item) {
                if(item.square) {
                    return (item.price / item.square).toLocaleString('ru');
                } else {
                    return 'not';
                }
            },
            removeFavorite(item, type, index) {
                if(this.user !== null) {

                    axios.post('/api/favorite/remove', {
                        user_id: this.user.id,
                        flat_id: type === 1 ? item.id : null,
                        jk_id: type === 0 ? item.id : null,
                    }).then(res => {
                        if(res.status === 200) {
                            item.favorite = false;
                            this.jk.splice(index, 1);
                        }
                    })
                }
            }
        }
    }
</script>

<style scoped>

    .RedColor {
        color: red;
    }

</style>
