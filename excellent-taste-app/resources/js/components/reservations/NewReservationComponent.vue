<template>
    <div class="wrapper container">
        <div class="titleBar">
            <p class="Title">
                New reservation
            </p>
        </div>

        <div class="container">
            <div class="body row">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control" id="Phone">
                        </div>

                        <div class="form-group">
                            <label for="lockedTable">Table</label>
                            <input type="text" value="3" readonly id="lockedTable" class="form-control">
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="Date">Date</label>
                            <input type="date" class="form-control" id="Date">
                        </div>

                        <div class="row">
                            <div class="form-group col-auto">
                                <label for="from">From</label>
                                <input type="time" class="form-control" id="from">
                            </div>

                            <div class="form-group col-auto">
                                <label for="to">To</label>
                                <input type="time" class="form-control" id="to">
                            </div>

                        </div>

                        <div id="findTableBtnWrapper" class="form-group">
                            <button type="submit" id="checkBtn" class="form-control btn btn-primary">Find available tables</button>
                        </div>




                    </form>
                </div>
            </div>
        </div>



    </div>
</template>



<script>
    export default {

        mounted() {

        }
    }
</script>

<style scoped>

#checkBtn{

}
    #findTableBtnWrapper{
        margin-top: 1.8rem;
        margin-bottom: 1.7rem;
    }

</style>
