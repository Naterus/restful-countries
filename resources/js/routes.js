import VueRouter from 'vue-router';


const routes = [
    {
        path: '/vue/',
        name:'home',
        component:  require('./views/Welcome').default,
    },
    {
        path: '/vue/feedback',
        name:'feedback',
        component: require('./views/Feedback').default,
    },
    {
        path: '/vue/donate',
        name:'donate',
        component: require('./views/Donate').default,
    },
    {
        path: '/vue/request-access-token',
        name:'request-token',
        component: require('./views/RequestToken').default,
    },
    {
        path: '/vue/refresh-access-token',
        name:'refresh-token',
        component: require('./views/RefreshToken').default,
    },
]
export default new VueRouter({
    routes, // short for `routes: routes`
    linkActiveClass:'is-active',
    mode: 'history'
})
