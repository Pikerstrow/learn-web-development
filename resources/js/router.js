import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/*Imported components*/
import Landing from './components/Landing';
import Tutorials from './components/Tutorials';
import Tutorial from './components/Tutorial';
import NotFound from "./components/page_sections/NotFound";


const routes = [
    {
        path: '/',
        name: 'main',
        component: Landing,
        meta: {
            breadcrumb: 'main'
        }
    },
    {
        path: '/tutorials',
        name: 'tutorials',
        component: Tutorials,
        meta: {
            breadcrumb: 'tutorials',
            styles: {
                backgroundColor: 'white',
                borderBottom: 'none',
                position: 'fixed',
                boxShadow: '0px 0px 11px 0px rgba(0,0,0,0.75)'
            }
        }
    },
    {
        path: '/tutorials/:tutorial',
        name: 'tutorial',
        component: Tutorial,
        meta: {
            breadcrumb: 'tutorial',
            styles: {
                backgroundColor: 'white',
                borderBottom: 'none',
                position: 'fixed',
                boxShadow: '0px 0px 11px 0px rgba(0,0,0,0.75)'
            }
        }
    },
    {
        path: '/*',
        name: 'not-found',
        component: NotFound,
        meta: {
            breadcrumb: 'not-found'
        }
    }
];

export const router = new VueRouter({
    routes: routes,
    mode: 'history'
});