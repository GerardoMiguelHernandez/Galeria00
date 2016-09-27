@extends('galeria.main')
@section('title', 'Home')
@include('galeria.incluir')
@section('content')
<div class="clearfix grid"> 
@foreach($imagess as $img)
    <figure class="effect-oscar  wowload fadeIn">
        <img src="/uploads/{{'thumb_'.$img->image}}" alt="{{$img->image}}"/>
        <figcaption>
           <h5><a href="{{route('eventos.show',$evento->id)}}">{{$img->descripcion}}</a></h5>
            <p>Lily likes to play with crayons and pencils<br>
            <a href="/uploads/{{'thumb_'.$img->image}}" title="1" data-gallery>View more</a></p>            
        </figcaption>
    </figure>

    @endforeach
     
</div>
<ul class="pagination">
{!! $imagess->render() !!}
</ul>
<!-- works -->









<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4>24 Clients</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-rocket  fa-5x"></i><h4>75 Projects</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-cloud-download  fa-5x"></i><h4>454 Downloads</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-map-marker fa-5x"></i><h4>2 Offices</h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>

@endsection