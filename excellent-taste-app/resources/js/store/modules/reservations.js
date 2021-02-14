import axios from "axios";


//every module has a state, getters, actions and mutations

//variables will be stored in the state
const state = {
    reservations: [

    ],
};

//assign values in getters
const getters = {
    allReservations: state => state.reservations
};

//fetching data from the database in actions
const actions = {
     fetchReservations({commit}){
        axios.get('/api/reservations').then((res) => {

            //to fire the mutation setReservations, use the commit
            commit('setReservations' , res.data);
        })
    },

    addReservation({commit}) {
         axios.post('/api/reservation/new')
    }
};


const mutations = {
 setReservations: (state, reservations) => (state.reservations = reservations)
};


// to use all these, export them
export default {
    state,
    getters,
    actions,
    mutations
}
