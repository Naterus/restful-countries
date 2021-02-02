import VueRouter from 'vue-router';


const routes = [
    {
        path: '/',
        component:  require('./views/Welcome').default,
        // meta: {
        //     title: 'Restful Countries - Get countries data via restful api'
        // }
    },
    {
        path: '/feedback',
        component: require('./views/Feedback').default,
        // meta: {
        //     title: 'Restful Countries - FeedBack'
        //
        // }
    },
    {
        path: '/donate',
        component: require('./views/Donate').default,
        // meta: {
        //     title: 'Restful Countries - Donate'
        // }
    },
]
export default new VueRouter({
    routes, // short for `routes: routes`
    linkActiveClass:'is-active',
})
