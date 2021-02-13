import Vue from 'vue';
import Vuex from 'vuex';


//import modules
import reservations from "./modules/reservations";
Vue.use(Vuex);


//pass modules you want to add to the store.
export default new Vuex.Store({
  modules: {
      reservations
  }
});
