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
        <div class="col pt-3">
            <img src="../image/Product.svg">
            <h1 class="fw-bolder">METROKIL</h1>
            <h1 class="fw-bolder">PRODUCT</h1>
            <p class="fw-lighter fs-6 py-md-2 py-2">Setelah jasa yang kami tawarkan, kami<br>juga menwarkan produk andalan kami.</p>
    </div>
    <div class="col d-flex justify-content-center">
        <img src="../image/shopping_Bag.svg">
    </div>
  </div>
</div>

 


<?= $this->endSection() ?>