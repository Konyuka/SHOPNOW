const actions = {
    addedToCart({ commit }, data) {
        commit("addedToCart", data);
    },
    addCartDetails({commit}, data) {
        commit("addCartDetails", data);
    }
};

export default actions
