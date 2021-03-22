import App from './App.vue'

import axios  from 'axios'
import Vue from 'vue'

Vue.config.productionTip = false

new Vue({
    render: h => h(App),
}).mount('#app')

Vue.prototype.$axios = axios
