import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

/*Imported components*/
import App from './components/App';
import MainPage from './components/pages/MainPage';
import TutorialsPage from './components/pages/TutorialsPage';
import TutorialPage from './components/pages/TutorialPage';
import NotFoundPage from "./components/pages/NotFoundPage";
import InternalErrorPage from "./components/pages/InternalErrorPage";
import AppLocalStorage from './helpers/AppLocalStorage';

import * as helpers from './helpers/functions';


const routes = [
    {
        path: "",
        redirect: "/" + (AppLocalStorage.get('locale') || 'en')
    },
    {
        path: '/:locale',
        component: App,
        children: [
            {
                path: '',
                name: 'main',
                component: MainPage,
                meta: {
                    title: 'Learn Web Development - free tutorials and lessons!'
                }
            },
            {
                path: 'tutorials',
                name: 'tutorials',
                component: TutorialsPage,
                meta: {
                    title: 'Learn Web Development - free tutorials and lessons! Tutorials list.',
                    styles: {
                        backgroundColor: 'white',
                        borderBottom: 'none',
                        position: 'fixed',
                        boxShadow: '0px 0px 11px 0px rgba(0,0,0,0.75)'
                    }
                }
            },
            {
                path: 'tutorials/:tutorial',
                name: 'tutorial',
                component: TutorialPage,
                meta: {
                    title: {param: 'tutorial'},
                    styles: {
                        backgroundColor: 'white',
                        borderBottom: 'none',
                        position: 'fixed',
                        boxShadow: '0px 0px 11px 0px rgba(0,0,0,0.75)'
                    }
                }
            },
            {
                path: "not-found",
                name: "not-found",
                component: NotFoundPage,
                meta: {
                    title: 'Page Not Found'
                }
            },
            {
                path: "error",
                name: "internal-error",
                component: InternalErrorPage
            },
            {
                path: '*',
                component: NotFoundPage
            }
        ]
    },
    {
        path: '*',
        component: NotFoundPage
    }
];

const router = new VueRouter({
    routes: routes,
    mode: 'history'
});

router.beforeEach(function (to, from, next) {
    helpers.checkLocale(to, from, next)
});

export default router;



