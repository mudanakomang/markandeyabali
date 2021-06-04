import  Home from '../../pages/Home';
import Akademik from '../../pages/Akademik';
import Penelitian from '../../pages/Penelitian';
import PenjaminanMutu from '../../pages/PenjaminanMutu';
import Kemahasiswaan from '../../pages/Kemahasiswaan';
import AppBase from '../../pages/_layouts/AppBase';

const frontEndRoutes = {
    path: '/',
    name : 'main',
    redirect: {name: 'home'},
    component: AppBase,
    children: [
        {
            path: 'home',
            name: 'home',
            component: Home,
        },
        {
            path:'/akademik',
            name: 'akademik',
            component: Akademik
        },
        {
            path:'/penelitian',
            name: 'penelitian',
            component: Penelitian
        },
        {
            path: '/penjaminan-mutu',
            name: 'penjaminan.mutu',
            component: PenjaminanMutu
        },
        {
            path: '/kemahasiswaan',
            name: 'kemahasiswaan',
            component: Kemahasiswaan
        }
    ]
}

export default frontEndRoutes;
