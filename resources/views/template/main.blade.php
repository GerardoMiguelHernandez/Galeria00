<!DOCTYPE HTML>
<!--
  Solid State by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Galeria</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
  </head>
  <body>

    <!-- Page Wrapper -->
      <div id="page-wrapper" style="background:#ff8a65;">

        <!-- Header -->
          <header id="header" class="alt">
            <h1><a href="index.html">Galeria CFE</a></h1>
            
            <nav>
              <a href="#menu">Menu</a>
            </nav>
          </header>

        <!-- Menu -->
          <nav id="menu">
            <div class="inner">
              <h2>Menu</h2>
              <ul class="links">
              <li><form method="GET" action="{{url('Bienvenido')}}">
            <div class="field">
                  <label for="name">Buscar</label>
                  <input type="text" name="nombre" id="nombre" />
                </div>
            </form></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>

                <li><a href="#">Log In</a></li>
                <li><a href="#">Sign Up</a></li>
              </ul>
              <a href="#" class="close">Close</a>
            </div>
          </nav>

        <!-- Banner -->
          <section id="banner">
            <div class="inner">
              <div class="logo"><a href="{{url('Bienvenido')}}" data-toggle="tooltip" title="Home"><span class="icon fa-home">
              </span></a></div>
              <h2>Galeria de Evidencias</h2>
              <p>Coleccion de Imagenes <a href="http://html5up.net">CFE</a></p>
            </div>
          </section>

        <!-- Wrapper -->
          <section id="wrapper">

            <!-- One -->
            @foreach($events as $event)_
              <section id="one" class="wrapper spotlight style1">
                <div class="inner">
                  <a href="#" class="image"><img src="{{$event->imagen}}" alt="" /></a>
                  <div class="content">
                    <h2 class="major">{{$event->nombre}}</h2>
                    <p>
                      {{$event->descripcion}}
                    </p>
                    <a href="{{route('eventos.show',$event->id)}}" class="special">Ver mas</a>
                  </div>
                </div>
              </section>
@endforeach
 {!! $events->render() !!}
            <!-- Four -->
              <section id="four" class="wrapper alt style1">
                <div class="inner">
                  <h2 class="major"><span>Albums</span></h2>
                  <p>Disfrutaras revisando cada fotografia de los diversos Albums...Recordar es Volver a Vivir</p>
          
                  <section class="features">
                          @foreach($albumns as $album)
                    <article>
                      <a href="#" class="image"><img src="{{$album->imagen}}" alt="" /></a>
                      <h3 class="major">{{$album->nombre}}</h3>
                      <p>{{$album->descripcion}}</p>
                      <a href="#" class="special">Learn more</a>
                    </article>
                     @endforeach

                  </section>
                 
                  
                </div>
              </section>

          </section>

        <!-- Footer -->
          <section id="footer">
            <div class="inner">
              <h2 class="major">Get in touch</h2>
              <p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
              <form method="post" action="#">
                <div class="field">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" />
                </div>
                <div class="field">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" />
                </div>
                <div class="field">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="4"></textarea>
                </div>
                <ul class="actions">
                  <li><input type="submit" value="Send Message" /></li>
                </ul>
              </form>
              <ul class="contact">
                <li class="fa-home">
                  Untitled Inc<br />
                  1234 Somewhere Road Suite #2894<br />
                  Nashville, TN 00000-0000
                </li>
                <li class="fa-phone">(000) 000-0000</li>
                <li class="fa-envelope"><a href="#">information@untitled.tld</a></li>
                <li class="fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
                <li class="fa-facebook"><a href="#">facebook.com/untitled-tld</a></li>
                <li class="fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
              </ul>
              <ul class="copyright">
                <li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
              </ul>
            </div>
          </section>

      </div>

    <!-- Scripts -->
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
      <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

  </body>
</html>