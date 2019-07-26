import * as helpers from "../../helpers/functions";

export default {
    namespaced: true,
    state: {
        tutorials: null,
        tutorial: null,
    },
    getters: {
        tutorials(state){
            return state.tutorials;
        },
        tutorial(state){
            return state.tutorial;
        }
    },
    mutations: {
        TUTORIAL_INDEX(state, payload) {
            state.tutorials = payload;
        },
        TUTORIAL_SHOW(state, payload) {
            state.tutorial = payload;
        }
    },
    actions: {
        tutorialIndex({ commit }, page = 1) {
            axios.get(`/api/tutorial?page=${page}`)
                .then( response => {
                    commit('TUTORIAL_INDEX', response.data);
                })
                .catch( error => {
                    helpers.checkErrorAndRedirect(error)
                });
        },
        tutorialShow({ commit }, tutorial) {
            axios.get(`/api/tutorial/${tutorial}`)
                .then( response => {
                    commit('TUTORIAL_SHOW', response.data);
                })
                .catch( error => {
                    helpers.checkErrorAndRedirect(error)
                });
        }
    }
}
