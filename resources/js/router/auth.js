import store from "../store";
import Login from '../pages/admin/auth/Login';
const auth = [
    {
        path:'/admin/login',
        name: 'admin.login',
        component: Login,
        beforeEnter: async (to, from, next) => {
            await store.dispatch('checkAuth');
            const authInfo = store.state.info;
            let homeRoute = 'admin.home';
            if(authInfo.status){
                next({name: homeRoute })
            }else{
                next()
            }
        }
    }
];

export default auth;
