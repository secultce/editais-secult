<script setup>
import {ref, onMounted} from "vue"
import moment from 'moment';
moment.locale('pt-br');

const editalData = ref([])


const noticeClosed= () => {
    
    const period = `${'registrationTo=LTE('+moment().format('YYYY-MM-DD')+')'}` //menor que a data do dia
    const field = '@select=id,singleUrl,name,subTitle,type,shortDescription,terms' //campos que deseja pelo api
    const year = moment().format("YYYY")+'-01-01,'+moment().format("YYYY")+'-12-31' //ano inteiro, variando somente o ano
    fetch('https://mapacultural.secult.ce.gov.br/api/opportunity/find/?'+period+'&@order=createTimestamp%20DESC&'+field+'&@files=(avatar.avatarBig):url,description&@page=1&registrationFrom=BET('+year+')')
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
  
</template>

<script>
export default {

}
</script>

<style>

</style>