<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>.</h1>
    <h1>Welcome to Our Store</h1>
    <h4>
        <?php 
            echo session()->get('username');
        ?>
    </h4>
<?= $this->endSection() ?>