<script setup>
import {ref, onMounted} from "vue"
import moment from 'moment';
moment.locale('pt-br');

const props = defineProps({
    id: Number
})

const editalData = ref([])
const featureCover = ref('');
const idNotice = ref(props.id);

//https://mapacultural.secult.ce.gov.br/api/opportunity/find/?&@order=createTimestamp%20DESC&@select=id,singleUrl,name,subTitle,type,shortDescription,terms,project.name,project.singleUrl,%20user,%20owner.userId,owner.name,registrationFrom,registrationTo&@files=(avatar.avatarMedium):url&@page=1&status=eq(1)&id=eq(4427)
const editalFind = () => {

    fetch('https://mapacultural.secult.ce.gov.br/api/opportunity/find/?&@order=createTimestamp%20DESC&@select=id,singleUrl,name,subTitle,type,shortDescription,terms,project.name,project.singleUrl,%20user,%20owner.userId,owner.name,registrationFrom,registrationTo&@files=(avatar.avatarBig,downloads):url,description&@page=1&status=eq(1)&id=eq('+idNotice.value+')')
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        //
        editalData.value = data[0]
        featureCover.value = editalData.value['@files:avatar.avatarBig'].url;
        editalData.value.registrationFrom = moment(editalData.value.registrationFrom.date).format('llll');
        editalData.value.registrationTo = moment(editalData.value.registrationTo.date).format('llll');
        editalData.value.nameOwner = editalData.value.owner.name 
        editalData.value.idOwner = editalData.value.owner.id
        editalData.value.files = editalData.value['@files:downloads']
    })
    .catch(err => {
        console.log({err})
    })
}

onMounted(() => {
    editalFind();
})

</script>

<template>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
       
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{ editalData.name }}</h5>
        </div>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="blog-img position-relative overflow-hidden">
                        <a :href="`${editalData.singleUrl}`" target="_blank">
                            <img class="dimensao" :src="featureCover">
                            <!-- <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                Edital aberto
                            </div> -->
                        </a>
                        <div class="d-flex justify-content-center mt-3">
                            <a :href="`${editalData.singleUrl}`" target="_blank" class="btn btn-success">Acessar Oportunidade</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <h4>Etapas de Execução</h4>
                            <p class="mb-0">
                                <i class="fa fa-arrow-right text-primary me-3"></i>
                                Inscrições do período de: {{ editalData.registrationFrom }} até {{ editalData.registrationTo  }}
                            </p>
    
                        </div>
    
                        <div class="col-lg-12 mb-20">
                            <h4>Descrição do edital</h4>
                            <p class="mb-0">
                                {{ editalData.shortDescription }}
                            </p>
                        </div>

                        <div class="col-lg-12 mb-20">
                            <h4>Publicado por:</h4>
                            <p class="mb-0">
                                <a :href="`${'https://mapacultural.secult.ce.gov.br/agente/' + editalData.idOwner}`" target="_blank">
                                    {{ editalData.nameOwner }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <h4>Publicações do Edital</h4>
                                <div class="list-group" v-for="(element, index) in editalData.files">                                   
                                    <a :href="`${element.url}`" :key="index" class="list-group-item list-group-item-action">{{ element.description }}</a>
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

</style>