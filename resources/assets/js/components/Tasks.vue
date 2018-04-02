<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My Tasks</div>

                    <div class="panel-body">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                            <button class="btn btn-success">Add</button>
                            </span>
                        </div>

                        <div class="tasks-list">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="checkbox"><label><input type="checkbox"></label>Task 1</div>
                                </li>
                                <li>
                                    <div class="checkbox"><label><input type="checkbox"></label>Task 2</div>
                                </li>
                                <li>
                                    <div class="checkbox"><label><input type="checkbox"></label>Task 3</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
