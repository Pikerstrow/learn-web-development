export const actions = {
    tutorialIndex({ commit }){
        axios.get('/api/tutorial').then(
            response => {
                commit('TUTORIAL_INDEX', response.data.data);
            }
        ).catch(error => {
            console.log(error)
        });
    },
    tutorialShow({commit}, tutorial){
        axios.get(`/api/tutorial/${tutorial}`).then(
            response => {
                commit('TUTORIAL_SHOW', response.data);
            }
        ).catch(error => {
            console.log(error)
        });
    }
}