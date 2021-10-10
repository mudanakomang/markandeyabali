<template>
    <div>
        <v-container  class="text-h5 mb-2 font-weight-bold ml-2">
            Daftar Berita
        </v-container>
        <v-divider class="mb-4"></v-divider>
       <v-data-table
        :headers="headers"
        :items="displayBerita"
        :page.sync="currentPage"
        :loading="loading"
        :options.sync="options"
        :server-items-length="totalBerita"
        @page-count ="totalPages = $event"
        hide-default-footer
       >
        <template v-slot:item="{item}">
        <tr :style="item.publish ? '':  'background-color: #c7c5c5'">
            <td>{{item.nomor}}</td>
            <td>{{item.judul}}</td>
            <td><div v-html="item.isi"></div></td>
            <td>
                <v-img class="img-thumbnail"
                    max-width="200px"
                    :src="!item.gambar ? '/img/noimage.png' : item.gambar"
                ></v-img>
            </td>
            <td>{{item.publish ?  'Ya': 'Tidak'}}</td>
            <td>{{item.tgl_publish}}</td>
            <td data-app>
                <v-checkbox
                    v-model="item.publish"
                    :label="item.publish ? 'Jangan diterbitkan': 'Terbitkan'"
                    :color="item.publish ? 'green':'red'"
                    class="pb-3"
                    hide-details
                    @change="publishSetting(item.id, item.publish)"
                ></v-checkbox>
                <v-btn
                    :to="{ name: 'edit.berita', params: { id: item.id } }"
                    :disabled="loading"
                    color="info"
                    class="mx-1 white--text"
                    small
                >
                    Edit
                </v-btn>
                <DeleteButton
                    :disabled="loading"
                    :onConfirm="deleteBerita(item.id)"
                    color="error"
                    left
                    class="mx-2 white--text"
                    small
                    ><i class="fa fa-trash"></i>
                </DeleteButton>
            </td>
        </tr>
      </template>
       </v-data-table>
       <div class="text-center pt-2 mt-3">
            <v-pagination
                v-model="currentPage"
                :length="totalPages"
                total-visible="7"
            ></v-pagination>
        </div>
        <v-fab-transition  class="pt-12">
            <v-btn
                color="cyan"
                dark
                small
                absolute
                top
                right
                fab
                @click="$router.push({name: 'tambah.berita'})"
            >
            <v-icon>mdi-plus</v-icon>
            </v-btn>
        </v-fab-transition>



    </div>
</template>

<script>
import { getAll, destroy } from '../../../services/crud';
import PageInnerset from '../_layouts/PageInnerset';
import DeleteButton from '../_layouts/DeleteButton';

export default {
    components: {
        PageInnerset,
        DeleteButton
    },
    data(){
        return {
            currentPage: 1,
            totalPages: 0,
            totalBerita: 0,
            berita: [],
            loading: true,
            footerProps: { 'items-per-page-options': [10, 20, 50, 100] },
            options: {
                groupBy: [],
                groupDesc: [],
                itemsPerPage: 10,
                multiSort: false,
                mustSort: false,
                page: 1,
                sortBy: [],
                sortDesc: [],
            },
        }
    },
    computed: {
        displayBerita() {
            return this.berita.map((brt,index) => ({
                ...brt,
                nomor: index+1,
                isi: brt.isi.length > 200 ? brt.isi.substring(0,200) : brt.isi
            }))
        },
        headers(){
            return [
                {
                    text: '#',
                    value: 'nomor',
                    sortable: false,
                },
                {
                    text: 'Judul Berita',
                    value: 'judul',
                    width: 400
                },
                {
                    text: 'Isi Berita',
                    value: 'isi',
                    sortable: false,
                    width: 400
                },
                {
                    text: 'Gambar',
                    value: 'gambar',
                    sortable: false,
                    width: 200
                },
                {
                    text: 'Diterbitkan',
                    value: 'publish',
                    sortable: false
                },
                {
                    text: 'Tanggal Terbit',
                    value: 'tgl_publish',
                },
                {
                    text:'',
                    value: 'action',
                    sortable: false,
                }
            ]
        }
    },
    watch: {
        options: {
            handler(){
                this.getAllBerita();
            }
        }
    },
    mounted(){
        this.getAllBerita();
    },
    methods: {
        getAllBerita: async function(){
            try{
                let url = '/api/berita/list';
                this.loading = true;
                const { itemsPerPage, page, sortBy, sortDesc } = this.options;
                const res = await getAll(url, {
                    itemsPerPage,
                    page,
                    sortBy,
                    sortDesc
                });
                console.log(res)
                this.berita = res.berita.data;
                this.totalBerita = res.berita.total;
            }catch(err){
                console.log(err)
            } finally {
                this.loading = false;
            }
        },
        deleteBerita: function(id){
            const cb = async function() {
                try {
                    this.loading = true;
                    let url = '/api/berita/'+id;
                    const res = destroy(url)
                    if(res){
                        this.getAllBerita();
                    }
                } catch (error) {
                    console.log(error);
                } finally{
                    this.loading = false;
                }
            };
            return cb.bind(this);
        },
        publishSetting: function(id,state){
           let url = '/api/berita/publish';
           this.loading  = true;
           Vue.axios.post(url, {id: id, state: state}).then( res => {
               if(res){
                   this.loading = false
               }
           })
        }
    }
}
</script>
<style scoped>
.img-thumbnail {
  padding: 0.25rem;
  background-color: #ffffff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
  max-width: 100%;
  height: auto;
}
.v-btn--fab.v-size--small.v-btn--absolute.v-btn--top{
    top: 25px;
}
</style>
