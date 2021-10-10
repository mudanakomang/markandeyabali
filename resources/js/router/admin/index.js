
import AppBase from '../../pages/admin/_layouts/AppBase';
import admin from './modules/admin';
import berita from './modules/berita';
import event from './modules/events';

const adminRoutes = {
    path: '/admin',
    name: 'admin.main',
    component: AppBase,
    main: true,
    meta: {
        requiresAuth: true
    },
    children: [
        ...admin,
        ...berita,
        ...event
    ]
}

export default adminRoutes;
