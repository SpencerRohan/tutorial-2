
<?php
    $name = $product->name;
    $layout = $product->layout;
    $headline = $product->headline;
    $content = $product->content;
    $theme = $product->theme[0];
    $code = $product->code;


  $vendors = [ "Venture" => "'#'",
                "Zayre" => "'#'",
                "Woolworth" => "'#'",
                "Marshall Field's" => "'#'",
                "Bamberger's" => "'#'" ];

  $companyName = "ACME";
  $couponPrice = "$6.00 OFF!";
?>


@extends('layouts.layout')

@section('title')
    ACME - {{$name}}
@stop



@section('body')
    <div class="logo">
      <img class="logo__image" src="../assets/images/block_title.png" >
    </div>

    <!-- START SPOTLIGHT -->
    <div class="container spotlight -background">
      <div class ="row spotlight__row">

        <?php $headerClass = ($layout == 'centered') ? 'col-md-12 --centered' : 'col-md-7 col-md-push-4'; ?>

        <div class="--header <?= $headerClass ?>">
          <?= $headline; ?>

          <? if ($layout !== 'centered'): ?>
            <?php include 'partials/promo.php' ?>
          <? endif; ?>

          <!-- MODAL -->
          <?php include 'partials/modal.php' ?>
        </div>




        <?php $cutoutClass = ($layout == 'centered') ? 'col-xs-12 --centered' : 'col-md-4 col-md-pull-7'; ?>

        <div class="<?= $cutoutClass ?>">
          <? if ($layout == 'centered'): ?>
            <div class="promo">
              <a href="#promo" data-toggle="modal" alt="promo">
                <img class="promo__image" src="../assets/images/play.png">
              </a>
            </div>
          <? endif; ?>

          <?php include 'partials/cutout.php' ?>
        </div>
      </div>
    </div>

    <!-- START ARTICLE -->
    <div class="container article">
      <div class ="row article__row">

        <div class="col-md-6 col-sm-12 col-md-push-6 --card -divider-bottom --copy --copy-pad">
          <?= $content; ?>
        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 --card -divider-right">
          <h3>Available at these Fine Retailers</h3>

          <div class="row vendor">
            <?php if (! empty($vendors)) : ?>
                <? foreach ($vendors as $name => $link): ?>
                    <?php include 'partials/retailers.php'; ?>
                <? endforeach; ?>

                <? if ($layout == 'centered' && count($vendors) % 2 != 0 ): ?>
                    <div class="vendor__link -cursor-auto">
                        <div class='btn -cursor-auto'>
                          <div class='--circle-spacer'></div>
                          <div class='vendor__name'></div>
                        </div>
                    </div>
                <? endif; ?>

            <?php else : ?>
              <h3>Check back soon!</h3>
            <? endif; ?>
          </div>
        </div>
      </div>
    </div>
@stop