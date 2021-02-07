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
                            <label for="name">Table</label>
                            <input type="text" value="3" readonly id="Table" class="form-control">
                        </div>
                    </form>
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="Date">Date</label>
                            <input type="date" class="form-control" id="Date">
                        </div>

                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="time" class="form-control" id="from">

                            <label for="to">To</label>
                            <input type="time" class="form-control" id="to">
                        </div>

                        <div class="form-group">
                            <label for="name">Table</label>
                            <input type="text" value="3" readonly id="Table" class="form-control">
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
