<template>
 <div class="wrapper">
     <div class="titleBar">
         <p class="Title">
             Manage reservations
         </p>

         <div>
             <button class="btn btn-danger">Delete</button>
             <button @click="$router.push('/dashboard/reservation/new')" class="btn btn-success">New reservation</button>

         </div>
     </div>

     <div class="body">
         <table class="table table-responsive">
             <thead class="thead-light">
             <tr class="">
                 <th>Name</th>
                 <th>Table</th>
                 <th>Phone</th>
                 <th>Date</th>
                 <th>Timespan</th>
                 <th>Actions</th>
             </tr>
             </thead>
             <tbody class="">

             </tbody>
         </table>
     </div>

 </div>

</template>




<script>
    import {mapGetters, mapActions} from 'vuex';
    export default {

        //mapGetters are brought into the computed hook
        computed: mapGetters(['allReservations']),

        //mapActions are brought into the methods hook
        methods: {
            //this doesnt call the method fetchReservations just yet, it only
            //maps the action to this specific component. call it in the created hook.
            ...mapActions(['fetchReservations']),

            //other methods can now be added down here.
        },

        created() {
            this.fetchReservations();
        }
    }



</script>

