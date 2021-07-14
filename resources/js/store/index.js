import Vue from "vue";
import Vuex from "vuex";

import state from "./state";
import getters from "./getters";
import mutations from "./mutations";
import actions from "./actions";
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

export default new Vuex.Store({
    getters,
    mutations,
    state,
    actions,
    strict: process.env.NODE_ENV !== "development",
    plugins: [
        createPersistedState({
            // storage: window.sessionStorage,
            storage: window.localStorage,
        }),
    ],
});
