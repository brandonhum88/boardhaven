<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Board<span>Haven</span>
      </h1>
      <h2 class="subtitle">
        @if (Auth::check())
          {{ Auth::user() -> name }}
        @else
          Primary bold subtitle
        @endif
      </h2>
    </div>
  </div>
</section>
