 <!-- *** Contact Section *** -->
 <section class="scrollspy" id="faq">
     <div class="container">
         <div class="row">
             <div class="col s12">
                 <h2 class="center-align grey-text text-darken-3">Sering Ditanyakan (FAQ)</h2>
                 <h3 class="center-align"><img src="<?= base_url(); ?>/img/icon.png" class="img-responsive"></h3>

                 <!-- <h5 class="grey-text text-darken-3">Pertanyaan yang Sering Ditanyakan Pelanggan.</h5> -->
             </div>
             <div class="col s12">
                 <ul class="collapsible popout" data-collapsible="accordion">
                     <?php foreach ($faqs as $faq) : ?>
                         <li>
                             <div class="collapsible-header"><?= $faq->questions ?></div>
                             <div class="collapsible-body"><span class="flow-text"><?= $faq->answer ?></span></div>
                         </li>
                     <?php endforeach; ?>
                 </ul>
             </div>
         </div>
     </div>
 </section>