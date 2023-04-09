<template>
    <div class="state" v-bind:class="{ 'active': active }" data-state="connection" v-on:click.self="$emit('closeForm')">
        <div class="state-box">
            <div class="state-heading">
                <img src="img/modal-logo.svg" alt="">
                <div class="icomoon icon-close" v-on:click.self="$emit('closeForm')"></div>
            </div>
            <div class="heading-3">Позвоните мне</div>
            <p style="color: green" v-if="success">
                Заявка успешно отправлена*
            </p>
            <div class="form">
                <div class="form-group">
                    <span class="form-group-title">Имя</span>
                    <label for="" class="form-label">
                        <input :class="{ 'Red': error.name }" type="text" name="" id="" class="form-input" placeholder="" v-model="form.name">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Телефон</span>
                    <label for="" class="form-label">
                        <input :class="{ 'Red': error.phone }" type="number" name="" id="" class="form-input" placeholder="" v-model="form.phone">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Электронная почта</span>
                    <label for="" class="form-label">
                        <input :class="{ 'Red': error.phone }" type="email" name="" id="" class="form-input" placeholder="" v-model="form.email">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Сообщение</span>
                    <label for="" class="form-label">
                        <textarea name="" id="" cols="30" rows="5" class="form-input" v-model="form.message"></textarea>
                    </label>
                </div>
                <label class="accept checkbox" v-on:click="form.check = !form.check">
                    <input type="checkbox" v-on:click="form.check = !form.check">
                    <span>Даю согласие на обработку  <a href="#">персональных данных</a></span>
                </label>
                <button type="submit" class="btn btn-lg" v-on:click="sendForm">Позвоните мне</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['active'],
        name: "ContactForm",
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    phone: '',
                    message: '',
                    check: false,
                },
                error: {
                    name: false,
                    email: false,
                    phone: false,
                    message: false,
                    check: false,
                },
                success: false,
            }
        },
        methods: {
            checkEmail() {
                var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                let status = re.test(this.form.email);

                if(status !== false) {
                    this.error.email = false;
                } else {
                    this.error.email = true;
                }
            },
            checkForm() {
                this.checkEmail();

                if(this.form.name.length < 5) {
                    this.error.name = true
                } else {
                    this.error.name = false
                }

                if(this.form.phone.length < 10) {
                    this.error.phone = true
                } else {
                    this.error.phone = false
                }

                if(this.form.check === true) {
                    this.error.check = false
                } else {
                    this.error.check = true
                }

            },
            sendForm() {

                this.checkForm();
                let status = false;

                if(this.error.name !== true && this.error.phone !== true && this.error.email !== true && this.error.check !== true) {
                    status = true
                } else {
                    status = false
                }

                if(status === true) {
                    axios.post('/api/manager/order', {
                        name: this.form.name,
                        email: this.form.email,
                        phone: this.form.phone,
                        message: this.form.message
                    }).then(res => {
                        this.success = true;
                        this.form.phone = '';
                        this.form.name = '';
                        this.form.email = '';
                        this.form.message = '';
                        this.form.check = false;
                    })
                } else {
                    console.log(false)
                }

            }

        }
    }
</script>

<style scoped>
    .Red {
        border-color: red;
    }
</style>
