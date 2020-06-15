@extends('layouts.layout_master')
@section('content')

<div class="row" style=" padding-right:20px; padding-left:20px;">
  <div class="col-md-12" id="galleryall123">
      @foreach ($images as $image)
         <img alt="Зэвсэгт хүчний {{$getAngi->ner}}  (Хаяг: {{$getAngi->angiAddress}})"
         src="{{ asset('public/'.$getPath.'/' . $image->getFilename()) }}"
         data-image="{{ asset('public/'.$getPath.'/' . $image->getFilename()) }}"
         style="display:block" data-description="{{$getAngi->angiAddress}}" >
        {{-- <button type="button" class="btn btn-link remove_image" id="{{$image->getFilename()}}">Remove</button> --}}
      @endforeach
  </div>
</div>

@endsection
@section('css')

@endsection

@section('js')
  {{--albume start  --}}
  {{-- <script type='text/javascript' src='{{url("public/user/12album/unitegallery/js/jquery-11.0.min.js")}}'></script> --}}
  <script type='text/javascript' src='{{url("public/12album/unitegallery/js/unitegallery.min.js")}}'></script>
  <link rel='stylesheet' href='{{url("public/12album/unitegallery/css/unite-gallery.css")}}' type='text/css' />
  <script type='text/javascript' src='{{url("public/12album/unitegallery/themes/tiles/ug-theme-tiles.js")}}'></script>
  {{-- albume end --}}

  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery("#galleryall123").unitegallery({
        tiles_type:"justified"
      });
    });
  </script>
@endsection
