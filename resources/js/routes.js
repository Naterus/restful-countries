import VueRouter from 'vue-router';



const routes = [
    {
        path: '/',
        name:'home',
        component:  require('./views/Welcome').default,
    },
    {
        path: '/api-documentation/version/1',
        name:'docs.v1',
        component: require('./views/docs/V1').default,
    },
    {
        path: '/feedback',
        name:'feedback',
        component: require('./views/Feedback').default,
    },
    {
        path: '/donate',
        name:'donate',
        component: require('./views/Donate').default,
    },
    {
        path: '/request-access-token',
        name:'request-token',
        component: require('./views/RequestToken').default,
    },
    {
        path: '/refresh-access-token',
        name:'refresh-token',
        component: require('./views/RefreshToken').default,
    },
]
export default new VueRouter({
    routes, // short for `routes: routes`
    linkActiveClass:'active',
    mode: 'history'
})
