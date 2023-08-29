require('./bootstrap');

import { createApp } from 'vue'
//DEPENDENCIAS
// import InfiniteLoading from "v3-infinite-loading";
// import "v3-infinite-loading/lib/style.css";

//COMPONENTE CRIADO PARA APLICAÇÃO
import HeaderLogo from './components/HeaderLogo.vue'
import InfoData from './components/InfoData.vue'

const app = createApp({})

app.component('header-logo', HeaderLogo)
app.component('info-data', InfoData)
// app.component("infinite-loading", InfiniteLoading);

app.mount('#app')

