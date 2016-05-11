<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    @if (Auth::guest())
      <a class="navbar-brand" href="/">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="red">Home</font></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/contact">Contact Us<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/listbooks">List Books<span class="sr-only">(current)</span></a></li>
      </ul>

    @elseif(Auth::user()->level=="petugas")
      <a class="navbar-brand" href="/">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="cyan">Petugas</font></a>
         </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/users">Account<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/petugas">My Profile<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/members">Members<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/books">Books<span class="sr-only"></span></a></li>
      </ul>
   
    
   @else
   <a class="navbar-brand" href="/">
        <span class="glyphicon glyphicon-th" aria-hidden="true"></span>  
        <font color="red">Admin</font></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/users">Users<span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/petugas">Petugas<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/members">Members<span class="sr-only"></span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="/books">Books<span class="sr-only"></span></a></li>
      </ul>
    @endif

      <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Login</a></li>
            <li><a href="/mhs/register">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>   Register Member</a></li>

          @else
            <li><a>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            Hello <font color ="red">{{ Auth::user()->username }}</font></a></li>
            
            <li><a href="/auth/logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>  Logout</a></li>
          @endif
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>