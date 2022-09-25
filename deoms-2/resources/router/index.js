import Vue from 'vue'
import VueRouter  from 'vue-router'
// import Home from '../js/components/public/Home.vue'

Vue.use(VueRouter);

const routes =  [
        // {
        //     path: '/',
        //     name: 'home',
        //     component: Home
        // }
];

let router = new VueRouter ({
    mode: 'history',
    routes,
})

export default router;