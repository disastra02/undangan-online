import { createRouter, createWebHistory } from "vue-router";

import Dashboard from './components/Dashboard.vue';
import Profile from './components/Profile.vue';

const routes = [
    {
        path: '/',
        component: Dashboard
    },
    {
        path: '/profile',
        component: Profile
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;