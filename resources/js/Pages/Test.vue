<template>
    <div>
        <button @click="translatePage">Translate</button>
        <!-- остальная разметка -->
        <p>
            Все отлично, погнали
        </p>
    </div>
</template>

<script>
    import { translate } from '@vitalets/google-translate-api';

    export default {
        data() {
            return {

            }
        },
        mounted() {
            const { text } = await translate('Привет мир');

            console.log(text)
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
