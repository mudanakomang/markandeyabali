<template>
    <div>
        <h1>Markandeya News</h1>
        <section class="content pt-20">
            <v-container>
                <v-row v-if="loadingPage">
                    <v-col
                        class="text-subtitle-1 text-center"
                        cols="12"
                    >
                        Memuat Berita
                    </v-col>
                    <v-col cols="12">
                        <v-progress-linear
                            color="deep-purple accent-4"
                            indeterminate
                            rounded
                            height="6"
                        ></v-progress-linear>
                    </v-col>
                </v-row>
                <v-row class="mb-5" v-if="!loadingPage">
                    <div class="col-md-4" v-for="(berita, index) in displayBerita" :key="index">
                    <div class="card h-100">
                        <img v-if="berita.gambar" class="card-img-top" :src="berita.gambar" alt="card image collar">
                        <div class="card-body">
                            <h2 class="card-title font-weight-bold">{{berita.judul}}</h2>
                            <span class="date-read" style="color: #b4b4b4; font-size: .8rem">{{ fomartDate(berita.tgl_publish) }}</span>
                            <div class="card-text" v-html="berita.isi"></div>

                        </div>
                    </div>
                    </div>
                </v-row>
                <div class="text-center pt-5 mt-5">
                    <v-pagination class="white" color="cyan" v-model="options.page" @input="handlePageChanges" :length="Math.ceil(totalBerita/options.itemsPerPage)"  total-visible="7"></v-pagination>
                </div>
            </v-container>

        </section>
    </div>
</template>
<script>
import { getAll } from '../../services/crud'
export default {
    data() {
        return {
            berita: [],
            loadingPage: false,
            options: {
                groupBy: [],
                groupDesc: [],
                itemsPerPage: 12,
                multiSort: false,
                mustSort: false,
                page: 1,
                sortBy: ['tgl_publish'],
                sortDesc: ['true'],
                publishedOnly: true
            },
            totalBerita: 0
        }
    },
    computed: {
       displayBerita(){
            return this.berita.map((brt, index) => ({
                ...brt,
                isi: brt.isi.length > 400 ? brt.isi.substring(0,400) +' [...]' : brt.isi
            }))
        }
    },
    mounted() {
        this.getBerita();
    },
    methods: {
         getBerita: async function(){
            try{
                this.loadingPage = true;
                let url = '/api/berita/list'
                const { itemsPerPage, page, sortBy, sortDesc, publishedOnly } = this.options;
                const res = await getAll(url, {
                    itemsPerPage,
                    page,
                    sortBy,
                    sortDesc,
                    publishedOnly
                });
                this.berita = res.berita.data;
                this.totalBerita = res.berita.total;
                console.log(res.berita.total)
            }catch(err){
                console.log(err)
            } finally {
                this.loadingPage  = false;
            }
        },
        fomartDate(date){
            let dt = new Date(date);
            dt = dt.toLocaleString('id-ID', {year: 'numeric', month: 'long', day: 'numeric'})
            return dt;
        },
        handlePageChanges(value){
            this.options.page = value;
            this.getBerita();
            $('.scroll-to-top').click()
        },
    }
}
</script>
