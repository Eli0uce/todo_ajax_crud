<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="js/script.js"></script>
    <style>
        button.dt-button.btn-primary{
            background:var(--bs-primary)!important;
            color:white;
        }
    </style>
</head>

<body class="">

    <div class="container py-5 h-100">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center"><b>Todo List</b></h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12" id="msg"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-bordered table-striped" id="authors-tbl">
                    <thead>
                        <tr class="bg-dark text-light bg-gradient bg-opacity-150">
                            <th class="px-1 py-1 text-center">#</th>
                            <th class="px-1 py-1 text-center">Name</th>
                            <th class="px-1 py-1 text-center">Description</th>
                            <th class="px-1 py-1 text-center">Status</th>
                            <th class="px-1 py-1 text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="bg-dark text-light bg-gradient bg-opacity-150">
                            <th class="px-1 py-1 text-center">#</th>
                            <th class="px-1 py-1 text-center">Name</th>
                            <th class="px-1 py-1 text-center">Description</th>
                            <th class="px-1 py-1 text-center">Status</th>
                            <th class="px-1 py-1 text-center">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="add_modal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="new-author-frm">
                            <div class="form-group">
                                <label for="todoname" class="control-label">Name</label>
                                <input type="text" class="form-control rounded-0" id="todoname" name="todoname" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">Description</label>
                                <input type="text" class="form-control rounded-0" id="description" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="status" class="control-label">Status</label>
                                <input type="text" class="form-control rounded-0" id="status" name="status" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="new-author-frm">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->
    <!-- Edit Modal -->
    <div class="modal fade" id="edit_modal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Task's Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="edit-author-frm">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label for="todoname" class="control-label">Name</label>
                                <input type="text" class="form-control rounded-0" id="todoname" name="todoname" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">Description</label>
                                <input type="text" class="form-control rounded-0" id="description" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="status" class="control-label">Status</label>
                                <input type="text" class="form-control rounded-0" id="status" name="status" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit-author-frm">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="delete-author-frm">
                            <input type="hidden" name="id">
                            <p>Are you sure to delete <b><span id="name"></span></b> from the list?</p>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" form="delete-author-frm">Yes</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
</body>

</html>