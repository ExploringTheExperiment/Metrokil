<?php

use PhpParser\Node\Stmt\Echo_;
?>
<?= $this->extend('layout-admin/page_layout') ?>

<?= $this->section('content') ?>

    <section>
        <div class="container px-md-5">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Content</h1>
            </div>

            <?= $validation->listErrors(); ?>

            <form method="post" action="<?php echo site_url('Home/kirim'); ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="jdul" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : '' ?>" id="jdul" placeholder="Judul..." autofocus>
                </div>
                <div class="form-group">
                    <label for="aut" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" id="aut" placeholder="Author..." autofocus >
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <!-- <input type="text" name="id_category" class="form-control" id="inputState" autofocus> -->
                    <select name="category" id="category" class="form-control">
                        <option hidden>Choose...</option>
                        <?php foreach ($category as $key => $value) : ?>
                            <option value="<?=$value['id_category']?>"><?=$value['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="gmbr" class="form-label">Picture</label>
                        <div class="custom-file">
                            <label for="gmbr" class="custom-file-label">Upload Picture File</label>
                            <input type="file" name="picture" class="form-control" id="gmbr" autofocus>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="text" class="form-label">Text</label>
                    <textarea class="form-control" name="text" id="text" rows="3" autofocus></textarea>
                </div>
               
                <button type="submit" class="btn btn-primary" >Add </button>
                </form>

        </div>
        
    </section>


<?= $this->endSection() ?>