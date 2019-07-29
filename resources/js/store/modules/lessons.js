import * as helpers from "../../helpers/functions";

export default {
    namespaced: true,
    state: {
        lessons: null,
        lesson: null,
    },
    getters: {
        lessons(state){
            return state.lessons;
        },
        lesson(state){
            return state.lesson;
        }
    },
    mutations: {
        LESSONS_INDEX(state, payload) {
            state.lessons = payload;
        },
        LESSON_SHOW(state, payload) {
            state.lesson = payload;
        }
    },
    actions: {
        lessonIndex({ commit }, {tutorial, section}) {
            return axios.get(`/api/${tutorial}/${section}/lesson`)
                .then( response => {
                    commit('LESSON_INDEX', response.data);
                })
                .catch( error => {
                    helpers.checkErrorAndRedirect(error)
                });
        },
        lessonShow({ commit }, {tutorial, section, lesson}) {
            return axios.get(`/api/${tutorial}/${section}/lesson/${lesson}`)
                .then( response => {
                    commit('LESSON_SHOW', response.data);
                })
                .catch( error => {
                    helpers.checkErrorAndRedirect(error)
                });
        }
    }
}
