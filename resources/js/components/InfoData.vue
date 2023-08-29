<script setup>
import axios from 'axios'
import { ref, reactive } from "vue";
import Details from '../components/edital/Details.vue'
const editais = ref([]);
const showDetails = ref(false);
const refState = ref({
    idEdit : 0
})


const opOpen = () => {
    // axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    // axios.get('https://mapacultural.secult.ce.gov.br/api/opportunity/find/?&registrationFrom=LTE(2023-08-28%2013:46)&registrationTo=GTE(2023-08-28%2013:46)&@order=createTimestamp%20DESC&@select=id,singleUrl,name,subTitle,type,shortDescription,terms,project.name,project.singleUrl,%20user,%20owner.userId&@files=(avatar.avatarMedium):url&@page=1&@limit=10')
    fetch('https://mapacultural.secult.ce.gov.br/api/opportunity/find/?&registrationFrom=LTE(2023-08-28)&registrationTo=GTE(2023-08-28)&@order=createTimestamp%20DESC&@select=id,singleUrl,name,subTitle,type,shortDescription,terms,project.name,project.singleUrl,%20user,%20owner.userId&@files=(avatar.avatarMedium):url&@page=1&@limit=150')
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        console.log(data);

        editais.value = data
    })
    .catch(err => {
        console.log({err})
    })
}

const detailsEdit = (item) => {
    showDetails.value = true
    state.editalData = item
}


opOpen();

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
                        <div class="blog-item bg-light rounded overflow-hidden mb-5">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="dimensao" v-if="(typeof item['@files:avatar.avatarMedium'] !== 'undefined')" :src="item['@files:avatar.avatarMedium'].url">
                                <img class="dimensao" v-else :src="state.urlCapa">
                                <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                    Edital aberto
                                </div>
                            </div>
                            <div class="p-4 heigth-card">
                                <p v-if="(item.name.length > 85)">{{ item.name.slice(0, 85) + '...' }}</p>
                                <p v-else>{{ item.name }}</p>                                
                                <a class="text-width-g " @click="detailsEdit(item)">
                                    Mais informações
                                <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
       
    </div>
    <div v-if="(showDetails)">
        <Details :editalData="state.editalData"/>
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