<?= $this->extend('layout-admin/page_layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Contact Category</h1>
        <a href="/contactcategory/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add</a>
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cc_category as $cc ) : ?>
                            <tr>
                                <th scope="row"><?= $cc['id_cc_category'] ?></th>
                                <td><?= $cc['name'] ?></td>
                                <td><?= $cc['code'] ?></td>
                                <td>
                                    <a class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" href="<?php echo base_url('/Home/ubah/' . $cc['id_cc_category']); ?>">Edit</a>
                                    <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" href="<?php echo base_url(); ?>/Home/delete/<?php echo $cc['id_cc_category']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<?= $this->endSection() ?>