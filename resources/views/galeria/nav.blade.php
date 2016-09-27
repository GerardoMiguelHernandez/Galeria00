<nav>
    <div class="nav-wrapper teal darken-4">
      <a href="{{url('Bienvenido')}}" class="brand-logo">
        <div class="row">
            <div class="col s10">
              
               <img class="responsive-img" src="/img/cfe.jpg">
            </div>
            <div class="col s10">
              <span class="black-text">
              
              </span>
            </div>
          </div>
          </a>



    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons orange600">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li>
     
     <form method="GET" action="{{url('Bienvenido')}}">
        <div class="input-field">
          <input id="nombre" name="nombre" type="search" required>
          <label for="search"><i class="material-icons orange600">search</i></label>
          <i class="material-icons orange600">close</i>
        </div>
      </form>
      </li>
        <li><a href="{{url('Bienvenido')}}"class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Home"><i class="material-icons orange600">home</i></a>
        </li>
       <li><a href="sass.html"  class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login"><i class="material-icons orange600">account_circle</i></a> </li>
<li><a href="sass.html"  class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Galeria"> <i class="material-icons orange600">picture_in_picture</i></a> </li>
<li><a href="sass.html"  class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Albums"> <i class="material-icons orange600">collections</i></a> </li>




        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>
    