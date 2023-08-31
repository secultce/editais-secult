require('./bootstrap');

import { createApp } from 'vue'
//DEPENDENCIAS
// import InfiniteLoading from "v3-infinite-loading";
// import "v3-infinite-loading/lib/style.css";

//COMPONENTE CRIADO PARA APLICAÇÃO
import HeaderLogo from './components/HeaderLogo.vue'
import NoticeOpen from './components/NoticeOpen.vue'
import SingleEdital from './components/edital/SingleEdital.vue'
import NoticeClosed from './components/edital/NoticeClosed.vue'

const app = createApp({})

app.component('header-logo', HeaderLogo)
app.component('notice-open', NoticeOpen)
app.component('single-edital', SingleEdital)
app.component('notice-closed', NoticeClosed)
// app.component("infinite-loading", InfiniteLoading);

app.mount('#app')

