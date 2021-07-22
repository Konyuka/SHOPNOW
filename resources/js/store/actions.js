const actions = {
    updateCart({ commit }, data) {
        commit("updateCart", data);
    },
    addedToCart({ commit }, data) {
        commit("addedToCart", data);
    },
    resetCart({commit}, data) {
        commit("resetCart", data);
    },
    removeFromCart({commit}, data) {
        commit("removeFromCart", data);
    },
    
};

export default actions
