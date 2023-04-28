import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import './assets/css/style.css';
import './assets/css/stor.css';
import 'flowbite/dist/flowbite.turbo'

const app = createApp(App)
const pinia = createPinia()
app.use(pinia)

app.use(router)
app.mount('#app')


