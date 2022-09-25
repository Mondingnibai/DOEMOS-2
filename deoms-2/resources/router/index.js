import Vue from 'vue'
import VueRouter  from 'vue-router'
import Hello from '../js/components/public/Hello.vue';
import Home from '../js/components/public/Home.vue';

Vue.use(VueRouter);

const routes =  [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
];

let router = new VueRouter ({
    mode: 'history',
    routes,
})

export default router;