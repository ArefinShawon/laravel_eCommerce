require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('front-main', require('./components/frontEnd/FrontMaster.vue').default);

import {routes} from './routes'

const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router,
});
