import { createRouter, createWebHistory } from 'vue-router';

import Home from './Pages/Home/Index.vue';
import Error404 from './Errors/404.vue';

const routes = [
    { path: '/', component: Home, },
    { path: '/:pathMatch(.*)*', component: Error404 }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
