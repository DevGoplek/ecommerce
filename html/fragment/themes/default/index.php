<?php

    //register_module('fragment');

    //Sección Cover
    //Component Slider
    $slider = Page::byUrlQ("home");
    $sliders = Page::search(array(
        'idparent' => $slider->idpage,
        'fragments' => array('image-slider','desc-slider')
    ));
    $slds = $sliders['records'];

    //Section New Products
    //Component cell_image_price_button
    $products = Page::byUrlQ("3NKKeek6eN");
    $products_frags = Page::search(array(
        'idparent' => $products->idpage,
        'fragments' => array('image-product','name-product','price-product')
    ));
    $prodts = $products_frags['records'];

    //Advertising
    $advertising = Page::byUrlQ("3NKKeek6eN");
    $advert = Page::search(array(
        'idpage' => $advert->idpage,
        'fragments' => array('text-end')
    ));
    $adv = $advert['records'];


    //Section Some Other Neat Products
    //Component cell_img_button_small
    $products_small = Page::byUrlQ("FeTdViFiZA");
    $products_sm_frags = Page::search(array(
        'idparent' => $products_small->idpage,
        'fragments' => array('image-prod','name-prod','price-prod')
    ));
    $prodts_sm = $products_sm_frags['records'];

    //Section Top Products
    //Component img_featureright_small
    $features_img = Page::byUrlQ("s-pt7NHE0E");
    $features_i = Page::search(array(
        'idparent' => $features_img->idpage,
        'fragments' => array('image-top','name-top','desc-top')
    ));
    $feats = $features_i['records'];

    //Section Footer
    //Component footer_desc_menu
    $footer_menu = Page::byUrlQ("l2Z3F-pVbh");
    $footer_desc = Page::search(array(
        'idpage' => $footer_menu->idpage,
        'fragments' => array('text-desc-footer')
    ));
    $fdesc = $footer_desc['records'];

    //Options menu footer
    $footer_options = Page::search(array(
        'idparent' => $footer_menu->idpage,
        'fragments' => array('item-menu')
    ));
    $fopts = $footer_options['records'];

?><!DOCTYPE html>
<html>
<head>
    <?php head(); ?>
    <link rel="stylesheet" href="fragment/themes/default/design/css/foundation.css">
</head>
<body>
    <section class="block features" id="caracteristicas">
        <div class="holder">
            <div class="container-fluid">
                <div class="content">
                    <section class="top-bar" id="mainNavigation">
                        <div class="top-bar-left">
                            <ul class="menu vertical medium-horizontal">
                                <li class="menu-text hide-for-small-only">Marketing Site</li>
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                            </ul>
                        </div>
                        <div class="top-bar-right">
                            <ul class="menu vertical medium-horizontal">
                                <li><a href="#">Three</a></li>
                                <li><a href="#">Four</a></li>
                                <li><a href="#">Five</a></li>
                                <li><a href="#">Six</a></li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
    <!-- Slider -->
    <section class="block features" id="caracteristicas">
       <div class="holder">
           <div class="container-fluid">
               <div class="header"></div>
               <div class="content">
                    <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                      <ul class="orbit-container">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                        <?php foreach ($slds as $sls) { ?>
                                <li class="is-active orbit-slide">
                                  <div class="orbit-image">
                                      <?= $sls->fragments['image-slider']->value ?>
                                  </div>
                                  <figcaption class="orbit-caption"><?= $sls->fragments['desc-slider']->value ?></figcaption>
                                </li>
                        <?php  } ?>
                        <li class="is-active orbit-slide">
                          <img class="orbit-image" src="https://placehold.it/2000x750&text=1st" alt="Space">
                          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
                        </li>
                      </ul>
                      <nav class="orbit-bullets">
                        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                        <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                      </nav>
                    </div>
               </div>
           </div>
       </div>
    </section>
    <!-- /Slider -->

    <!-- Our Products -->
    <section class="block features" id="caracteristicas">
       <div class="holder">
           <div class="container-fluid">
               <div class="header text-center">
                   <h2><?= $products->title;?></h2>
               </div>
               <div class="content">
                    <article class="grid-container">
                      <div class="grid-x grid-margin-x small-up-2 medium-up-2 large-up-4">
                        <?php foreach ($prodts as $pts) { ?>
                            <div class="cell">
                              <div class="thumbnail">
                                  <?= $pts->fragments['image-product']->value ?>
                              </div>
                              <h5><?= $pts->fragments['name-product']->value ?></h5>
                              <p>$<?= $pts->fragments['price-product']->value ?></p>
                              <a href="#" class="button expanded">Buy</a>
                            </div>
                        <?php  } ?>
                      </div>
                    </article>
               </div>
           </div>
       </div>
    </section>
    <!-- Our Products -->

    <!-- Advertising -->
    <section class="block features" id="caracteristicas">
       <div class="holder">
           <div class="container-fluid">
               <div class="header"></div>
               <div class="content">
                    <article class="grid-container">
                        <div class="grid-x cell">
                            <div class="callout small-12 primary">
                                <?php foreach ($adv as $ad) { ?>
                                    <h3><?= $ad->fragments['text-end']->value ?></h3>
                                <?php  } ?>
                            </div>
                        </div>
                    </article>
               </div>
           </div>
       </div>
    </section>
    <!-- /.Advertising -->

    <!-- Some Other Neat Products  -->
    <section class="block features" id="caracteristicas">
       <div class="holder">
           <div class="container-fluid">
               <div class="header text-center">
                   <h2><?= $products_small->title; ?></h2>
               </div>
               <div class="content">
                    <article class="grid-container">
                        <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-6">
                            <?php foreach ($prodts_sm as $pts_sm) { ?>
                                <div class="cell">
                                  <div class="thumbnail">
                                      <?= $pts_sm->fragments['image-prod']->value ?>
                                  </div>
                                  <h5><?= $pts_sm->fragments['name-prod']->value ?></h5>
                                  <p>$<?= $pts_sm->fragments['price-prod']->value ?></p>
                                  <a href="#" class="button small expanded hollow">Buy</a>
                                </div>
                            <?php  } ?>
                    </article>
               </div>
           </div>
       </div>
    </section>
    <!-- /. Some Other Neat Products -->

    <!-- Some Other Neat Products  -->
    <section class="block features" id="caracteristicas">
       <div class="holder">
           <div class="container-fluid">
               <div class="header">
                
               </div>
               <div class="content">
                <article class="grid-container">
                    <div class="grid-x align-bottom">
                        <div class="medium-4 cell">
                            <h4><?= $features_img->title; ?></h4>
                            <?php foreach ($feats as $fts) { ?>
                                    <div class="media-object">
                                      <div class="media-object-section">
                                        <div class="thumbnail">
                                            <?= $fts->fragments['image-top']->value ?>
                                        </div>
                                      </div>
                                      <div class="media-object-section">
                                        <h5><?= $fts->fragments['name-top']->value ?></h5>
                                        <p>$<?= $fts->fragments['desc-top']->value ?></p>
                                      </div>
                                    </div>      
                        <?php } ?>
                        </div>
                        <div class="medium-4 cell">
                            <?php foreach ($feats as $fts) { ?>
                                    <div class="media-object">
                                      <div class="media-object-section">
                                        <div class="thumbnail">
                                            <?= $fts->fragments['image-top']->value ?>
                                        </div>
                                      </div>
                                      <div class="media-object-section">
                                        <h5><?= $fts->fragments['name-top']->value ?></h5>
                                        <p>$<?= $fts->fragments['desc-top']->value ?></p>
                                      </div>
                                    </div>      
                        <?php } ?>
                        </div>
                        <div class="medium-4 cell">
                            <?php foreach ($feats as $fts) { ?>
                                    <div class="media-object">
                                      <div class="media-object-section">
                                        <div class="thumbnail">
                                            <?= $fts->fragments['image-top']->value ?>
                                        </div>
                                      </div>
                                      <div class="media-object-section">
                                        <h5><?= $fts->fragments['name-top']->value ?></h5>
                                        <p>$<?= $fts->fragments['desc-top']->value ?></p>
                                      </div>
                                    </div>      
                        <?php } ?>
                        </div>
                    </div>
                </article>
               </div>
           </div>
       </div>
    </section>
    <!-- /. Some Other Neat Products -->

    <!-- Footer  -->
    <section class="block features" id="caracteristicas">
       <div class="holder">
           <div class="container-fluid">
               <div class="header text-center">
               </div>
               <div class="content">
                    <footer class="callout large secondary">
                      <article class="grid-container">
                      <div class="grid-x">
                        <div class="large-4 cell">
                          <h5><?= $footer_menu->title ?></h5>
                          <?php foreach ($fdesc as $fd) { ?>
                                <p><?= $fd->fragments['text-desc-footer']->value ?></p>
                          <?php  } ?>        
                      </div>
                      <div class="large-3 large-offset-2 cell">
                        <ul class="menu vertical">
                          <?php foreach ($fopts as $fo) { ?>
                            <li><a href="#"><?= $fo->fragments['item-menu']->value ?></a></li>
                          <?php  } ?>
                        </ul>
                      </div>
                      <div class="large-3 cell">
                        <ul class="menu vertical">
                          <?php foreach ($fopts as $fo) { ?>
                            <li><a href="#"><?= $fo->fragments['item-menu']->value ?></a></li>
                          <?php  } ?>
                        </ul>
                      </div>
                      </article>
                    </footer>
               </div>
           </div>
       </div>
    </section>
    <!-- /. Footer -->

    <script src="fragment/themes/default/design/js/vendor/jquery.js"></script>
    <script src="fragment/themes/default/design/js/vendor/what-input.js"></script>
    <script src="fragment/themes/default/design/js/vendor/foundation.js"></script>
    <script src="fragment/themes/default/design/js/app.js"></script>
</body>
</html>