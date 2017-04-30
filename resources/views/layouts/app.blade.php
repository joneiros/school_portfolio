<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jon Gander</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!--<link rel="stylesheet" type="text/css" href="../../../public/css/style.css" /> -->
    {!!Html::style('css/style.css')!!}

    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="../../../public/js/modernizr-1.5.min.js"></script>
    {!!Html::script('js/modernizr-1.5.min.js')!!}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    {!!Html::style('css/jstyle.css')!!}
</head>
<body id="app-layout">
    <div id="main">
        <header>
            <div id="welcome">
                <h2>Jonathan Gander</h2>
            </div>
        </header>


    </div>
    <!---------------------------------------------------------------------------------------------------------------------------->
    @yield('content')

    <!---------------------------------------------------------------------------------------------------------------------------->

    <footer style="font-size: 8px">
        Website design was based on <a href="https://www.freewebtemplates.com/download/free-website-template/html5-dark-167398243/demo/">this</a> template, implemented in a PHP Laravel framework
        by Jonathan Gander.
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/image_slide.js')!!}
</body>
</html>
