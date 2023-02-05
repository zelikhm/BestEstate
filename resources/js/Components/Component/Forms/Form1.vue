<template>
    <section class="question">
        <div class="container">
            <div class="question-wrapper">
                <div class="heading">
                    <p v-if="success" style="color: green">* ваш запрос отправлен</p>
                    <h2 class="heading-2">Есть вопрос?</h2>
                    <p class="text-2">Оставьте свои контактные данные и наш эксперт по недвижимости свяжется с
                        вами!</p>
                </div>
                <!--                        <form action="#" class="form question-form">-->
                <div class="radiob-group">
                    <label class="radiob tg">
                        <input type="checkbox" id="" class="radiob__input" v-on:click="request.isTg === true ? request.isTg = false : request.isTg = true">
                        <span>напишите мне в telegram</span>
                    </label>
                    <label class="radiob wa">
                        <input type="checkbox" id="" class="radiob__input" v-on:click="request.isWhatsapp === true ? request.isWhatsapp = false : request.isWhatsapp = true">
                        <span>напишите мне в whats app</span>
                    </label>
                    <label class="radiob vb">
                        <input type="checkbox" id="" class="radiob__input" v-on:click="request.isViber === true ? request.isViber = false : request.isViber = true">
                        <span>напишите мне в viber</span>
                    </label>
                    <label class="radiob ph">
                        <input type="checkbox" id="" class="radiob__input" v-on:click="request.isPhone === true ? request.isPhone = false : request.isPhone = true">
                        <span>звонок</span>
                    </label>
                </div>
                <div class="question-row">
                    <label class="form-label">
                        <input type="text" v-bind:class="{ 'Error': error_array.nameError }" v-model="request.name" name="" id="" class="form-input form-input--big"
                               placeholder="Ваше имя">
                    </label>
                    <label class="form-label">
                        <input v-bind:class="{ 'Error': error_array.phoneError }" v-model="request.phone" type="number" name="" id="" class="form-input form-input--big"
                               placeholder="Ваш номер телефона">
                    </label>
                    <div class="question-column">
                        <button class="btn btn-xl" v-on:click="sendRequest()">Оставить заявку</button>
                        <label class="accept checkbox" >
                            <input type="checkbox" id="" v-on:click="request.check === false ? request.check = true : request.check = false">
                            <span v-bind:class="{ 'ErrorCheck': error_array.checkError }">Даю согласие на обработку <a href="#">персональных данных</a></span>
                        </label>
                    </div>
                </div>
                <!--                        </form>-->
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Form1",
        data() {
            return {
                request: {
                    isPhone: false,
                    isWhatsapp: false,
                    isViber: false,
                    isTg: false,
                    name: '',
                    phone: '',
                    check: false,
                },
                error_array: {
                    nameError: false,
                    phoneError: false,
                    checkError: false,
                },
                success: false,
            }
        },
        methods: {

            validation() {

                this.request.phone < 11 ? this.error_array.phoneError = true : this.error_array.phoneError = false;
                this.request.name.length < 3 ? this.error_array.nameError = true : this.error_array.nameError = false;
                this.request.check === false ? this.error_array.checkError = true : this.error_array.checkError = false;

                if(this.error_array.nameError === false && this.error_array.phoneError === false && this.error_array.checkError === false) {
                    return true;
                } else {
                    return false;
                }

            },
            sendRequest() {
                let status = this.validation();

                if(status && this.success === false) {
                    axios.post('/api/manager/send', {
                        isTg: this.request.isTg,
                        isWhatsapp: this.request.isWhatsapp,
                        isViber: this.request.isViber,
                        isPhone: this.request.isPhone,
                        name: this.request.name,
                        phone: this.request.phone,
                    }).then(res => {
                        this.success = true;
                    })
                }
            }

        },
    }
</script>

<style scoped>
    .Error {
        border-color: red;
    }
    .ErrorCheck {
        color: red!important;
    }
</style>
