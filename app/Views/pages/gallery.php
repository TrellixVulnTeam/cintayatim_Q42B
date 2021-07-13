<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col py-2">
                <h1 class="fs-1 fw-bold text-center">GALLERY</h1>
                <hr>
            </div>
        </div>


        
        <div class="row py-2">
        <?php foreach($img as $gallery): //img nama index array di controler ?> 
            <div class="col-md-3 d-flex justify-content-center">
                <img id="gallery" onclick="zoom()" class="gallery" src="../img/Gallery/<?= $gallery['img_name']; ?>" alt="Foto Yatim">
            </div>
        <?php endforeach; ?>
        </div>  
        
</section>

<?= $this->endSection(); ?>

<script>
    const zoom = () => {

    }
</script>

