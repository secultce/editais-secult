<script setup>
import axios from 'axios'

const opOpen = () => {
    console.log('ope');
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    axios.get('https://mapacultural.secult.ce.gov.br/api/opportunity/find/?&registrationFrom=LTE(2023-08-28%2013:46)&registrationTo=GTE(2023-08-28%2013:46)&@order=createTimestamp%20DESC&@select=id,singleUrl,name,subTitle,type,shortDescription,terms,project.name,project.singleUrl,%20user,%20owner.userId&@files=(avatar.avatarMedium):url&@page=1&@limit=10')
    .then(res => {
        console.log({res})
    })
    .catch(err => {
        console.log({err})
    })
}

opOpen();


</script>
<template>
    <div>
        <h1>Info data</h1>
    </div>
</template>
<script>
export default {
    
}
</script>
<style lang="">
    
</style>