
import Vue from 'vue'
import App from './App.vue';
import VueAxios from 'vue-axios'
import axios from 'axios'
import Programs from '../js/components/public/Programs.vue'
import Ourschool from '../js/components/public/OurSchool.vue'
import Teachers from '../js/components/public/Teachers.vue'
import History from '../js/components/public/History.vue'
import Contact from '../js/components/public/Contact-us.vue'
import Announcement from '../js/components/admin/Announcement.vue'
import Newannouncement from '../js/components/admin/NewAnnouncement.vue'
import Editannouncement from '../js/components/admin/EditAnnouncement.vue'
import router from '../router/index';

// require('./bootstrap');
window.Vue = require('vue').default;
Vue.use(VueAxios,axios);

const app = new Vue({
    el: '#app',
    components: { 
        App, 
        Programs, 
        Ourschool,
        Contact,
        Announcement,
        Newannouncement,
        Editannouncement,
        Teachers,
        History
    },
    router,
});

