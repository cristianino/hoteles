import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    app: {
      title: 'Hoteles'
    },
    api: {
      url: 'http://localhost:8000/'
    },
    hotels: []
  },
  mutations: {

  },
  actions: {

  }
})
