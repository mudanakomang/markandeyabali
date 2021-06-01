import Home from '../pages/Home';
import Akademik from '../pages/Akademik';
import Penelitian from '../pages/Penelitian';
import PenjaminanMutu from '../pages/PenjaminanMutu';

const routes = [
	{
		path: '/',
		name: 'home',
		component: Home
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
    }
];

export default routes;
