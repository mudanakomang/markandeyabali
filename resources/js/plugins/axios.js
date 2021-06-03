import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import vuexStore from '../store';
import vueRouter from '../router';
const { isNavigationFailure } = VueRouter;

const config = {
    withCredentials: true,
    crossDomain: true,
    baseURL: process.env.MIX_VUE_APP_API_ENDPOINT,
}
let api = axios.create(config);
api.interceptors.response.use(
    response => response,
    error => {
        if(error.response.status == 401){
            vuexStore.commit('logout');
            vueRouter.push({
                name: 'login',
                query: { redirect: vueRouter.currentRoute.fullPath}
            }).catch(function(failure){
                if(isNavigationFailure(failure)){

                }
            })
        }else{
            throw error;
        }
    }
)

Vue.use(VueAxios, api);
