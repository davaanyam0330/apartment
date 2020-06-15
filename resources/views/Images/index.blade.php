@extends('layouts.layout_master')
@section('css')
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script> --}}
    <link href="{{url("public/apartmrntJsCss/dropzone/dropzone.min.css")}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{url("public/apartmrntJsCss/dropzone/dropzone.min.js")}}"></script>
@endsection
@section('content')

   <div class="container-fluid">
       <br />
     <h3 align="center">Image Upload in Laravel using Dropzone</h3>
     <br />

       <div class="panel panel-default">
         <div class="panel-heading">
           <h3 class="panel-title">Select Image</h3>
         </div>
         <div class="panel-body">
           <form id="dropzoneForm" class="dropzone" action="{{ route('dropzone.upload') }}" >
             @csrf
              <div class="row">
                <button type="button" class="btn btn-info" id="submit-all">Upload</button>
              </div>
           </form>
         </div>
       </div>
       <br />
       <div class="panel panel-default">
         <div class="panel-heading">
           <h3 class="panel-title">Uploaded Image</h3>
         </div>
         <div class="panel-body" id="uploaded_image">

         </div>
       </div>
     </div>

@endsection
@section('js')


 <script type="text/javascript">


     Dropzone.options.dropzoneForm = {
       maxFilesize: 12,
       renameFile: function(file) {
           var dt = new Date();
           var time = dt.getTime();
          return time+file.name;
       },
       autoProcessQueue : false,
       acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
       addRemoveLinks: true,

       init:function(){
         var submitButton = document.querySelector("#submit-all");
         myDropzone = this;

         submitButton.addEventListener('click', function(){
           myDropzone.processQueue();
         });

         this.on("complete", function(){
           if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
           {
             var _this = this;
             _this.removeAllFiles();
           }
           load_images();
         });
       }

     };


        load_images();

        function load_images()
        {
          $.ajax({
            url:"{{ route('dropzone.fetch') }}",
            success:function(data)
            {
              $('#uploaded_image').html(data);
            }
          })
        }

        $(document).on('click', '.remove_image', function(){
          var name = $(this).attr('id');
          $.ajax({
            url:"{{ route('dropzone.delete') }}",
            data:{name : name},
            success:function(data){
              load_images();
            }
          })
        });


 </script>



@endsection

  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> --}}
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
