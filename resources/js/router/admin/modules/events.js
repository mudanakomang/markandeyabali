import Datatble from '../../../pages/admin/events/Datatable';
import Form from '../../../pages/admin/events/Form';

const eventRoutes = [
    {
        path: 'event',
        name: 'event',
        component: Datatble,
    },
    {
        path: 'event/tambah',
        name: 'tambah.event',
        component: Form,
    },
    {
        path: 'event/edit/:id',
        name: 'edit.event',
        component: Form,
        meta: {
            editPage: true
        }
    }
];

export default eventRoutes;
