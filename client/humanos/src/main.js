import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'


createApp(App).use(router).mount('#app')
// Configurar Axios
Vue.prototype.$axios = axios;
axios.defaults.baseURL = 'http://127.0.0.1:8000/api/empleados'; // Reemplaza con la URL de tu API

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount('#app');
