
<nav class="white scrollTo">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">



          <div class="row">
            <div class="col s10 offset-s2">
              
               <img class="responsive-img" src="/img/cfe.png"> <!-- notice the "circle" class -->
            </div>
            
          </div>
        


      </a>
<ul class="right hide-on-med-and-down"> 
<li><a href="{{ url('login') }}"><i class="material-icons left teal600">account_circle</i><span class="blue-text text-darken-4">Login</span></a></li>
<li><a href="{{ url('admin/users/index') }}"><i class="material-icons left teal600">search</i><span class="blue-text text-darken-4">Login</span></a></li>
        <li><a href="{{ route('centros.index') }}"><i class="material-icons left teal600">add</i><span class="blue-text text-darken-4">Login</span></a></li>
        <li><a href="{{ url('admin/categoria/index') }}"><i class="material-icons left teal600">refresh</i><span class="blue-text text-darken-4">Login</span></a></li>
        <li><a href="mobile.html"><i class="material-icons left teal600">account_circle</i><span class="blue-text text-darken-4">Login</span></a></li>
</ul>            
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons teal600">menu</i></a>

<ul class="side-nav" id="mobile-demo">
       <li><a href="{{ url('admin/users/index') }}"><i class="material-icons">search</i>usuarios</a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i>eventos</a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i>categoria</a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a>Ver mas</li>
      </ul>

    </div>
  </nav>