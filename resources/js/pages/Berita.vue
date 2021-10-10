<template>
<div>
    <h1>Berita</h1>
    <div class="py-0">
        <div class="container">
            <div v-for="(berita , index) in displayBerita" :key="index">
                <div v-if="index==0">
                    <v-row class="pb-5">
                        <v-col lg="6" sm="12" md="6">
                            <v-img :src="berita.gambar"></v-img>
                        </v-col>
                        <v-col lg="6" sm="12" md="6">
                            <div class="contents" style="padding: 50px; font-size: .9rem; height: auto;">
                                <span class="pb-3" style="font-size: .1rem; text-transform: uppercase; letter-spacing: .9rem;">Berita Terbaru</span>
                                <h2><a href="blog-single.html" style="text-decoration:none;">{{ berita.judul }}</a></h2>
                                <div v-html="berita.isi"></div>
                                <div class="post-meta">
                                    <span class="date-read" style="color: #b4b4b4; font-size: .8rem">{{ fomartDate(berita.tgl_publish) }}</span>
                                </div>
                            </div>
                        </v-col>
                    </v-row>
                    <v-divider class="py-5"></v-divider>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4" v-for="(berita, index) in displayBerita.slice(1, 10)" :key="index">
                <div class="card h-100">
                    <img v-if="berita.gambar" class="card-img-top" :src="berita.gambar" alt="card image collar">
                    <div class="card-body">
                        <h2 class="card-title font-weight-bold">{{berita.judul}}</h2>
                        <span class="date-read" style="color: #b4b4b4; font-size: .8rem">{{ fomartDate(berita.tgl_publish) }}</span>
                        <div class="card-text" v-html="berita.isi"></div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
import { getAll } from '../services/crud';
export default {
    data(){
        return {
            berita: [],
            options: {
                groupBy: [],
                groupDesc: [],
                itemsPerPage: 10,
                multiSort: false,
                mustSort: false,
                page: 1,
                sortBy: ['tgl_publish'],
                sortDesc: ['true'],
                publishedOnly: true
            },
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
                let url = '/api/berita/list'
                const { itemsPerPage, page, sortBy, sortDesc, publishedOnly } = this.options;
                const res = await getAll(url, {
                    itemsPerPage,
                    page,
                    sortBy,
                    sortDesc,
                    publishedOnly
                });
                this.berita = res.berita.data
                console.log(res.berita.data)
            }catch(err){
                console.log(err)
            }
        },
        fomartDate(date){
            let dt = new Date(date);
            dt = dt.toLocaleString('id-ID', {year: 'numeric', month: 'long', day: 'numeric'})
            return dt;
        }
    }
}
</script>
<style scoped>
    .half-post .bg-img{
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        width: 50%;
    }
</style>
