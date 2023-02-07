<template>
    <div class="state" v-bind:class="{ 'active':status }" data-state="sign-up" v-on:click.self="$emit('close')">
        <div class="state-box" style="z-index: 10000">
            <div class="state-heading">
                <img src="img/modal-logo.svg" alt="">
                <div class="icomoon icon-close" @click="$emit('close')"></div>
            </div>
            <div class="heading-3">Регистрация аккаунта</div>
            <form action="#" class="form">
                <div class="form-group">
                    <span class="form-group-title">Логин</span>
                    <label for="" class="form-label">
                        <input type="text" name="" id="" class="form-input" placeholder="">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Электронная почта</span>
                    <label for="" class="form-label">
                        <input type="email" name="" id="" class="form-input" placeholder="">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Пароль</span>
                    <label for="" class="form-label">
                        <input type="password" name="password" id="signPasswordInput"
                               class="form-input password-input" placeholder="">
                        <a href="#" class="password-control" id="signPasswordControl"></a>
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Повторите пароль</span>
                    <label for="" class="form-label">
                        <input type="password" name="password" id="signVerifyPasswordInput"
                               class="form-input password-input" placeholder="">
                        <a href="#" class="password-control" id="signVerifyPasswordControl"></a>
                    </label>
                </div>
                <button type="submit" class="btn btn-lg">Зарегистрироваться</button>
            </form>
            <div class="form-other">
                <div class="form-other-link">Уже есть аккаунт? <a href="#" class="to-state"
                                                                  data-state="login" v-on:click="$emit('openLogin')">Войти</a></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:[
            'status'
        ],
        name: "Register",
    }
</script>

<style scoped>

</style>
