<script setup>

import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>
<template>
    <div class="state" v-bind:class="{ 'active':status }" data-state="sign-up" v-on:click.self="$emit('close')">
        <div class="state-box" style="z-index: 10000">
            <div class="state-heading">
                <img src="img/modal-logo.svg" alt="">
                <div class="icomoon icon-close" @click="$emit('close')"></div>
            </div>
            <div class="heading-3">Регистрация аккаунта</div>
            <form @submit.prevent="submit">
                <div class="form-group">
                    <span class="form-group-title">Логин</span>
                    <InputError class="mt-2" v-if="form.errors.name" :message="'Проверьте логин'" />
                    <label for="" class="form-label">
                        <input type="text" name="" id="" class="form-input" placeholder="" v-model="form.name">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Электронная почта</span>
                    <InputError class="mt-2" v-if="form.errors.email" :message="'Проверьте email'" />
                    <label for="" class="form-label">
                        <input type="email" name="" id="" class="form-input" placeholder="" v-model="form.email">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Пароль</span>
                    <InputError class="mt-2" v-if="form.errors.password" :message="'Пароль не верный'" />
                    <label for="" class="form-label">
                        <input type="password" name="password" id="signPasswordInput"
                               class="form-input password-input" placeholder="" v-model="form.password">
                        <a href="#" class="password-control" id="signPasswordControl"></a>
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Повторите пароль</span>
                    <label for="" class="form-label">
                        <input type="password" name="password" id="signVerifyPasswordInput"
                               class="form-input password-input" placeholder="" v-model="form.password_confirmation">
                        <a href="#" class="password-control" id="signVerifyPasswordControl"></a>
                    </label>
                </div>
                <button type="submit" class="btn btn-lg" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Зарегистрироваться</button>
            </form>
            <div class="form-other">
                <div class="form-other-link">Уже есть аккаунт? <a href="#" class="to-state"
                                                                  data-state="login" v-on:click="$emit('openLogin')">Войти</a></div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Head, Link, useForm } from '@inertiajs/vue3';
    import InputError from '@/Components/InputError.vue';

    export default {
        props:[
            'status'
        ],
        name: "Register",

        data() {
            return {
                login: '',
                email: '',
                password: '',
                password_confirmation: '',
                error: {
                    login: false,
                    email: false,
                    password: false,
                    password_confirmation: false,
                }
            }
        },
        components: {
            InputError
        },

        methods: {
            // checkEmail() {
            //     var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            //     let status = re.test(this.email);
            //
            //     if(status !== false) {
            //         this.error.email = false;
            //     } else {
            //         this.error.email = true;
            //     }
            // },
            // checkLogin() {
            //
            //     if(this.login === '' || this.login.length < 5) {
            //         this.error.login = true;
            //     } else {
            //         this.error.login = false;
            //     }
            //
            // },
            // checkPassword() {
            //
            //     console.log(this.password, this.password_confirmation)
            //
            //     if(this.password === '' || this.password.length < 8) {
            //         this.error.password = true;
            //     } else {
            //         this.error.password = false;
            //     }
            //
            //     if(this.password_confirmation === '' || this.password_confirmation.length < 8) {
            //         this.error.password_confirmation = true;
            //     } else {
            //         this.error.password_confirmation = false;
            //     }
            //
            // },
            // sendForm() {
            //     this.checkEmail();
            //     this.checkLogin();
            //     this.checkPassword();
            //
            //     console.log(this.error);
            //
            //     if(this.error.login !== true && this.error.email !== true && this.error.password !== true && this.error.password_confirmation !== true) {
            //         const form = useForm({
            //             login: this.login,
            //             email: this.email,
            //             password: this.password,
            //             password_confirmation: this.password_confirmation
            //         })
            //
            //         form.post(route('register'), {
            //             onFinish: () => form.reset('password', 'password_confirmation'),
            //         });
            //
            //     }
            //
            // }
        }
    }
</script>

<style scoped>

    .Error {
        border-color: red;
    }

</style>
