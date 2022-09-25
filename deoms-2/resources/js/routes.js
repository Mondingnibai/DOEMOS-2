import Vue from 'vue'
import  {createRouter, createWebHistory}  from 'vue-router'
import Hello from './components/Hello.vue';
import Home from './components/Home.vue';

Vue.use(createRouter);

const routes =  [
        {
            path: '/',
            name: 'home',
            component: Home
        }
];

let router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;