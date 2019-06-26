import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/*Imported components*/
import MainPage from './components/MainPage';
import TutorialsPage from './components/TutorialsPage';
import TutorialPage from './components/TutorialPage';
import NotFoundPage from "./components/NotFoundPage";


const routes = [
    {
        path: '/',
        name: 'main',
        component: MainPage,
        meta: {

        }
    },
    {
        path: '/tutorials_page',
        name: 'tutorials',
        component: TutorialsPage,
        meta: {

            styles: {
                backgroundColor: 'white',
                borderBottom: 'none',
                position: 'fixed',
                boxShadow: '0px 0px 11px 0px rgba(0,0,0,0.75)'
            }
        }
    },
    {
        path: '/tutorials_page/:tutorial',
        name: 'tutorial',
        component: TutorialPage,
        meta: {
            styles: {
                backgroundColor: 'white',
                borderBottom: 'none',
                position: 'fixed',
                boxShadow: '0px 0px 11px 0px rgba(0,0,0,0.75)'
            },

        }
    },
    {
        path: '/*',
        name: 'not-found',
        component: NotFoundPage,
        meta: {

        }
    }
];

export const router = new VueRouter({
    routes: routes,
    mode: 'history'
});


