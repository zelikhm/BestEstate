<template>
    <div>
        <div class="google-map" ref="googleMap">
            <GMapMap :center="center"
                     :options="options"
                     :zoom="15" map-type-id="terrain" style="width: 100%; height: 450px">
                <GMapMarker
                    :key="index"
                    v-for="(m, index) in markers"
                    :position="m.position"
                    :clickable="true"
                    :draggable="true"
                />
            </GMapMap>
        </div>

    </div>
</template>

<script>
    import GoogleMapsApiLoader from 'google-maps-api-loader'

    export default {
        props: {
            mapConfig: Object,
            apiKey: String,
        },

        data() {
            return {
                center: {lat: 55.755937291365655, lng: 37.579058210228595},

                markers: [
                    {
                        position: {
                            lat: 55.755937291365655, lng: 37.579058210228595
                        },
                    }
                ]
            }
        },

        async mounted() {

        },

        methods: {}
    }
</script>

<style scoped>
    .google-map {
        width: 100%;
        height: 450px;
    }
</style>
