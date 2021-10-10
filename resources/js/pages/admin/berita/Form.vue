<template>
    <div>
        <v-container class="text-h5 mb-2 font-weight-bold ml-2">
            {{ $route.meta.editPage ? 'Edit Berita': 'Tambah Berita' }}
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
            <v-form ref="formBerita"  @submit.prevent="submit">
                <input-group required title="Judul">
                    <v-text-field
                        :rules="rules.judul"
                        v-model="item.judul"
                        outlined
                        placeholder="Judul Berita"
                    ></v-text-field>
                </input-group>
                <input-group required title="Isi Berita">
                    <tiptap-vuetify
                        v-model="item.isi"
                        :extensions="extensions"
                    />
                </input-group>
                <input-group optional title="Gmabar">
                   <input-image :image="image" v-on:input="getFile" v-on:modified="modified" v-on:delete="setNoImage"></input-image>
                     <p
                        v-if="validateImage.showImageMessage"
                        style="color:red;"
                        class="caption ml-4"
                    >
                        {{ this.validateImage.imageValidateMessage }}
                    </p>
                </input-group>
                <input-group required title="Terbitkan?">
                    <v-radio-group v-model="item.publish" >
                        <v-radio
                            name="publish"
                            label="Ya"
                            :value="1"
                            :key="1"
                        ></v-radio>
                          <v-radio
                            name="publish"
                            label="Tidak"
                            :value="0"
                            :key="0"
                        ></v-radio>
                    </v-radio-group>
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

    data() {
        return {
            loadingComponent: false,
            loadingBtn: false,
            item: {
                id: null,
                judul: '',
                isi: '',
                gambar: '',
                publish: 1,
                tgl_publish: '',
            },
            isNoImage: false,
            file: null,
            validateImage: {
                imageReady : true,
                showImageMessage: false,
                fileIsMaxSize: false,
                imageValidateMessage: '',
                detail: ''
            },
            rules: {
                judul: [v => !!v || "Judul berita harus diisi"],
                isi: [v => !!v || "Isi berita hasus diisi"],
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
            formData: {},
            editPage: false,
            loadingBtn: false,
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
                if(this.$refs.formBerita.validate()){
                    if(this.editPage){
                        payloads.append('id', this.item.id)
                    }
                    payloads.append('noimage', this.isNoImage)
                    payloads.append('judul', this.item.judul)
                    payloads.append('isi', this.item.isi)
                    payloads.append('file', this.file)
                    payloads.append('publish', this.item.publish)
                    const res = this.editPage
                    ? await update(this.item.submitUrl, payloads, options)
                    : await store(this.item.submitUrl, payloads, options)
                    console.log(res)
                    if(res){
                        this.$router.push({name: 'berita'})
                    }
                }
            } catch(err){
                console.log(err)
            } finally{
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
        try {
            let url = this.$route.meta.editPage ? '/api/berita/edit/'+this.$route.params.id : '/api/berita/tambah';
            const form = await getForm(url);
            if(this.$route.meta.editPage){
                this.editPage = true;
                let { item, submitUrl } = form;
                this.item = {
                    ...item,
                }
                this.item.submitUrl = submitUrl
                console.log(this.item.publish)
            }else{
                let { submitUrl } = form;
                this.item.submitUrl = submitUrl;
            }
        } catch(err){
            console.log(err)
        } finally {
            this.loadingComponent = false;
        }
    },
    computed: {
        image() {
            return this.item.gambar ?  this.item.gambar : '/img/noimage.png';
        }
    },
    components :{
        InputGroup,
        InputImage,
        TiptapVuetify
    },

}
</script>
