export default {
    state: {
        weddingBoards: []
    },
    getters: {
        getWeddingBoards(state){
            return state.weddingBoards
        }
    },
    mutations: {
        weddingBoards(state, data) {
            return state.weddingBoards = data
        }
    },
    actions: {
        getWeddingBoards(context) {
            axios({
                method: 'GET',
                url: 'api/weddingboard',
            }).then((response) => {
                context.commit("weddingBoards", response.data.result);
            }).catch(response => {
                console.log(response);
            })
        },
    },
}