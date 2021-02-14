<template>

    <div>

        <reservation-filter-component></reservation-filter-component>



        <reservation-overview-component></reservation-overview-component>


    </div>


</template>




<script>

    import {mapGetters, mapActions} from 'vuex';

    export default {
        data(){

        },
        computed: mapGetters([

        ]),

        methods: {
            //make the store actions available in the vue methods.
            ...mapActions([
                'getAllReservations'
            ]),
        },
    }
</script>

<style>
    .wrapper{
        padding-top: 4rem;
        padding-bottom: 4rem;

    }
    .titleBar{
        background-color: #4A4E69;
        color: white;
        padding: 1rem;
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-between;
        border-radius: 0.5rem 0.5rem 0rem 0px;
    }
    label, .Title{
        font-weight: bold;
    }
    form{
        color: #2B2D42;
        padding: 2rem;
    }
    .Title{
        text-align: center;
        line-height: 34.5px;
    }
    .body{
        background-color: white;
    }
</style>
