import Vue from 'vue'
import Vuex from 'vuex'
import togglers from './modules/togglers'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
      togglers
  }
})

export default store