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

<div class="container px-md-5">
    <div class="row pt-md-5 pt-5">
        
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Code</th>
      <th scope="col">Description</th>
      <th scope="col">D & E</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        $no = 1;
        foreach ($category as $c ) : ?>
            <tr>
            <th scope="row"><?= $no++; ?>.</th>
            <td><?= $c['name'] ?></td>
            <td><?= $c['code'] ?></td>
            <td><?= $c['desc_category'] ?></td>
            <td>
                <a  href="<?php echo base_url('/ContentCategory/ubahCategory/' . $c['id_category']); ?>">Edit</a>&nbsp;
                <a  href="<?php echo base_url('/ContentCategory/deleteCategory/' . $c['id_category']); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        
    </tbody>
    </table>
    <a href="/add-category" class="button">Add Category</a>
    </div>
</div>

<?= $this->endSection() ?>
