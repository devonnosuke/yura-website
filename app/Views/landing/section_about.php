<!-- *** About Us Section *** -->
<section id="about" class="about scrollspy">
    <div class="row container">
        <h2 class="light grey-text text-darken-3 center-align">Tentang</h2>
        <h3 class="center-align"><img src="<?= base_url(); ?>/img/icon.png" class="img-responsive"></h3>
        <div class="col s12">
            <div class="layered-card">
                <img src="<?= base_url() ?>/assets/img/<?= $personal->img ?>" id="image-profile" alt="<?= $personal->img ?>" class="responsive-img circle">
            </div>
            <div class="text-content flow-text justify-align">
                <?= $personal->about_text ?>
            </div>
        </div>
    </div>
</section>