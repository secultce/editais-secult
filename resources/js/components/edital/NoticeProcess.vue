<template>
       <title-component :title="'Editais em Processo de Seleção'" />
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
                            <div class="position-absolute top-0 start-0 bg-secondary text-white rounded-end mt-5 py-2 px-4">
                                Edital em processo
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

<script setup>
import {ref, onMounted} from "vue"
import  helper  from "../../util/helpers.js"
const emit = defineEmits(['notice-id'])

const editalData = ref([])

const noticeProcess = () => {
    let publicNotice = helper.getNoticeProcess()
    publicNotice.then(res => {
        editalData.value = res
    })
   
}

const detailsEdit = (id) => {
    let emitClosed = {
        id: id
    }
    emit("notice-id", emitClosed)
}


onMounted(() => {
    noticeProcess();
})
</script>

<style>

</style>