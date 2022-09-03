<!-- *** Footer Section *** -->
<footer class="page-footer cyan darken-3">
    <div class="container">
        <div class="row">
            <?php $col = 'l6'; ?>
            <?php if ($title != "Contact us") : ?>
                <?php $col = 'l6'; ?>
                <div class="col l6 s12 col">
                    <div class="card-panel card-contact left white darken-2 grey-text text-darken-2">
                        <h5>Kirimkan Kami Pesan</h5>
                        <form action="<?= base_url() ?>/sendMail" method="POST">
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
            <?php endif; ?>
            <div class="col <?= $col ?> s12">
                <h5>#Yura_Company</h5>
                <h5 class="white-text footer-h5"><b>Ikuti Kami</b></h5>
                <ul class="sosmed-footer">
                    <li>
                        <?php foreach ($social as $s) : ?>
                            <a href="<?= $s->link ?>" target="_blank">
                                <i class="bi bi-<?= $s->contact_type ?>"></i>
                                <p style="display: none;"><?= $s->contact_type ?></p>
                            </a>
                        <?php endforeach; ?>
                    </li>
                    <hr style="border: 1px solid white" class="left" width="15%">
                </ul>
                <br>
                <h5>Kelebihan Kami</h5>
                <p class="float-text">Sesuai dengan slogan kami yaitu "Memberikan solusi dengan teknologi” kami berusaha memberikan solusi terbaik bagi client kami dengan produk yang kami berikan dengan harga yang bersaing dari kompetitor lainya sesuai dengan tujuan pembuatan dan siapa yang akan menggunakan product digital tersebut. </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <span class="grey-text text-lighten-4">Copyright 2022 © Yura Company</span>
            <a class="grey-text text-lighten-4 right" href="#"># Memberikan Solusi Dengan Teknologi.</a>
        </div>
    </div>
</footer>