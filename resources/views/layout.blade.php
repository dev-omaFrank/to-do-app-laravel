<!doctype html>
<html lang="en">

<head>
    <title>Learning Laravel Website </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">To-do App</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/create">Create</a></li>
                    <li><a href="/edit">Edit</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </header>
    @yield('content')
    <div class="bottom-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 navbar-brand">
                    <a href="/">Learning Laravel</a>
                </div>

                <div class="col-md-10">
                    <ul class="bottom-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
