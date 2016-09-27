<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Rocket Bootstarp Website Template | Portfolio :: w3layouts</title>
<link href="plugins/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="plugins/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="plugins/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="plugins/js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              $('#horizontalTab').easyResponsiveTabs({
                  type: 'default', //Types: default, vertical, accordion           
                  width: 'auto', //auto or any width like 600px
                  fit: true   // 100% fit in a container
              });
          });
         </script>  
<!-- Add fancyBox main JS and CSS files -->
<script src="plugins/js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="plugins/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <script>
      $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
          type: 'inline',
          fixedContentPos: false,
          fixedBgPos: true,
          overflowY: 'auto',
          closeBtnInside: true,
          preloader: false,
          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-zoom-in'
      });
    });
    </script> 
</head>
<body>
   <!----- start-header---->
  <div class="wrapper">
   <!----start-header---->
     <div class="header">
         <div class="container header_top">
        <div class="logo">
          <a href="index.html"><img src="img/cfe.png" alt=""></a>
        </div>
          <div class="menu">
          <a class="toggleMenu" href="#"><img src="/plugins/images/nav_icon.png" alt="" /> </a>
          <ul class="nav" id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li class="current"><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact</a></li>               
            <div class="clearfix"></div>
          </ul>
          <script type="text/javascript" src="plugins/js/responsive-nav.js"></script>
        </div>              
          <div class="clearfix"> </div>
          <!----//End-top-nav---->
       </div>
    </div>
  <!----- //End-header---->
    <div class="container banner">
    
   
    <section class="title-section">
       <h1 class="title-header">
       Portfolio </h1>
       <!--<ul class="breadcrumb breadcrumb__t"><li><a href="index.html">Home</a></li><li class="active">Portfolio</li></ul>  -->
    </section>
   </div> 
   <div class="main">
    <div class='container services_top'>
       <div class="portfolio_top">
       @foreach($events as $event)
       
       <div class="col_1_of_portfolio span_1_of_portfolio">
           <div class="view view-first">
                    <img src="thumbnails/{{'thumb_'.$event->imagen}}" class="img-responsive" alt=""/>
                      <div class="mask">
                         <a class="popup-with-zoom-anim" href="#small-dialog4"> <div class="info"><img src="plugins/images/magnifier.png" alt=""/></div></a>
                         <div id="small-dialog4" class="mfp-hide">
                 <div class="pop_up2">
                    <img src="thumbnails/{{'thumb_'.$event->imagen}}" class="img-responsive" alt=""/>
                     <h3 class="popup"><a href="#">augue duis dolore te feugait</a></h3>
                     <p class="m_5">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                 </div>
               </div>
                        </div>
                     </div> 
        </div>

        
    
              
        
      @endforeach
        <div class="clearfix"> </div>
      </div>
      </div>
    
 </div> 
</body>
</html>   