
import Vue from 'vue'
import App from './App.vue';
import Programs from '../js/components/public/Programs.vue'
import Ourschool from '../js/components/public/OurSchool.vue'
import router from '../router/index';

// require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: { 
        App, 
        Programs, 
        Ourschool 
    },
    router,
});

