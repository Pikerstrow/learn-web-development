export const mutations = {
    TUTORIAL_INDEX(state, payload) {
        state.tutorials = payload;
    },
    TUTORIAL_SHOW(state, payload) {
        state.tutorial = payload;
    }
}