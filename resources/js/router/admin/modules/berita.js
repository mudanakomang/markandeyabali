import Datatable from '../../../pages/admin/berita/Datatable';
import Form from '../../../pages/admin/berita/Form';
const beritaRoutes = [
    {
        path: 'berita',
        name: 'berita',
        component: Datatable,
    },
    {
        path: 'berita/tambah',
        name: 'tambah.berita',
        component: Form,
    },
    {
        path: 'berita/edit/:id',
        name: 'edit.berita',
        component: Form,
        meta: {
            editPage: true,
        }
    }
];

export default beritaRoutes;
