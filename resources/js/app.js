require('./bootstrap');

window.Vue = require('vue');


Vue.component('blog-component', require('./components/blog/BlogComponent.vue').default);
Vue.component('stories-component', require('./components/blog/StoriesComponent.vue').default);
Vue.component('featured-component', require('./components/blog/FeaturedComponent.vue').default);

Vue.filter('truncate', (text, length, suffix) => {
    return text.length > length ?
        text.substring(0, length) + suffix : text;
});
const app = new Vue({
    el: '#app',
});