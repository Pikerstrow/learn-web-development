import * as helpers from "../../helpers/functions";

export const actions = {
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
