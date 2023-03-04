<template>
    <div id="tabs">
        <!-- Кнопки -->

        <ul class="tabs-nav">
            <div v-for="(service, index) in services">
                <li
                    v-if="service.values.length !== 0"
                    v-on:click="setTab(index)"
                >
                    <a v-bind:class="{ 'cursor': tab !== index, 'active': tab === index }">{{ service.title }}</a></li>
            </div>
        </ul>
        <!-- Контент -->
        <div class="tabs-items">
            <div class="tabs-item">
                <div class="tab-arendatoru">
                    <div class="tab-column" v-for="value in first_array">
                        <div class="tab-heading">
                            <div class="tab-icon"><img :src="value.image" alt="">
                            </div>
                            <span>{{ value.title }}</span>
                        </div>
                        <ul v-html="value.description"></ul>
                    </div>
                    <div class="tab-row3" v-if="second_array.length > 0">
                        <div class="tab-column" v-for="value in second_array">
                            <div class="tab-heading">
                                <div class="tab-icon"><img src="img/services/arendatoru/03.svg" alt="">
                                </div>
                                <span>{{ value.title }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        inject: ['services'],
        name: "Services",
        data() {
            return {
                tab: 0,
                first_array: [],
                second_array: [],
            }
        },
        mounted() {
            this.setTab(0);
        },
        methods: {
            setTab(index) {
                this.tab = index

                this.first_array = [];
                this.second_array = [];

                if(this.services[index] !== undefined) {
                    this.services[index].values.forEach((item, count) => {
                        if (count < 2) {
                            this.first_array.push(item);
                        } else {
                            this.second_array.push(item);
                        }
                    })
                }
            }
        }
    }
</script>

<style scoped>
    .cursor {
        cursor: pointer;
    }
</style>
