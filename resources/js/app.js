require('./bootstrap');

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

import infiniteScroll from 'vue-infinite-scroll';
Vue.use(infiniteScroll);

const app = new Vue({
    el: '#app',
});
