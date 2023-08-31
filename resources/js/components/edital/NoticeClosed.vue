<script setup>
import {ref, onMounted, reactive} from "vue"
import moment from 'moment';
moment.locale('pt-br');

const emit = defineEmits(['notice-id'])

const editalData = ref([])
const state = reactive({
    urlFeatureImg: 'https://mapacultural.secult.ce.gov.br/files/opportunity/4443/file/4481112/blob.-8eedc4202dfd250d60557cb4411f338a.png',
})

const noticeClosed= () => {
    
    const period = `${'registrationTo=LTE('+moment().format('YYYY-MM-DD')+')'}` //menor que a data do dia
    const field = '@select=id,singleUrl,name' //campos que deseja pelo api
    const year = moment().format("YYYY")+'-01-01,'+moment().format("YYYY")+'-12-31' //ano inteiro, variando somente o ano
    const codeAgent = process.env.MIX_ID_AGENTS_SECULT //Agentes dono das oportunidades
    fetch(process.env.MIX_API_MAPA_URL + '/api/opportunity/find/?'+period+'&@order=createTimestamp%20DESC&'+field+'&@files=(avatar.avatarBig):url,description&@page=1&registrationFrom=BET('+year+')&owner=IN('+codeAgent+')')
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        //
        editalData.value = data
    })
    .catch(err => {
        console.log({err})
    })
}

const detailsEdit = (id) => {
    let emitClosed = {
        id: id,
        notice: 'closed'
    }
    emit("notice-id", emitClosed)
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
                            <a @click="detailsEdit(item.id)">
                            <div class="nova">
                                
                                <img class="dimensao" v-if="(typeof item['@files:avatar.avatarBig'] !== 'undefined')" :src="item['@files:avatar.avatarBig'].url">
                                <img class="dimensao" v-else :src="state.urlFeatureImg">


                            </div>
                            <div class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4 bg-danger">
                                Edital encerrado
                            </div>
                        </a>
                        </div>
                        <div class="p-4 heigth-card">
                            <p v-if="(item.name.length > 85)">{{ item.name.slice(0, 85) + '...' }}</p>
                                <p v-else>{{ item.name }}</p>     
                            <a class="text-width-g a-cursor-point" href="#">Ver informações<i class="bi bi-arrow-right"></i></a>
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