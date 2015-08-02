
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Built By Freelancers</title>

    <link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/components/fontawesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Built By Freelancers</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class='navbar-right navbar-btn'>
            <a href='/auth/linkedin' class=' btn btn-success'><i class="fa fa-linkedin-square"></i> Sign In</a>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    
    <div style="margin-top: 60px">
      @foreach(['danger', 'warning', 'success'] as $type)
        @if (session($type))
          <div class="container alert alert-{{$type}}">
              {{ session($type) }}
          </div>
        @endif
      @endforeach

      @yield('content')

      <div class="container">
            <hr>

            <footer>
              <p>&copy; Company 2014</p>
            </footer>
      </div>
    </div>
    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
