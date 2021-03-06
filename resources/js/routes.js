import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
    routes: [{
            path: '/',
            name: '/',
            component: require('./views/Home').default
        },
        {
            path: '/:id',
            name: 'author',
            component: require('./views/Author').default,
            props: true
        },
        {
            path: '/:slug',
            name: 'post',
            component: require('./views/Post').default,
            props: true
        },

        {
            path: '*',
            component: require('./views/404').default
        },
    ],
    mode: 'history'
});