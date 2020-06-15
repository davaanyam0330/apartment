@extends('layouts.layout_master')
@section('content')

  <div class="row align-items-center">

  </div>

  <div class="row align-items-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Бүх анги</h4>
                <table id="angiTable" class="table table-striped table-bordered dt-responsive " style="width:100%;">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th></th>
                            <th>Командлал</th>
                            <th class="text-nowrap">Нэр</th>
                            <th>Хаяг</th>
                        </tr>
                    </thead>
                </table>
                <button type="button" class="btn btn-success waves-effect" id="btnAngiNew">Нэмэх</button>
                <button type="button" class="btn btn-warning waves-effect waves-light" id="btnEditAngi">Засах</button>
                <button type="button" class="btn btn-danger waves-effect" id="btnDeleteAngi">Устгах</button>
                <button type="button" class="btn btn-danger waves-effect" angiID="156"  id="btnSeeImage">Зураг харах</button>

            </div>
        </div>
    </div>
  </div>



  @include('angi.AngiNew')
  @include('angi.AngiEdit')


  {{-- @include('sweetalert::alert') --}}
  {{-- <div id="modal01" class="w3-modal w3-black" style="padding-top:0; " onclick="this.style.display='none'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div> --}}
@endsection


@section('css')
  <link href="{{url('public/apartmrntJsCss/datatableCss/datatables.min.css')}}" rel="stylesheet">

  <link href="{{url('public/apartmrntJsCss/dropzone/5.5.1/dropzone.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{url("public/sweetAlert2/sweetalert2.css")}}">
  <script type="text/javascript" src="{{url("public/sweetAlert2/sweetalert2.all.min.js")}}"></script>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script> --}}

@endsection

@section('js')
  <!-- Datatables -->
      <script src="{{url('public/apartmrntJsCss/datatableJs/datatables.min.js')}}"></script>
      <script src="{{url('public/apartmrntJsCss/datatableJs/jszip.min.js')}}"></script>
      <script src="{{url('public/apartmrntJsCss/datatableJs/pdfmake.min.js')}}"></script>
      <script src="{{url('public/apartmrntJsCss/datatableJs/datatables.init.js')}}"></script>

      <script src="{{url('public/apartmrntJsCss/dropzone/5.5.1/dropzone.js')}}"></script>

        <script type="text/javascript">
            var dataRow = "";
            var csrf = "{{ csrf_token() }}";
            var getAngi = "{{url("/getAngi")}}";
            var angiDelete = "{{url("/angiID/delete")}}";

            var storeAngi = "{{url("/angi/store")}}";
            var updateAngi = "{{url("/angi/update")}}";
            var angiImagePath = "{{url("/angi/ImagePath")}}";
            var angiImageDelete = "{{ url("/angi/ImageDelete") }}";
            var angifetch = "{{url("/angi/fetch")}}";

            var checkAngiFolderUrl = "{{url("/angi/checkPath")}}";


        $(document).ready(function(){
          $('#angiTable').DataTable( {
            "language": {
                    "lengthMenu": "_MENU_ мөрөөр харах",
                    "zeroRecords": "Хайлт илэрцгүй байна",
                    "info": "Нийт _PAGES_ -аас _PAGE_-р хуудас харж байна ",
                    "infoEmpty": "Хайлт илэрцгүй",
                    "infoFiltered": "(_MAX_ мөрөөс хайлт хийлээ)",
                    "sSearch": "Хайх: ",
                    "paginate": {
                      "previous": "Өмнөх",
                      "next": "Дараахи"
                    }
                },
                "processing": true,
                "serverSide": true,
                "stateSave": true,
                "responsive":true,
                "order": [[ 1, "asc" ]],
                "ajax":{
                         "url": getAngi,
                         "dataType": "json",
                         "type": "get",
                         "data":{
                              _token: "{{ csrf_token() }}"
                            }
                       },
                "columns": [
                    { data: "id", name: "id", render: function (data, type, row, meta) {
                  return meta.row + meta.settings._iDisplayStart + 1;
              }  },
                    { data: "idangi", name: "idangi", visible:false},
                    { data: "comandlalName", name: "comandlalName" },
                    { data: "ner", name: "ner"},
                    { data: "angiAddress", name: "angiAddress" },
                  ]
              });
      });
      // , render: getImg
       function getImg(data, type, row, meta) {
        if(data != "" ){
          return '<img height="40%" width="40%" src="' + imageUrlZam + '/' + data + '"/>';
      }else{
          return '<img height="40%" width="40%" src="' + imageUrlZam + '/no-image-icon.png"/>';
      }
      }
      $(document).ready(function(){
        $('#angiTable tbody').on( 'click', 'tr', function () {
            var currow = $(this).closest('tr');
            $('#angiTable tbody tr').css("background-color", "white");
            $('#angiTable tbody tr').css("color", "black");
            $(this).closest('tr').css("background-color", "#626ed4");
            $(this).closest('tr').css("color", "#fff");
            dataRow = $('#angiTable').DataTable().row(currow).data();
          });

      });
        </script>

        <script type="text/javascript">
            Dropzone.options.dropzone =
                {
                    maxFilesize: 13,
                    renameFile: function (file) {
                        var dt = new Date();
                        var time = dt.getTime();
                        return time + file.name;
                    },
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    addRemoveLinks: true,
                    timeout: 50000,
                    autoProcessQueue : false,
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
                    },

                    success: function (file, response) {
                        console.log(response);

                    },
                    error: function (file, response) {
                        return false;
                    }
                };

                load_images();

                function load_images()
                {
                  $.ajax({
                    url:angifetch,
                    success:function(data)
                    {
                      $('#uploaded_image').html(data);

                    }
                  });
                }

                $(document).on('click', '.remove_image', function(){
                  var name = $(this).attr('id');
                  $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'get',
                    url:angiImageDelete,
                    data:{filename: name},
                    success:function(data){
                      load_images();
                    }
                  });
                });

        </script>

        <script type="text/javascript">
          $(document).ready(function(){
            $("#btnSeeImage").click(function(){
              if(dataRow == ""){
                swal('Та харах АНГИА дарж сонгоно уу!!!');
                return;
              }
              $.ajax({
                type: 'post',
                url: checkAngiFolderUrl,
                // data: $("#frmNewAngi").serialize(),
                data: {
                    _token: csrf,
                    angiID: dataRow['id']
                },
                success:function(response){
                  if(response != 0)
                  {
                    window.location.href = ("{{url("/angi/seeImage")}}/" + dataRow['id']), true
                  }else{
                      swal("Зураг оруулаагүй байна.");
                  }
                },
                error: function(jqXhr, json, errorThrown){// this are default for ajax errors
                  var errors = jqXhr.responseJSON;
                  var errorsHtml = '';
                  $.each(errors['errors'], function (index, value) {
                      errorsHtml += '<ul class="list-group"><li class="list-group-item alert alert-danger">' + value + '</li></ul>';
                  });
                  alert(errorsHtml);
                }
              });

            });
          });

        </script>
  {{-- <script src="{{url('public/js/ProductsRegister/ProductNew.js')}}"></script> --}}
  <script src="{{url('public/js/Angi/AngiEdit.js')}}"></script>
  <script src="{{url('public/js/Angi/AngiNew.js')}}"></script>
  <script src="{{url('public/js/Angi/AngiDelete.js')}}"></script>
@endsection
