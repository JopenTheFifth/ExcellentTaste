<template>
 <div class="wrapper container">
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
    export default{

    }
</script>

