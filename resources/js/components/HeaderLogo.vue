<script setup>
import {ref, onMounted} from "vue"
import  helper  from "../util/helpers.js"

const showNoticeOpen = ref(true);
const showNoticeClosed = ref(false);
const showNoticePublic = ref(false);
const showNoticeProcess = ref(false);
const showDetails = ref(false);
const idEdit = ref(0)
const totalNoticeOpen = ref(0)
const totalNoticeClosed = ref(0)
const totalNoticePublic = ref(0)
const totalNoticeProcess = ref(0)

const noticeOpenFunc = () => {
    showNoticeOpen.value = true
    showNoticeClosed.value = false
    showNoticePublic.value = false
    showNoticeProcess.value = false
    showDetails.value = false
}
const noticeClosedFunc = () => {
    showNoticeClosed.value = true
    showNoticeOpen.value = false
    showNoticePublic.value = false
    showNoticeProcess.value = false
    showDetails.value = false
}
const noticePublicFunc = () => {
    showNoticeClosed.value = false
    showNoticeOpen.value = false
    showNoticePublic.value = true
    showDetails.value = false
}

const noticeProcessFunc = () => {
    showNoticeClosed.value = false
    showNoticeOpen.value = false
    showNoticePublic.value = false
    showNoticeProcess.value = true
    showDetails.value = false
}


const closeAll = () => {
    showNoticeOpen.value = false
    showNoticeClosed.value = false
    showNoticePublic.value = false
    showNoticeProcess.value = false
}

function noticeId(emitNotice)
{
    idEdit.value = emitNotice.id
    closeAll()
    showDetails.value = true
}
//TOTAL DE EDITAIS ABERTOS
let help = helper.getNoticeOpen()
help.then(res => {        
    setTimeout(() => {
        totalNoticeOpen.value = res.length
    }, 1000);
})
//TOTAL DE EDITAIS CONLCUÍDOS
let closed = helper.getNoticeClosed()
closed.then(res => {
    setTimeout(() => {
        totalNoticeClosed.value = res.length
    }, 2000);
})
//TOTAL DE EDITAIS DE CONHECIMENTO PUBLICO
let publicCount = helper.getNoticePublic()
publicCount.then(res => {
    setTimeout(() => {
        totalNoticePublic.value = res.length
    }, 2000);
})

//TOTAL DE EDITAIS EM PROCESS
let process = helper.getNoticeProcess()
process.then(res => {
    setTimeout(() => {
        totalNoticeProcess.value = res.length
    }, 2000);
})
</script>
<template>
    <div>
        
        <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s" @click="noticeOpenFunc">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4 a-cursor-point" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Inscrições Abertas</h5>
                            <Transition>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{ totalNoticeOpen }}</h1>
                            </Transition>
                            <small class="text-white">clique aqui</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow zoomIn " data-wow-delay="0.3s"  @click="noticePublicFunc">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4 a-cursor-point" style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Conhecimento Público</h5>
                            <h1 class="text-black mb-0" data-toggle="counter-up">{{ totalNoticePublic }}</h1>
                            <small>clique aqui</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s" @click="noticeProcessFunc">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4 a-cursor-point" style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Processo de Seleção</h5>
                            <h1 class="text-black mb-0" data-toggle="counter-up">{{totalNoticeProcess}}</h1>
                            <small>clique aqui</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s"  @click="noticeClosedFunc">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4 a-cursor-point" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Inscrições encerradas</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{ totalNoticeClosed }}</h1>
                            <small class="text-white">clique aqui</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div v-if="(showNoticeOpen)">
        <notice-open :showNoticeOpen="showNoticeOpen"  @notice-id="noticeId" />
        
    </div>
    <div v-if="(showNoticeClosed)">
        <notice-closed  @notice-id="noticeId"/>
    </div>
    <div v-if="(showNoticePublic)">
        <notice-public  @notice-id="noticeId"/>        
    </div>
    <div v-if="(showNoticeProcess)">
        <notice-process  @notice-id="noticeId"/>        
    </div>
    <div v-if="(showDetails)">
        <single-edital :id="idEdit" />
    </div>
    </div>
</template>
<script>

export default {

    
}
</script>

<style>
.a-cursor-point {
  cursor: pointer;
}
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>