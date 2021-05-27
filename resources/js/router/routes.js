import Home from '../pages/Home';
import Akademik from '../pages/Akademik';

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
    }
];

export default routes;
