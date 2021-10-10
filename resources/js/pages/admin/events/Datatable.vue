<template>
   <div>
        <v-container  class="text-h5 mb-2 font-weight-bold ml-2">
            Daftar Event
        </v-container>
        <v-divider class="mb-4"></v-divider>
        <v-data-table
            :headers="headers"
            :items="displayEvents"
            :page.sync="currentPage"
            :loading="loading"
            :options.sync="options"
            :server-items-length="totalEvent"
            @page-count ="totalPages = $event"
            hide-default-footer
        >
            <template v-slot:item="{item}">
                <tr>
                    <td>{{ item.nomor }}</td>
                    <td>{{ item.judul }}</td>
                    <td>
                        <div v-html=" item.detail "></div>
                    </td>
                    <td>
                    <v-img class="img-thumbnail"
                        max-width="200px"
                        :src="!item.gambar ? '/img/noimage.png' : item.gambar"
                    ></v-img>
                    </td>
                    <td>{{ item.tgl_mulai }}</td>
                    <td>{{ item.tgl_selesai }}</td>
                    <td data-app>
                        <v-btn
                            :to="{ name: 'edit.event', params: { id: item.id } }"
                            :disabled="loading"
                            color="info"
                            class="mx-1 white--text"
                            small
                        >
                            Edit
                        </v-btn>
                        <DeleteButton
                            :disabled="loading"
                            :onConfirm="deleteEvent(item.id)"
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
                @click="$router.push({name: 'tambah.event'})"
            >
            <v-icon>mdi-plus</v-icon>
            </v-btn>
        </v-fab-transition>
   </div>
</template>
<script>

import { getAll,destroy } from '../../../services/crud';
import DeleteButton  from '../_layouts/DeleteButton'
export default {
    components: {
        DeleteButton
    },
     data(){
        return {
            currentPage: 1,
            totalPages: 0,
            totalEvent: 0,
            events: [],
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
        displayEvents(){
            return this.events.map((event, index) => ({
                ...event,
                nomor: index+1
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
                    text: 'Judul Event',
                    value: 'judul',
                    width: 300
                },
                {
                    text: 'Detail',
                    value: 'detail',
                    sortable: false,
                    width: 400
                },
                {
                    text: 'Gambar',
                    value: 'gambar',
                    sortable: false,
                    width: 300
                },
                {
                    text: 'Tanggal Mulai',
                    value: 'tgl_mulai',
                    sortable: false
                },
                {
                    text: 'Tanggal Selesai',
                    value: 'tgl_selesai',
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
                this.getAllEvents();
            }
        }
    },
    mounted(){
        this.getAllEvents();
    },
    methods: {
         getAllEvents: async function(){
            try{
                let url = '/api/event/list';
                this.loading = true;
                const { itemsPerPage, page, sortBy, sortDesc } = this.options;
                const res = await getAll(url, {
                    itemsPerPage,
                    page,
                    sortBy,
                    sortDesc
                });
                console.log(res)
                this.events = res.events.data;
                this.totalEvent = res.events.total;
            }catch(err){
                console.log(err)
            } finally {
                this.loading = false;
            }
        },
         deleteEvent: function(id){
            const cb = async function() {
                try {
                    this.loading = true;
                    let url = '/api/event/'+id;
                    const res = destroy(url)
                    if(res){
                        this.getAllEvents();
                    }
                } catch (error) {
                    console.log(error);
                } finally{
                    this.loading = false;
                }
            };
            return cb.bind(this);
        },
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
