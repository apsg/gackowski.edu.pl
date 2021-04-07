require('./bootstrap');

import Typed from "typed.js";

/**
 * Codersrank stuff
 */
import CodersrankWorkExperience from '@codersrank/work-experience/esm/codersrank-work-experience';
import CodersrankEducation from '@codersrank/education/esm/codersrank-education';
import CodersrankSummary from '@codersrank/summary/esm/codersrank-summary';
import CodersRankSkillsChart from '@codersrank/skills-chart/esm/codersrank-skills-chart';

window.customElements.define('codersrank-work-experience', CodersrankWorkExperience);
window.customElements.define('codersrank-education', CodersrankEducation);
window.customElements.define('codersrank-summary', CodersrankSummary);
window.customElements.define('codersrank-skills-chart', CodersRankSkillsChart);

window.Vue = require('vue').default;
Vue.component('blog-list', require('./components/BlogList.vue').default);
Vue.component('blog-post', require('./components/BlogPost.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);

import infiniteScroll from 'vue-infinite-scroll';
import Vuex from 'vuex';
import VueRouter from 'vue-router';

Vue.use(infiniteScroll);
Vue.use(VueRouter);
Vue.use(Vuex)

import {router} from './router';
import store from './store';

const vuex = new Vuex.Store(store);

const app = new Vue({
    router,
    store: vuex,
    el: '#app',
    mounted() {
        let typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            backDelay: 3500,
            typeSpeed: 50,
            loop: true
        });
        let typed2 = new Typed('#typed2', {
            stringsElement: '#typed-strings2',
            backDelay: 3500,
            typeSpeed: 50,
            loop: true
        });
    },

    computed: {
        isAbout() {
            return this.$route.path === '/';
        }
    }
});

