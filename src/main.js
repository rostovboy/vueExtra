import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import vueModx from 'vuemodx'

// import './assets/main.sass'

Vue.config.productionTip = false

window.onload = function() {
  Vue.use(VueAxios, axios)
  Vue.use(vueModx, {
    lexicon: MODx.lang,
    appId: 'vueextra-panel-home-div'
  });

  Vue.prototype.$httpConfig = {headers: {'modAuth': vueExtra.modAuth}};

  new Vue({
    render: h => h(App),
  }).$mount('#vueextra-panel-home-div');
};