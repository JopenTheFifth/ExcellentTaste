import axios from "axios";


//every module has a state, getters, actions and mutations

//variables will be stored in the state
const state = {
    reservations: [],
};

//assign values in getters
const getters = {

};

//fetching data from the database in actions
const actions = {
    getAllReservations({commit}){
        axios.get('/api/reservations').then((res) => {
            commit('setReservations', res.data);
        });
    }
};

const mutations = {
    setReservations(state, data) {
        state.reservations = data;
    }
};


// to use all these, export them
export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
