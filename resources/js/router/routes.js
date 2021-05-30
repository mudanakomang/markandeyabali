import Home from '../pages/Home';
import Akademik from '../pages/Akademik';
import Penelitian from '../pages/Penelitian';

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
    }
];

export default routes;
