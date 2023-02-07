<template>
    <div class="state" v-bind:class="{ 'active': status }" data-state="login" v-on:click.self="$emit('close')">
        <div class="state-box">
            <div class="state-heading">
                <img src="img/modal-logo.svg" alt="">
                <div class="icomoon icon-close" v-on:click="$emit('close')"></div>
            </div>
            <div class="heading-3">Авторизация</div>
            <form action="#" class="form">
                <div class="form-group">
                    <span class="form-group-title">Логин</span>
                    <label for="" class="form-label">
                        <input type="text" name="" id="" class="form-input" placeholder="">
                    </label>
                </div>
                <div class="form-group">
                    <span class="form-group-title">Пароль</span>
                    <label for="" class="form-label">
                        <input type="password" name="password" id="loginPasswordInput"
                               class="form-input password-input" placeholder="">
                        <a href="#" class="password-control" id="loginPasswordControl"></a>
                    </label>
                    <a href="#" class="form-link">забыли пароль?</a>
                </div>
                <button type="submit" class="btn btn-lg">Войти в аккаунт</button>
            </form>
            <div class="form-other">
                <div class="form-other-title">Войти в аккаунт через:</div>
                <div class="form-other-btns">
                    <a href="#" class="form-other-btn">
                        <img src="img/modal/google.svg" alt="">
                        Google
                    </a>
                    <a href="#" class="form-other-btn">
                        <img src="img/modal/vk.svg" alt="">
                        Вконтакте
                    </a>
                </div>
                <div class="form-other-link">У вас нет аккаунта? <a href="#" class="to-state" data-state="sign-up" v-on:click="$emit('openReg')">Зарегистрируйтесь</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['status'],
        name: "Login",
        data() {
            return {

            }
        },
    }
</script>

<style scoped>

</style>
