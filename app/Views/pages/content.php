<?= $this->extend('layout/page_layout') ?>

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
        <?php foreach($content as $h) : ?>
            <div class="col pt-3">
                <h1 class="fw-bolder"><?= $h['title'] ?></h1>
                <h1 class="fw-bolder"><?= $h['author'] ?></h1>
                <h1 class="fw-bolder"><?= $h['date_posted'] ?></h1>
            </div>
        <?php endforeach; ?>
    
    </div>
</div>


<?= $this->endSection() ?>
