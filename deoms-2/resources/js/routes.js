import Vue from 'vue'
import  {createRouter, createWebHistory}  from 'vue-router'
import Hello from './components/Hello.vue';
import Home from './components/Home.vue';
import Newannouncement from '../js/components/admin/NewAnnouncement.vue'

Vue.use(createRouter);

const routes =  [
        {
            path: '/add-announcement',
            name: 'add-announcement',
            component: Newannouncement
        }
];

let router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;