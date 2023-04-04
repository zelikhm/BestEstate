<template>
    <section class="request">
        <div class="container">
            <div class="request-wrapper">
                <div class="heading">
                    <p style="color: green" v-if="success">
                        * сообщение отправлено
                    </p>
                    <h3 class="heading-3">Не можете найти подходящий вариант?</h3>
                    <p class="text-2">Мы сможем вам помочь! Оставьте свои контактные данные и с Вами свяжется наш
                        риэлтор.</p>
                </div>
                <div class="form">
                    <label for="" class="form-label">
                        <input type="number" name="" v-model="request.phone" v-bind:class="{ 'Error': error.phone }" id="" class="form-input form-input--big"
                               placeholder="Ваш номер телефона">
                    </label>
                    <div class="col">
                        <button class="btn btn-xl" v-on:click="sendForm()">Оставить заявку</button>
                        <label for="" class="accept checkbox" v-on:click="request.check === false ? request.check = true : request.check = false">
                            <input type="checkbox" :checked="request.check">
                            <span v-bind:class="{ 'ErrorCheck': error.check }">Даю согласие на обработку <a href="#">персональных данных</a></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Form2",
        data() {
            return {
                request: {
                    phone: '',
                    check: false
                },
                error: {
                    phone: false,
                    check: false,
                },
                success: false,
            }
        },
        methods: {
            validation() {

                this.request.phone.length < 10 ? this.error.phone = true : this.error.phone = false;
                this.request.check === false ? this.error.check = true : this.error.check = false;

                if(this.error.phone === false && this.error.check === false) {
                    return true;
                } else {
                    return false;
                }

            },

            sendForm() {
                let status = this.validation();

                if(status && this.success === false) {
                    axios.post('/api/manager/send', {
                        name: 'Не определен',
                        phone: this.request.phone,
                    }).then(res => {
                        this.success = true;

                        this.request.check = false;
                        this.request.phone = '';
                    })
                }
            }
        }
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
