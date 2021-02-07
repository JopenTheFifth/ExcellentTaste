<template>
    <div class="wrapper container">
        <div class="titleBar">
            <p class="Title">Manage reservations</p>

            <div>
                <form class="form-check-inline">
                    <p>Show</p>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <p>entries</p>
                </form>
            </div>
        </div>
        <div class="body">
            <form>

                <div class="form-group">
                    <label for="personName">Name</label>
                    <input type="text" class="form-control" id="personName" placeholder="e.g. Thomas Hardy">
                </div>

                    <div class="form-group">
                        <!--                //pull all tables from db-->
                        <label  for="inlineFormTable">Table</label>
                        <select id="inlineFormTable" class="custom-select ">
                            <option selected>Select a table number</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                <div class="form-group">
                    <label  for="inlineFormDate">Date</label>
                    <input type="date" class="form-control" id="inlineFormDate" placeholder="Date">
                </div>

            </form>
        </div>

    </div>
</template>




<script>
    export default{

    }
</script>


<style scoped>
    .form-check-inline{
        padding: 0;
        margin: 0;
    }
</style>
