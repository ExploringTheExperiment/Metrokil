<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

    <section class="vh-100">
        <div class="container px-md-5">
            <div class="row pt-md-5 pt-5">
                <div class="col-md-12 py-md-3 pt-3">
                    <h1>Add Content</h1>
                </div>
            </div>
            <form action="" method="POST">
                <?= csrf_field() ?>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul" placeholder="Judul Content"><br>
                <label for="judul">Author : </label>
                <input type="text" name="judul" id="judul" placeholder="Judul Content"><br>
                <label for="judul">Deskripsi : </label>
                <input type="text" name="judul" id="judul" placeholder="Judul Content"> 
                
            </form>
        </div>
        
    </section>


<?= $this->endSection() ?>