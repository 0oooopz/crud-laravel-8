<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="{{ route('home') }}">Encomage-test</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('users.index') }}">Show all users</a>
        </li><!-- /.nav-item active -->
      </ul><!-- /.navbar-nav mr-auto -->
    </div><!-- /.collapse navbar-collapse -->

  </div><!-- /.container -->
</nav><!-- /.navbar navbar-expand-lg navbar-dark bg-dark -->

