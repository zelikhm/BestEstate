<script setup>
    import {Link} from '@inertiajs/vue3'
</script>

<template>
    <section class="cat-bl">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Шале</h2>
                <Link :href="'/catalog?type_jk=3&method=1'" class="btn-second btn-md">Смотреть все</Link>
            </div>
            <div class="cat-bl__cards" v-for="(item, index) in shale">
                <div class="cat-bl__cards-item cat-bl__cards-item-1" v-if="index === 0 && index === 2">
                    <div class="cat-bl__cards-info">
                        <div class="cat-bl__cards-heading">
                            <h3 class="heading-3">{{ item.title }}</h3>
                            <p class="text-2">{{ item.address }}</p>
                        </div>
                        <div class="specifications">
                            <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                            </div>
                            <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                            </div>
                            <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                            </div>
                        </div>
                    </div>
                    <div class="cat-bl__cards-nav">
                        <a href="#" class="btn btn-lg">Подробнее</a>
                    </div>
                </div>
                <div class="cat-bl__cards-item cat-bl__cards-item-2" v-if="index === 1 && index === 3">
                    <div class="cat-bl__cards-info">
                        <div class="cat-bl__cards-heading">
                            <h3 class="heading-3">{{ item.title }}</h3>
                            <p class="text-2">{{ item.address }}</p>
                        </div>
                        <div class="specifications">
                            <div class="specifications-item"><img src="img/cat-bl/rooms-w.png" alt=""><span>1–8 комнат</span>
                            </div>
                            <div class="specifications-item"><img src="img/cat-bl/square-w.png" alt=""><span>от 224 до 411 м²</span>
                            </div>
                            <div class="specifications-item"><img src="img/cat-bl/cost-w.png" alt=""><span>от 48 млн. ₽</span>
                            </div>
                        </div>
                    </div>
                    <div class="cat-bl__cards-nav">
                        <a href="#" class="btn btn-lg">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['shale'],
        name: "Shale"
    }
</script>

<style scoped>

</style>
