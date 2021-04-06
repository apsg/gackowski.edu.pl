import VueRouter from 'vue-router'
import About from "./components/pages/About";
import Blog from "./components/pages/Blog";
import Contact from "./components/pages/Contact";
import Resume from "./components/pages/Resume";
import Works from "./components/pages/Works";

const routes = [
    {
        path: '/',
        component: About,
    },
    {path: '/contact', component: Contact},
    {path: '/resume', component: Resume},
    {path: '/works', component: Works},
    {path: '/blog', component: Blog},
    // {path: '/blog/:slug', component: Blog}
];

export const router = new VueRouter({
    routes,
    hashbang: false,
    history: true,
    mode: 'history',
    linkActiveClass: 'active',
    transitionOnLoad: true,
    root: '/'
});
