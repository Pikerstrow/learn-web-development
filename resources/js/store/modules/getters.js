import AppLocalStorage from "../../helpers/AppLocalStorage";

export const getters = {
    tutorials(state){
        return state.tutorials;
    },
    tutorial(state){
        return state.tutorial;
    },
    allLocales(state){
        return state.allLocales;
    }
}
