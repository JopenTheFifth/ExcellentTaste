<template>

    <div>

        <reservation-filter-component></reservation-filter-component>



        <reservation-overview-component></reservation-overview-component>


    </div>


</template>




<script>
    export default {
        mounted() {
            console.log('ReservationController mounted.')
        }
    }
</script>

<style>
    .wrapper{

    }
    .titleBar{
        background-color: #4A4E69;
        color: white;
        padding: 1rem;
    }

    form{
        color: #2B2D42;
        padding: 1rem;
    }
</style>
