<?= $this->extend('layout-admin/page_layout') ?>

<?= $this->section('content') ?>
<style>
    * {
        font-family: 'Mulish', sans-serif;
    }

    img {
        width: 100px;
    }

    .text-red {
        color: #EE1549 !important;
    }
</style>

<div class="container fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Content Category</h1>
        <a href="/contentcategory/addCategory" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Add</a>
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
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($category as $c ) : ?>
                            <tr>
                                <th scope="row"><?= $c['id_category'] ?></th>
                                <td><?= $c['name'] ?></td>
                                <td><?= $c['code'] ?></td>
                                <td><?= $c['desc_category'] ?></td>
                                <td>
                                    <a class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm" href="<?php echo base_url('/ContentCategory/ubahCategory/' . $c['id_category']); ?>">Edit</a>
                                    <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" href="<?php echo base_url('/ContentCategory/deleteCategory/' . $c['id_category']); ?>">Delete</a>
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
