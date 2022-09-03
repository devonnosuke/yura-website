<?= $this->extend('landing/templates/base') ?>
<?= $this->section('content') ?>
<section class="portfolio greyen-4">
    <div class="container">
        <h1 class="header center cyan-text text-darken-1">Contact us</h1>
        <h3 class="center-align"><img src="<?= base_url(); ?>/img/icon.png" class="img-responsive"></h3>
        <div class="row center">
            <h5 class="header col s12">Kamu bisa menemukan kami disini.</h5>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <div class="collection with-header hoverable z-depth-2">

                    <ul>

                        <li class="collection-header">
                            <h4>Kantor Kami</h4>
                        </li>

                        <li class="collection-item">
                            <i class="bi bi-geo-alt-fill left"></i>
                            <?= $contact->address ?>
                        </li>

                        <li class="collection-item">
                            <i class="bi bi-mailbox2 left"></i>
                            <?= $contact->country ?>
                        </li>

                        <li class="collection-item">
                            <i class="bi bi-phone-fill left"></i>
                            <?= $contact->phone ?>
                        </li>

                        <li class="collection-item">
                            <i class="bi bi-telephone-fill left"></i>
                            <?= $contact->telephone ?>
                        </li>

                        <li class="collection-item">
                            <i class="bi bi-envelope-fill left"></i>
                            <?= $contact->email ?>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col s12 m6">
                <!-- <iframe style="width: 100%;" class="hoverable" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=119.87933635711671%2C-0.9010268385335538%2C119.88232970237733%2C-0.899393574854254&amp;layer=mapnik&amp;marker=-0.9002102067853512%2C119.88083302974701" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=-0.90021&amp;mlon=119.88083#map=19/-0.90021/119.88083">View Larger Map</a></small> -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!4v1661082586752!6m8!1m7!1sB9_M0QtFFgY4-QqUqPk61w!2m2!1d-0.90029027531637!2d119.8808405180936!3f111.71932521794807!4f18.140840983889234!5f0.7820865974627469" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="hoverable"></iframe> -->
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d258.09847996568817!2d119.880770537417!3d-0.9001526349283532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8beddf92a1bcb5%3A0x5f27d5515821861a!2s3VXJ%2BW87%2C%20Jl.%20Gn.%20Loli%20Lrg.%202%2C%20Lolu%20Utara%2C%20Kec.%20Palu%20Sel.%2C%20Kota%20Palu%2C%20Sulawesi%20Tengah%2094111!5e1!3m2!1sid!2sid!4v1661082896657!5m2!1sid!2sid" height="350" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15957.30350567041!2d119.8808533!3d-0.9002102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad8ef992d45a70be!2sYura%20Company%20(PT.%20Yura%20Afirmatif%20Digital)!5e0!3m2!1sid!2sid!4v1661967843882!5m2!1sid!2sid" height="350" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d997.331451312323!2d119.88039413749156!3d-0.9002752484648563!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad8ef992d45a70be!2sYura%20Company%20(PT.%20Yura%20Afirmatif%20Digital)!5e0!3m2!1sid!2sid!4v1661967990249!5m2!1sid!2sid" height="350" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row center valign-wrapper">
            <div class="col s12">
                <div class="card-panel card-contact left white darken-2 grey-text text-darken-2 hoverable">
                    <h5>Kirimkan Kami Pesan</h5>
                    <form action="<?= base_url() ?>/sendMail" method="POST" class="contact">
                        <div class="input-field">
                            <input type="text" name="name" id="name" required class="validate">
                            <label class="" for="name">Nama</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" id="email" required class="validate">
                            <label class="" for="email">Email Kamu</label>
                        </div>
                        <div class="input-field">
                            <textarea name="message" id="message" class="materialize-textarea" required></textarea>
                            <label class="" for="message">Tulis pesan kamu disini...</label>
                        </div>
                        <button class="btn cyan darken-2 waves-effect waves-light right">Kirim!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>