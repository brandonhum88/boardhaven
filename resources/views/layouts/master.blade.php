<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        @yield('styles')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
        <script src="/js/app.js"></script>

        @yield('scripts')
    </head>
    <body>
        @include('partials.hero')
        <div id="app">
          @if ($flash = session('success_message'))
          <flash
            message="{{ $flash }}"
            type="success"
          ></flash>
          @endif

          <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
              <div class="tile is-parent">
                <article class="tile is-child notification is-danger">
                  <p class="title">Events</p>
                  <p class="subtitle">Aligned with the right tile</p>
                  <div class="content">
                    @yield('content')
                  </div>
                </article>
              </div>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-success">
                <div class="content">
                  <p class="title">Archives</p>
                  <p class="subtitle">With even more content</p>
                  <div class="content">
                    @include('partials.sidebar')
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>

        <script src="/js/vue.js"></script>
    </body>
</html>
