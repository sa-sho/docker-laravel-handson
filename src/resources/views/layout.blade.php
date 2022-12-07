<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel BBS</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
  <div class="hero">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">

      <a class="navbar-brand" href="{{ route('top') }}"><img src="../img/tsuki1.png" target="blank" alt="logo" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ route('top') }}">NiXE ch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="{{ route('top') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if (Auth::check())
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('users.edit', auth()->user()->id) }}">My page</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('logout') }}">Sign out</a>
            </li>
            @else
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('login') }}">Sign in</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
          </ul>

        </div>
      </nav>
    </div>
  </div>
</header>

    <div>
        @yield('content')
    </div>
</body>
</html>