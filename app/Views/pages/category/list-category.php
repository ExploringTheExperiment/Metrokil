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
        
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Date Posted</th>
      <th scope="col">Picture</th>
      <th scope="col">Text</th>
      <th scope="col">Category</th>
      <th scope="col">Slug</th>
      <th scope="col">D & E</th>
    </tr>
    </thead>
    <tbody>
        
        
        
    </tbody>
    </table>
    <a href="/add" class="button">Add Content</a>
    </div>
</div>

<?= $this->endSection() ?>
