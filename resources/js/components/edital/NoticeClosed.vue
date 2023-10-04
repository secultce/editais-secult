<script setup>
import {ref, onMounted, reactive} from "vue"
import  helper  from "../../util/helpers.js"
//plugins

//Componentes

const emit = defineEmits(['notice-id'])

const editalData = ref([])

const state = reactive({
    urlFeatureImg: 'https://mapacultural.secult.ce.gov.br/files/opportunity/4443/file/4481112/blob.-8eedc4202dfd250d60557cb4411f338a.png',
})

const noticeClosed= () => {
    let closed = helper.getNoticeClosed()
    closed.then(res => {
        editalData.value = res
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
    <title-component :title="'Editais com inscrições encerrada'" />
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
                           
                        </a>
                        </div>
                        <div class="p-4 heigth-card">
                            <p v-if="(item.name.length > 85)">{{ item.name.slice(0, 85) + '...' }}</p>
                                <p v-else>{{ item.name }}</p>     
                            <a class="text-width-g a-cursor-point" @click="detailsEdit(item.id)">Ver informações<i class="bi bi-arrow-right"></i></a>
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