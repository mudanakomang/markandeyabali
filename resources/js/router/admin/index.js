import Home from '../../pages/admin/Home';
import AppBase from '../../pages/admin/_layouts/AppBase';

const adminRoutes = {
    path: '/admin',
    name: 'admin.main',
    component: AppBase,
    main: true,
    meta: {
        requiresAuth: true
    },
    children: [
        {
            path: 'home',
            name: 'admin.home',
            component: Home,
            alias: '/admin'
        }
    ]
}

export default adminRoutes;
