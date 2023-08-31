<script setup>
import {ref, onMounted} from "vue"

const showNoticeOpen = ref(true);
const showNoticeClosed = ref(false);
const showDetails = ref(false);
const idEdit = ref(0)

const noticeOpenFunc = () => {
    showNoticeOpen.value = true
    showNoticeClosed.value = false
    showDetails.value = false
}
const noticeClosedFunc = () => {
    showNoticeClosed.value = true
    showNoticeOpen.value = false
    showDetails.value = false
}

const closeAll = () => {
    showNoticeOpen.value = false
    showNoticeClosed.value = false
}

function noticeId(emitNotice)
{
    idEdit.value = emitNotice.id
    closeAll()
    showDetails.value = true
}

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
                            <h1 class="text-white mb-0" data-toggle="counter-up">4</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow zoomIn " data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4 a-cursor-point" style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Conhecimento Público</h5>
                            <h1 class="text-black mb-0" data-toggle="counter-up">8</h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4 a-cursor-point" style="height: 150px;">
                        <div class="bg-dark d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-black mb-0">Processo de Seleção</h5>
                            <h1 class="text-black mb-0" data-toggle="counter-up">4</h1>
                            <small>consultar</small>
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
                            <h1 class="text-white mb-0" data-toggle="counter-up">59</h1>
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
</style>