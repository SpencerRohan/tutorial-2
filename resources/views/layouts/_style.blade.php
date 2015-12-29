.btn-primary,
.btn-primary:active:focus,
.btn-primary:focus,
.layout-centered .btn-primary:focus,
.vendor .--circle {
  background-color: {{ $theme->hex }};
  outline: none;
}

.btn-primary:hover,
.vendor .--circle:hover,
.layout-centered .--circle:hover,
.layout-centered .vendor .--circle-big:hover,
.layout-centered .promo .promo__image:hover {
  background-color: {{ $theme->color }};
  outline: none;
}


.vendor .--circle,
.layout-centered .vendor .--circle-big,
.layout-centered .promo .promo__image {
  background-color: {{ $theme->hex }};
  outline: none;
}

a:active, a:hover {
  color: {{ $theme->hex }};
}

h1 {
  font-family: {{ $theme->headline }};
}

h3 {
  font-family: {{ $theme->sm_headline }};
}

body {
  font-family: {{ $theme->body }};
}

.-background {
  background: url('../assets/images/background-{{ $product->layout }}.png') center;
}