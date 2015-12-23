@extends('layouts.layout')

@section('title')
    ACME - {{ $product->name }}
@stop


@section('body')
    <div class="logo">
      <img class="logo__image" src="{{{ asset('assets/images/block_title.png') }}}" >
    </div>

    <!-- START SPOTLIGHT -->
    <div class="container spotlight -background">
      <div class ="row spotlight__row">

        <div class="--header {{ ($product->layout == 'centered') ? 'col-md-12 --centered' : 'col-md-7 col-md-push-4' }}">
         {!! $product->headline !!}

          @if ($product->layout !== 'centered')
            @include('productLines/_promo')
          @endif

          <!-- MODAL -->
          @include('productLines/_modal')
        </div>

        <div class="{{ ($product->layout == 'centered') ? 'col-xs-12 --centered' : 'col-md-4 col-md-pull-7' }}">
          @if ($product->layout == 'centered')
            <div class="promo">
              <a href="#promo" data-toggle="modal" alt="promo">
                <img class="promo__image" src="{{{ asset('assets/images/play.png') }}}">
              </a>
            </div>
          @endif

          @include('productLines/_cutout')
        </div>
      </div>
    </div>

    <!-- START ARTICLE -->
    <div class="container article">
      <div class ="row article__row">

        <div class="col-md-6 col-sm-12 col-md-push-6 --card -divider-bottom --copy --copy-pad">
          {!! $product->content !!}
        </div>

        <div class="col-md-6 col-sm-12 col-md-pull-6 --card -divider-right">
          <h3>Available at these Fine Retailers</h3>

          <div class="row vendor">
            @if (! empty($vendors))
                @foreach ($vendors as $vendor)
                    @include('productLines/_retailers')
                @endforeach

                @if ($product->layout == 'centered' && count($vendors) % 2 != 0 )
                    <div class="vendor__link -cursor-auto">
                        <div class='btn -cursor-auto'>
                          <div class='--circle-spacer'></div>
                          <div class='vendor__name'></div>
                        </div>
                    </div>
                @endif

            @else
              <h3>Check back soon!</h3>
            @endif
          </div>
        </div>
      </div>
    </div>
@stop