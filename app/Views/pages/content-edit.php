<?php

use App\Controllers\Home;
use PhpParser\Node\Stmt\Echo_;
?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <section>
        <div class="container px-md-5">
            <div class="row pt-md-5 pt-5">
                <div class="col-md-12 py-md-3 pt-3">
                    <h1>Add Content</h1>
                </div>
            </div>
            
            <form method="POST" action="<?php echo base_url("Home/update"); ?>">
                <input type="hidden" name="id_content" value="<?php echo $content['id_content']; ?>">
                <div class="form-group">
                    <label for="jdul">Title</label>
                    <input type="text" name="title" value="<?php echo $content['title']; ?>" class="form-control" id="jdul" placeholder="Judul...">
                </div>
                <div class="form-group">
                    <label for="aut">Author</label>
                    <input type="text" name="author" value="<?php echo $content['author']; ?>" class="form-control" id="aut" placeholder="Author...">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="tgl">Tanggal</label>
                    <input type="date" name="date_posted" value="<?php echo $content['date_posted']; ?>" class="form-control" id="tgl">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="gmbr">Gambar</label>
                    <input type="file" name="picture" value="<?php echo $content['picture']; ?>" class="form-control" id="gmbr" placeholder="Gambar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">Text</label>
                    <textarea class="form-control" name="text" id="text" rows="3"><?php echo $content['text']; ?></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputState">Category</label>
                    <input type="text" name="category" value="<?php echo $content['category']; ?>" class="form-control" id="inputState">
                    <!-- <select id="inputState" name="category" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select> -->
                    </div>
                    <div class="form-group col-md-2">
                    <label for="inputZip">Slug</label>
                    <input type="text" name="slug" value="<?php echo $content['slug']; ?>" class="form-control" id="inputZip">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" >Add </button>
                </form>

        </div>
        
    </section>


<?= $this->endSection() ?>