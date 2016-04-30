<nav class="navbar navbar-inverse" style="border-radius: 0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li><a href="{{ action('EmployeeController@index') }}">Employees</a></li>
          <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
        @else
          <li><a href=#>Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>