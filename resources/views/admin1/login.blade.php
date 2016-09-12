<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login</title>
  <!-- CSS  -->
 <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="page-login grey lighten-2">


  <div class="center">
      <div class="card bordered z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
           <i class="material-icons medium white-text">perm_identity</i>

        </div>
        <div class="card-content">
          <form>
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="validate">
          <label for="username">Username</label>


            </div>
            <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
             <div class="input-field col s12">
              <input type="checkbox" class="filled-in" id="filled-in-box"/>
              <label for="filled-in-box">Remember me</label>
              </div><br>
              <div class="row">
              <div class="col s6 offset-s3">
     <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  </div></div>
        
          </form>
        </div>
        <div class="card-action clearfix">
          <div class="row">
            <div class="col s6 text-p">
              <a href="#" class="orange-text tooltipped" data-position="top" data-delay="50" data-tooltip="Forgot your password?">Forgot your password?</a>
            </div>
            <div class="col s6 right-align text-p">
              <a href="#" class="orange-text tooltipped" data-position="top" data-delay="50" data-tooltip="Register now!">Register now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  <!--  Scripts-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/inicio.js') }}"></script>
  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
  <script type="text/javascript">    
    $('#mulai_login').click(function(){
      var username = $('#username').val();
      var password = $('#password').val();
      
      var datas = "username="+username+"&password="+password;
      
      $.ajax({
          type: "POST",
          url: "aksi_login.php",
          data: datas
      }).done(function( data ) {
          $('#info_login').html(data);
          
      });
    });   
  </script>
  <span id="info_login"></span>
  </body>
</html>
