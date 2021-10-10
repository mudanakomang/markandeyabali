<template>
    <div>
        <v-container class="text-h5 mb-2 font-weight-bold ml-2">
            {{ $route.meta.editPage ? 'Edit Event': 'Tambah Event' }}
        </v-container>
        <v-skeleton-loader
            v-if="loadingComponent"
            type=" article, card-avatar"
        >
        </v-skeleton-loader>
        <v-divider class="mb-4"></v-divider>
        <v-sheet
            v-if="!loadingComponent"
            elevation="1"
            min-height="70vh"
            width="100%"
            :rounded="'sm'"
        >
        <v-container class="px-10">
            <v-form ref="formEvent" @submit.prevent="submit">
                <input-group required title="Judul">
                    <v-text-field
                        :rules="rules.judul"
                        v-model="item.judul"
                        outlined
                        placeholder="Judul Event"
                    ></v-text-field>
                </input-group>
                 <input-group required title="Isi Berita">
                    <tiptap-vuetify
                        v-model="item.detail"
                        :extensions="extensions"
                    />
                </input-group>
                <input-group required title="Tanggal Event">
                    <v-datetime-picker  label="Pilih Tanggal Mulai" v-model="item.tgl_mulai">
                    </v-datetime-picker>
                    <v-datetime-picker :rules="rules.tgl_mulai" label="Pilih Tanggal Selesai" v-model="item.tgl_selesai">
                    </v-datetime-picker>
                </input-group>
                 <input-group optional title="Gambar">
                   <input-image :image="image" v-on:input="getFile" v-on:modified="modified" v-on:delete="setNoImage"></input-image>
                </input-group>
                <v-container class="d-flex justify-center mt-6">
                    <v-btn
                    type="submit"
                    color="primary"
                    class="px-12"
                    :loading="loadingBtn"
                    :disabled="loadingBtn"
                    >Simpan</v-btn
                    >
                </v-container>
            </v-form>
        </v-container>
        </v-sheet>
    </div>

</template>
<script>
import { getForm, update, store } from '../../../services/crud';
import InputImage from '../../../components/InputImage.vue';
import InputGroup from '../../../components/InputGroup.vue';
import { TiptapVuetify, Heading, Bold, Italic, Strike, Underline, Code, Paragraph, BulletList, OrderedList, ListItem, Link, Blockquote, HardBreak, HorizontalRule, History } from 'tiptap-vuetify';

export default {
  components: { InputGroup, InputImage, TiptapVuetify },
  data(){
      return{
          loadingComponent: false,
          loadingBtn: false,
          item: {
              id: null,
              judul: '',
              detail: '',
              gambar: '',
              tgl_mulai: '',
              tgl_selesai: ''
          },
          isNoImage: false,
          file: null,
          rules: {
              judul: [v => !!v || "Judul event harus diisi"],
              detail: [v=> !!v || "Detail event harus diisi"],
          },
          extensions: [
                History,
                Blockquote,
                Link,
                Underline,
                Strike,
                Italic,
                ListItem,
                BulletList,
                OrderedList,
                [Heading, {
                    options: {
                    levels: [1, 2, 3]
                    }
                }],
                Bold,
                Code,
                HorizontalRule,
                Paragraph,
                HardBreak
            ],
          formData : {},
          editPage:false
      }
  },
  methods: {
     async submit(){
         try{
            this.loadingBtn = true;
            let payloads = new FormData();
            let options = {
                headers: {
                    "Content-Type": "multipart/form-data"
                }
            }
            if(this.$refs.formEvent.validate()){
               if(this.editPage){
                   payloads.append('id', this.item.id)
               }
               payloads.append('judul', this.item.judul);
               payloads.append('detail', this.item.detail);
               payloads.append('tgl_mulai', this.item.tgl_mulai.toISOString());
               payloads.append('tgl_selesai', this.item.tgl_selesai.toISOString());
               payloads.append('noimage', this.isNoImage);
               payloads.append('file', this.file);

               const res = this.editPage
               ?  await update(this.item.submitUrl, payloads, options)
               : await store(this.item.submitUrl, payloads, options)
               if(res){
                   this.$router.push({name: 'event'});
               }
            }
         }catch(err){
             console.log(err)
         } finally {
             this.loadingBtn = false;
         }
     },

        getFile(value){
            this.file = value
        },
        modified(val){
            this.isModified = val;
        },
        setNoImage(){
            this.isNoImage = true;
        }
  },
  async created(){
         this.loadingComponent = true;
        try{
            let url = this.$route.meta.editPage ? '/api/event/edit/'+this.$route.params.id : '/api/event/tambah';
            const form = await getForm(url);
            if(this.$route.meta.editPage){
                this.editPage = true;
                let { item , submitUrl } = form;
                this.item = {
                    ...item,
                    tgl_mulai: new Date(Date.parse(item.tgl_mulai)),
                    tgl_selesai: new Date(Date.parse(item.tgl_selesai))
                }
                this.item.submitUrl = submitUrl
            }else{
                let { submitUrl } = form;
                this.item.submitUrl = submitUrl;
                let start = new Date();
                let end = new Date();
                end.setDate(start.getDate() +1);
                this.item.tgl_mulai = start;
                this.item.tgl_selesai = end;
            }
        }catch(err){
            console.log(err);
        }finally{
            this.loadingComponent = false;
        }
     },
  computed: {
        image() {
            return this.item.gambar ?  this.item.gambar : '/img/noimage.png';
        }
    },
}
</script>
