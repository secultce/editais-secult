<script setup>

import { ref, reactive, onMounted } from "vue";
//Componentes Criados
import SingleEdital from '../components/edital/SingleEdital.vue'
import  helper  from "../util/helpers.js"
//PLUGINS
import moment from 'moment';
moment.locale('pt-br');

const editais = ref([]);
const showDetails = ref(false);
const countOpen = ref([0])
 
const props = defineProps({
    showNoticeOpen: Boolean
})
const emit = defineEmits(['notice-id', 'count-open'])

const detailsEdit = (id) => {

    let emitOpen = {
        id: id,
        notice: 'open'
    }
    emit("notice-id", emitOpen)
}

onMounted(() =>{
    let openNotice = helper.getNoticeOpen()
    console.log('Home ')
    openNotice.then(res => {
        console.log(res.length)
        editais.value = res
    })
   
})
const state = reactive({
    urlCapa: 'https://mapacultural.secult.ce.gov.br/files/opportunity/4443/file/4481112/blob.-8eedc4202dfd250d60557cb4411f338a.png',
    isLike: false,
    editalData: []
})
</script>
<template>
    <div  v-if="(!showDetails)">
        
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Editais com inscrições abertas </h1>
        </div>
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div v-for="(item, index) in editais" class="col-lg-3  wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                    <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s" :key="index">
                        <div class="blog-item bg-light rounded overflow-hidden mb-5 border border-secondary-subtle">
                            <div class="blog-img position-relative overflow-hidden">
                                <a @click="detailsEdit(item.id)">
                                    <img class="dimensao a-cursor-point" v-if="(typeof item['@files:avatar.avatarBig'] !== 'undefined')" :src="item['@files:avatar.avatarBig'].url">
                                    <img class="dimensao a-cursor-point" v-else :src="state.urlCapa">
                                    <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                        Edital aberto
                                    </div>
                                </a>
                                
                            </div>
                            <div class="p-4 heigth-card">
                                <p v-if="(item.name.length > 85)">{{ item.name.slice(0, 85) + '...' }}</p>
                                <p v-else>{{ item.name }}</p>                       
                                <a class="text-width-g a-cursor-point" @click="detailsEdit(item.id)">
                                    Mais informações
                                <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
       
    </div>
   
    
  
    
</template>
<script>
export default {
    
}
</script>
<style>

.heigth-card {
    height: 200px;
}
    
</style>