/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// photoswipe
window.PhotoSwipe = require('photoswipe/dist/photoswipe');
window.PhotoSwipeUI_Default = require('photoswipe/dist/photoswipe-ui-default');

// canvas-confetti
window.confetti = require('canvas-confetti/src/confetti');

// moment
window.moment = require('moment');

import Vuex from 'vuex'
import storeData from "./store/index"

Vue.use(Vuex);

const store = new Vuex.Store(
    storeData
);

// sentry for vue
import * as Sentry from '@sentry/browser';
import * as Integrations from '@sentry/integrations';

Sentry.init({
    dsn: 'https://b8a5c64007f04eb5bc484a65ca4a361a@sentry.io/5170480',
    integrations: [new Integrations.Vue({Vue, attachProps: true})],
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store,
});
