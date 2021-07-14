const actions = {
    addedToCart({ commit }, data) {
        commit("addedToCart", data);
    },
    resetCart({commit}, data) {
        commit("resetCart", data);
    }
};

export default actions
