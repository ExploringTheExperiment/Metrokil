<?= $this->extend('layout-admin/page_layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Content Category</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-5">
            <form method="POST" action="<?php echo site_url('ContentCategory/updateCategory'); ?>">
                <input type="hidden" name="id_category" value="<?php echo $category['id_category']; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?php echo $category['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Kode</label>
                    <input type="text" class="form-control" id="code" value="<?php echo $category['code']; ?>" aria-describedby="code" name="code">
                </div>
                <div class="mb-3">
                    <label for="desc_category" class="form-label">Description</label>
                    <textarea name="desc_category" id="desc_category"  class="form-control">
                    <?php echo $category['desc_category']; ?>
                    </textarea>
                    <!-- <input type="text" class="form-control" id="desc_category" name="desc_category"> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</div>
<?= $this->endSection() ?>