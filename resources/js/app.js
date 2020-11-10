require('./bootstrap');

window.Vue = require('vue');


Vue.component('blog-component', require('./components/blog/BlogComponent.vue').default);
Vue.component('post-component', require('./components/blog/PostComponent.vue').default);
Vue.component('featured-component', require('./components/blog/FeaturedComponent.vue').default);


const app = new Vue({
    el: '#app',
});