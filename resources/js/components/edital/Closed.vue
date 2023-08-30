<script setup>
import {ref, onMounted, reactive} from "vue"
import moment from 'moment';
moment.locale('pt-br');

const editalData = ref([])
const state = reactive({
    urlFeatureImg: 'https://mapacultural.secult.ce.gov.br/files/opportunity/4443/file/4481112/blob.-8eedc4202dfd250d60557cb4411f338a.png',
})

const noticeClosed= () => {
    
    const period = `${'registrationTo=LTE('+moment().format('YYYY-MM-DD')+')'}` //menor que a data do dia
    const field = '@select=id,singleUrl,name' //campos que deseja pelo api
    const year = moment().format("YYYY")+'-01-01,'+moment().format("YYYY")+'-12-31' //ano inteiro, variando somente o ano
    const codeAgent = '7297,120334,5975,117354,117683' //Agentes dono das oportunidades
    fetch('https://mapacultural.secult.ce.gov.br/api/opportunity/find/?'+period+'&@order=createTimestamp%20DESC&'+field+'&@files=(avatar.avatarBig):url,description&@page=1&registrationFrom=BET('+year+')&owner=IN('+codeAgent+')')
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        console.log(data)
        //
        editalData.value = data

        // featureCover.value = editalData.value['@files:avatar.avatarBig'].url;
        // editalData.value.registrationFrom = moment(editalData.value.registrationFrom.date).format('llll');
        // editalData.value.registrationTo = moment(editalData.value.registrationTo.date).format('llll');
        // editalData.value.nameOwner = editalData.value.owner.name 
        // editalData.value.idOwner = editalData.value.owner.id
        // editalData.value.files = editalData.value['@files:downloads']
    })
    .catch(err => {
        console.log({err})
    })
}

onMounted(() => {
    noticeClosed();
})



</script>


<template>
    <div id="noticeClosed" class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Editais com inscrições encerradas </h1>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div v-for="(item, index) in editalData" class="col-lg-3 wow zoomIn" data-wow-delay="0.1s" style="min-height: 350px;">
                <div class="col-lg-10 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden mb-5 border border-secondary-subtle">
                        <div class="blog-img position-relative overflow-hidden">
                            <div class="nova">
                                
                                <img class="dimensao" v-if="(typeof item['@files:avatar.avatarBig'] !== 'undefined')" :src="item['@files:avatar.avatarBig'].url">
                                <img class="dimensao" v-else :src="state.urlFeatureImg">


                            </div>
                            <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4 bg-danger">
                                Edital encerrado
                            </div>
                        </div>
                        <div class="p-4 heigth-card">
                            <p v-if="(item.name.length > 85)">{{ item.name.slice(0, 85) + '...' }}</p>
                                <p v-else>{{ item.name }}</p>     
                            <a class="text-width-g " href="#">Ver informações<i class="bi bi-arrow-right"></i></a>
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