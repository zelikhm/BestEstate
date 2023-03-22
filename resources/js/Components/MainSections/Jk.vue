<script setup>
    import JkHousesSwipper from '../Component/Swipper/JkHousesSwipper.vue'
    import {Link} from '@inertiajs/vue3'

</script>

<template>
    <section class="jk-bl">
        <div class="container--fluid">
            <div class="heading-row">
                <h2 class="heading-2">Жилые комплексы</h2>
                <Link :href="'/catalog?type_jk=0&method=1'" class="btn-second btn-md">Смотреть все</Link>
            </div>
            <!-- Swiper -->

            <div class="swiper-container">
                <JkHousesSwipper
                    @addFavorite="addFavorite"
                    @removeFavorite="removeFavorite"
                    :jk="jk"
                ></JkHousesSwipper>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props:['user', 'jk'],
        name: "Jk",
        methods: {
            addFavorite(item, type) {

                if (this.user !== null) {

                    axios.post('/api/favorite/add', {
                        user_id: this.user.id,
                        flat_id: type === 1 ? item.id : null,
                        jk_id: type === 0 ? item.id : null,
                    }).then(res => {
                        if (res.status === 200) {
                            item.favorite = true;
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
                            item.favorite = false;
                        }
                    })

                }
            }
        }
    }
</script>

<style scoped>

</style>
