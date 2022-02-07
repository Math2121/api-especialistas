<!DOCTYPE html>
  <html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="theme-color" content="#6272a4">
      <meta name="_csrfToken" content="{{ csrf_token(false)|raw }}">

      {{-- {# Metas tags #}
      {% set titleApp = (title ? title~' | '~config('client.name') : config('client.name')~(config('client.subname') ? ' | '~config('client.subname') : null)) %}

      {# Monta image #}
      {% if image %}
        {% if not 'http://' in image or not 'https://' in image %}
          {% set image = asset(image, true) %}
        {% endif %}
      {% else %}
        {% set image = asset('/assets/images/1200x630.png', true) %}
      {% endif %}

      <title>{{ titleApp }}</title> --}}

      {{-- {# Meta TAGS Padrão #}
      {% if description or config('client.description') %}
        <meta name="description" content="{{ description ?: config('client.description') }}" />
      {% endif %}

      {% if abstract or config('client.abstract') %}
        <meta name="abstract" content="{{ abstract ?: config('client.abstract') }}" />
      {% endif %}

      {% if keywords or config('client.keywords') %}
        <meta name="keywords" content="{{ keywords ?: config('client.keywords') }}" />
      {% endif %}

      <meta name="robots" content="index, follow" />

      {# Link site #}
      <link rel="base" href="{{ constant('BASE_URL') }}" />
      <link rel="canonical" href="{{ constant('FULL_URL') }}" />

      {# Manifest #}
      <link rel="manifest" href="{{ asset('/manifest.json', true) }}" />

      {# RSS e SiteMAP #}
      {# <link rel="alternate" type="application/rss+xml" href="{{ constant('BASE_URL') }}/rss"/>
      <link rel="sitemap" type="application/xml" href="{{ constant('BASE_URL') }}/sitemap.xml"/> #}

      {# Google PLUS #}
      {% if config('client.google.author') %}
        <link rel="author" href="https://plus.google.com/{{ config('client.google.author') }}/posts" />
      {% endif %}

      {% if config('client.google.page') %}
        <link rel="publisher" href="https://plus.google.com/{{ config('client.google.page') }}" />
      {% endif %}

      {# Meta TAGS Google #}
      <meta itemprop="name" content="{{ titleApp }}" />

      {% if description or config('client.description') %}
        <meta itemprop="description" content="{{ description ?: config('client.description') }}" />
      {% endif %}

      <meta itemprop="image" content="{{ image|raw }}" />
      <meta itemprop="url" content="{{ constant('FULL_URL') }}" />

      {# Meta TAGS Facebook #}
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Os especialistas" />

      {% if description or config('client.description') %}
        <meta property="og:description" content="{{ description ?: config('client.description') }}" />
      {% endif %}

      <meta property="og:image" content="{{ image|raw }}" />
      <meta property="og:url" content="{{ constant('FULL_URL') }}" />

      {% if config('client.name') %}
        <meta property="og:site_name" content="{{ config('client.name') }}" />
      {% endif %}

      <meta property="og:locale" content="pt_BR" />

      {% if config('client.facebook.author') %}
        <meta property="article:author" content="https://www.facebook.com/{{ config('client.facebook.author') }}" />
      {% endif %}

      {% if config('client.facebook.page') %}
        <meta property="article:publisher" content="https://www.facebook.com/{{ config('client.facebook.page') }}" />
      {% endif %}

      {% if config('client.facebook.app') %}
        <meta property="fb:app_id" content="{{ config('client.facebook.app') }}" />
      {% endif %}

      {% if config('client.facebook.pageId') %}
        <meta property="fb:pages" content="{{ config('client.facebook.pageId') }}" />
      {% endif %}

      {# Meta TAGS Twitter #}
      <meta property="twitter:card" content="summary_large_image" />

      {% if config('client.twitter') %}
        <meta property="twitter:site" content="@{{ config('client.twitter') }}" />
        <meta property="twitter:creator" content="@vcwebnetworks" />
      {% endif %}

      <meta property="twitter:title" content="{{ titleApp }}" />

      {% if description or config('client.description') %}
        <meta property="twitter:description" content="{{ description ?: config('client.description') }}" />
      {% endif %} --}}
{{-- 
      <meta property="twitter:image" content="{{ image|raw }}" />
      <meta property="twitter:url" content="{{ constant('FULL_URL') }}" />
      <meta property="twitter:domain" content="{{ constant('BASE_URL') }}" /> --}}

      {# Favicon #}
      <link rel="shortcut icon" type="image/png" href="{{ asset('/assets/icons/icon-32x32.png') }}">

      {# Bootstrap CSS #}
      <link rel="stylesheet" href="{{ asset('/packages/css/bootstrap.min.css') }}">

      {# Fontawesome CSS #}
      <link rel="stylesheet" href="{{ asset('/packages/plugins/fontawesome/css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/packages/plugins/fontawesome/css/all.min.css') }}">

      {# Owl Carousel CSS #}
      <link rel="stylesheet" href="{{ asset('/packages/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/packages/css/owl.theme.default.min.css') }}">

      {{-- {# Stylesheets #} --}}

      <link rel="stylesheet" href="{{asset('/assets/web/app.css')}}">
      @yield('style')
     
      <!--[if lt IE 9]
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body class="{{ bodyclass }}">
      {{-- {# Content #} --}}
      @yield('content')
    

      {{-- {# Scripts #} --}}
      <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"
      ></script>

      {{-- {# Bootstrap Core JS #} --}}
      <script src="{{ asset('/packages/js/popper.min.js') }}"></script>
      <script src="{{ asset('/packages/js/bootstrap.min.js') }}"></script>

      {{-- {# Owl Carousel #} --}}
      <script src="{{ asset('/packages/js/owl.carousel.min.js') }}"></script>

      {{-- {# Theia Sticky Sidebar #} --}}
      <script src="{{ asset('/packages/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
      <script src="{{ asset('/packages/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

      {{-- {# Script #} --}}
      <script src="{{ asset('/packages/js/script.js') }}"></script>

      {{-- {# <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
      <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script> #} --}}

      <script src="{{asset('/assets/web/app.js')}}"></script>
      @yield('script')

    </body>
  </html>
