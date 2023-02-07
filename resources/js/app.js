import './bootstrap';
import '../css/app.css';
// import '../css/fancybox.css';
import '../css/fancybox.min.css';
// import '../css/owl.carousel.css';
// import '../css/owl.carousel.min.css';
// import '../css/style.css';
import '../css/style.min.css';
// import '../css/swiper-bundle.min.css';
import '../css/swiper-bundle.min.min.css';

import '../js_native/jquery-3.4.1.min.js'
import '../js_native/app.js';
import '../js_native/jquery.fancybox.min.js';
import '../js_native/jquery.maskedinput.js';
import '../js_native/jquery.validate.min.js';
// import '../js_native/swiper-bundle.min.min.js';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
