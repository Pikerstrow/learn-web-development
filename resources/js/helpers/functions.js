import AppLocalStorage from "./AppLocalStorage";
import router from '../router';

export function checkLocale(to, from, next){
    const availableLocales = ['en', 'ru'];
    const defaultLocale    = 'en';
    let routeLocale        = to.params.locale;

    if(!routeLocale || !availableLocales.includes(routeLocale)){
        if(AppLocalStorage.has('locale')){
            let currentStorageLocale = AppLocalStorage.get('locale');
            if(availableLocales.includes(currentStorageLocale)){
                return next({name: to.name, params: {locale: currentStorageLocale}});
            } else {
                AppLocalStorage.set('locale', defaultLocale);
                return next({name: to.name, params: {locale: defaultLocale}});
            }
        } else {
            AppLocalStorage.set('locale', defaultLocale);
            return next({name: to.name, params: {locale: defaultLocale}});
        }
    } else if(routeLocale && availableLocales.includes(routeLocale)){
        let currentStorageLocale = AppLocalStorage.get('locale');
        if(currentStorageLocale !== routeLocale){
            AppLocalStorage.set('locale', routeLocale);
            return next({name: to.name, params: {locale: routeLocale}});
        }
    }
    return next();
}

export function checkErrorAndRedirect(error){
    if(error.response && error.response.status == 404){
        router.push({name: 'not-found'});
    } else {
        router.push({name: 'internal-error'});
    }
}

export function scrollToTop(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

export function moveToTop(){
    window.scrollTo({
        top: 0
    });
}



