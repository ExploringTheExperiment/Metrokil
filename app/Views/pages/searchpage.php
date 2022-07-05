<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
<style>
    body {
        font-family: 'Mulish', sans-serif;
    }

    .text-red {
        color: #EE1549 !important;
    }

    textarea:focus,
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="datetime"]:focus,
    input[type="datetime-local"]:focus,
    input[type="date"]:focus,
    input[type="month"]:focus,
    input[type="time"]:focus,
    input[type="week"]:focus,
    input[type="number"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="search"]:focus,
    input[type="tel"]:focus,
    input[type="color"]:focus,
    .uneditable-input:focus {
        border-color: black;
        box-shadow: none;
        outline: 0 none;
    }
</style>

<section class="vh-100">

    <div class="container px-md-5">
        <div class="row pt-md-5 pt-5">
            <div class="col-md-12 py-md-3 pt-3">
                <h1>Search Page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="text" placeholder="Search..." aria-label="Search...">
                <p class="fs-6 py-md-2 py-2">Kami menemukan “50” hasil pencarian terkait “semut”</p>
            </div>
        </div>
        <div class="row pt-md-3">
            <div class="col-md-2 col-sm-12 text-center">
                <img src="../image/bg-search-page-dummy-1.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 py-2">
                <h1 class="fs-3 py-md-1 lh-sm text-red">Semut</h1>
                <p class="fs-6 py-md-1 lh-sm" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque explicabo repudiandae possimus tempora, optio architecto rem, veniam et fugit quisquam voluptates! Nihil modi iure odit voluptatum unde quos odio iste, quo mollitia, enim, sint consequuntur assumenda esse aspernatur inventore?</p>
            </div>
        </div>
        <hr>
        <div class="row pt-md-3">
            <div class="col-md-2 col-sm-12 text-center">
                <img src="../image/bg-search-page-dummy-1.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-10 py-2">
                <h1 class="fs-3 py-md-1 lh-sm text-red">Semut</h1>
                <p class="fs-6 py-md-1 lh-sm" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque doloremque explicabo repudiandae possimus tempora, optio architecto rem, veniam et fugit quisquam voluptates! Nihil modi iure odit voluptatum unde quos odio iste, quo mollitia, enim, sint consequuntur assumenda esse aspernatur inventore?</p>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>