<?= $this->extend('layout-admin/page_layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blog Category</h1>
        <a href="/blogcategory/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add</a>
    </div>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id_category</th>
                            <th>name</th>
                            <th>desc</th>
                            <th>code</th>
                            <th>util</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id_category</th>
                            <th>name</th>
                            <th>desc</th>
                            <th>code</th>
                            <th>util</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>
                                <a href="/blogcategory/show" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">Edit</a>
                                <a href="/blogcategory/destroy" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<?= $this->endSection() ?>