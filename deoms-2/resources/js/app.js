
import Vue from 'vue'
import App from './App.vue';
import router from '../router/index';

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

