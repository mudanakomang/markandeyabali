import Vue from 'vue';

const cookieAuth = {
    async login(credentials) {
        let loginUrl = '/api/login';
        try {
            const csrfCookie = await Vue.axios.get('/api/sanctum/csrf-cookie');
            if (csrfCookie) {
                const login = await Vue.axios.post(loginUrl, credentials);
                if (login.data.status) {
                    return login.data;
                } else {
                    throw new Error('Login Failed');
                }
            }
        } catch (err) {
            return {
                status: false,
                messages: err.messages
            }
        }
    },
    async logout() {
        let logoutUrl = '/api/logout';
        try {
            const res = await Vue.axios.get(logoutUrl);
            if (res.status) {
                return {
                    status: true,
                }
            } else {
                return {
                    status: false,
                    message: 'Logout Error'
                }
            }
        } catch (err) {
            return {
                status: false,
                message: err.message
            }
        }
    },
    async checkAuth() {
        try {
            const res = await Vue.axios.get('/api/auth-check');
            return res.data;
        } catch (err) {
            return {
                status: false,
                message: err.message,
            };
        }
    },
}

export default cookieAuth;
