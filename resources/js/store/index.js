import auth from '../services/auth'
import router from '../router';
import Vuex from 'vuex';
import Vue from 'vue';
Vue.use(Vuex);

const defaultAuthInfo = function () {
    return {
        status: false,
        username: ''
    }
}
const state = () => ({
    info: defaultAuthInfo(),
    errorLoginMessage: '',
});

const getters = {};

const actions = {
    async login({ commit }, { credentials }) {
        let homeRoute = 'admin.home';
        try {
            const authInfo = await auth.login(credentials);
            if (authInfo.status) {
                commit('login', authInfo);
                let redirect = router.currentRoute.query.redirect;
                if (typeof redirect !== 'undefined') {
                    router.push(redirect);
                } else {
                    router.push({ name: homeRoute })
                }
            } else {
                commit('setErrorLoginMessage', authInfo.messages);
            }
        } catch (err) {
            console.log(err)
        }
    },
    async logout({ commit }) {
        let loginRoute = 'admin.login';
        try {
            const res = await auth.logout();
            if (res.status) {
                commit('logout');
                router.push({ name: loginRoute });
            } else {

            }
        } catch (err) {
            return new Error(err);
        }
    },
    async checkAuth({ state, commit }) {
        if (!state.info.status) {
            try {
                const authInfo = await auth.checkAuth();
                if (authInfo.status) {
                    commit('login', authInfo);
                }
            } catch (err) {
                console.log(err);
            }
        }
    },

}
const mutations = {
    login(state, { status, username }) {
        state.info.status = status;
        state.info.username = username;
    },
    logout(state) {
        state.info = defaultAuthInfo();
    },
    setErrorLoginMessage(state, message) {
        state.errorLoginMessage = message;
    },
};

export default new Vuex.Store({
    state,
    getters,
    actions,
    mutations,
});

