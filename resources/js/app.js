require('./bootstrap');

import { createApp } from 'vue'
import HeaderLogo from './components/HeaderLogo.vue'
import InfoData from './components/InfoData.vue'
const app = createApp({})
app.component('header-logo', HeaderLogo)
app.component('info-data', InfoData)
app.mount('#app')

