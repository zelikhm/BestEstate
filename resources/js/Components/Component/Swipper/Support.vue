<template>
    <swiper
        class="swipper"
        :modules="modules"
        :space-between="30"
        :slides-per-view="1"
        :slides-per-group="1"
        :autoplay="{ delay: 3500, disableOnInteraction: false }"
        :loop="true"
        :loop-fill-group-with-blank="true"
        :navigation="{
      prevEl: prev,
      nextEl: next,
    }"
        :pagination="{ clickable: true }"
    >
        <swiper-slide class="swiper-slide consult-slide" v-for="sup in support">
                <div class="consult-slide-img">
                    <img src="img/consult/consult-img.jpg" alt="">
                </div>
                <div class="consult-slide-content">
                    <div class="consult-slide-info">
                        <h3 class="heading-3">{{ sup.name }}</h3>
                        <p class="text-2">{{ sup.status }}</p>
                    </div>
                    <div class="quote" v-html="sup.description">
                    </div>
                    <p style="color: red" v-if="error.opt">
                        *Необходимо выбрать способ связи
                    </p>
                    <p style="color: green" v-if="success">
                        Заявка успешно отправлена
                    </p>
                        <div class="radiob-group">
                            <label class="radiob tg">
                                <input type="checkbox" v-model="call.tg" class="radiob__input">
                                <span>telegram</span>
                            </label>
                            <label class="radiob wa">
                                <input type="checkbox" v-model="call.whats" class="radiob__input">
                                <span>whats app</span>
                            </label>
                            <label class="radiob vb">
                                <input type="checkbox" v-model="call.viber" class="radiob__input">
                                <span>viber</span>
                            </label>
                            <label class="radiob ph">
                                <input type="checkbox" v-model="call.call" class="radiob__input">
                                <span>звонок</span>
                            </label>
                        </div>
                        <label for="" class="form-label">
                            <input type="text" :class="{ 'Error': error.name }" name="" class="form-input form-input--big"
                                   placeholder="Ваше имя" v-model="name">
                        </label>
                        <label for="" class="form-label">
                            <input type="number" :class="{ 'Error': error.phone }" name=""
                                   v-model="phone"
                                   class="form-input form-input--big"
                                   placeholder="Ваш номер телефона">
                        </label>
                        <button class="btn btn-xl" v-on:click="sendForm(sup.id)">Отправить</button>
                        <label for="" class="accept checkbox" v-on:click="check = !check">
                            <input type="checkbox" v-model="check">
                            <span :class="{ 'Error': error.check }" >Даю согласие на обработку <a href="#">персональных данных</a></span>
                        </label>
                </div>
        </swiper-slide>
    </swiper>
    <div class="swiper-nav">
        <div ref="next" class="swiper-button-next consultSwiper-next"></div>
        <div ref="prev" class="swiper-button-prev consultSwiper-prev"></div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Navigation } from 'swiper'
    import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
    import 'swiper/css'
    import 'swiper/css/navigation'
    import { ref } from 'vue';

    export default {
        name: "Support",
        props:['support'],
        data() {
            return {
                call: {
                    tg: false,
                    whats: false,
                    viber: false,
                    call: false,
                },
                name: '',
                phone: '',
                error: {
                    opt: false,
                    phone: false,
                    name: false,
                    check: false,
                },
                success: false,
                check: false,
            }
        },
        methods: {

            checkPhone() {

                if(this.phone.length < 10) {
                    this.error.phone = true;
                } else {
                    this.error.phone = false;
                }

            },
            checkName() {

                if(this.name.length < 5) {
                    this.error.name = true;
                } else {
                    this.error.name = false;
                }

            },
            checkOpt() {

                let status = Object.values(this.call).find(item => item === true);

                if(status !== undefined) {
                    this.error.opt = false;
                } else {
                    this.error.opt = true;
                }

            },
            sendForm(id) {

                this.checkOpt();
                this.checkPhone();
                this.checkName();

                if(this.check !== false) {
                    this.error.check = false;
                } else {
                    this.error.check = true;
                }

                let status = Object.values(this.error).find(item => item === true);

                if(status === undefined) {

                    axios.post('/api/manager/send', {
                        manager_id: id,
                        isTg: this.call.tg,
                        isWhatsapp: this.call.whats,
                        isViber: this.call.viber,
                        isPhone: this.call.call,
                        name: this.name,
                        phone: this.phone,
                    }).then(res => {
                        this.success = true;
                    })

                }
            }

        },
        components: {
            Swiper,
            SwiperSlide
        },
        setup() {
            const prev = ref(null);
            const next = ref(null);
            return {
                modules: [Navigation],
                prev,
                next,
            }
        },
    }
</script>

<style scoped>
    .Error {
        border-color: red;
    }

    .ErrorCheck {
        color: red;
    }
    .swiper-button-next,
    .swiper-button-prev {
        position: absolute;
        top: 50%;
        width: 38px;
        height: 38px;
        z-index: 10;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50px;
        background-color: var(--global-color);
    }
    .swiper-button-next {
        right: -3%;
    }
    .swiper-button-prev {
        left: -4%;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        /*font-family: "icomoon";*/
        font-size: 14px;
        font-weight: 400;
        color: var(--white-color);
    }
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: var(--globalHover-color);
    }

</style>
