import './bootstrap';
import '../css/app.css';

// import '../css/fancybox.css';
import '../css/fancybox.min.css';
// import '../css/owl.carousel.css';
// import '../css/owl.carousel.min.css';
// import '../css/style.css';
import '../css/style.min.css';
// import '../css/swiper-bundle.min.css';
// import '../css/swiper-bundle.min.min.css';

// import '../js_native/jquery-3.4.1.min.js'
// import '../js_native/app.js';
// import '../js_native/jquery.fancybox.min.js';
// import '../js_native/jquery.maskedinput.js';
// import '../js_native/jquery.validate.min.js';
// import '../js_native/swiper-bundle.min.min.js';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { InertiaProgress } from '@inertiajs/progress';
import VueGoogleMaps from '@fawmi/vue-google-maps'

const settings = {
    apiKey: 'e3a8f14d-f6c9-45b9-abab-e5ef3f15c863', // Индивидуальный ключ API
    lang: 'ru_RU', // Используемый язык
    coordorder: 'latlong', // Порядок задания географических координат
    debug: false, // Режим отладки
    version: '2.1' // Версия Я.Карт
}

import YmapPlugin from 'vue-yandex-maps'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {

        const VueApp = createApp({ render: () => h(App, props) })

        VueApp.use(plugin)
            .use(VueGoogleMaps, {
                load: {
                    key: 'AIzaSyBo8Ws9ujugchMacJ3BNAvGWTn6b1cmtJ4',
                    language: 'ru'
                }
            })
            .use(YmapPlugin, settings)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },

});

InertiaProgress.init({ color: '#4B5563' });
