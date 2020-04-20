@extends('layouts.layout_master')
@section('content')
  <div class="row clearfix">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card">
              <div class="header">
                  <div class="row clearfix">
                      <div class="col-xs-12 col-sm-6">
                          {{-- <h2>Бараа бүртгэл</h2> --}}
                      </div>
                  </div>
              </div>

              <div class="body">
                <div class="row">
                    <table id="ProductsRegister" class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Bar code</th>
                                <th>Үнэ</th>
                                <th>Утас</th>
                                <th>Шуудан</th>
                                <th>Лангууны <br> дугаар</th>
                                <th>Төлбөр</th>
                                <th>Хэн</th>
                                <th>Бүртгэсэн огноо</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="row">
                   {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#productAdd">Open Modal</button> --}}
                  <button type="button" class="btn btn-success waves-effect" id="btnAddProduct">Нэмэх</button>
                  <button type="button" class="btn btn-warning waves-effect" id="btnEditProduct">Засах</button>
                  <button type="button" class="btn btn-danger waves-effect" id="btnDeleteProduct">Устгах</button>
                </div>
              </div>
          </div>
      </div>
      @include('ProductsRegister.ProductsNew')
      @include('ProductsRegister.ProductsEdit')
  </div>
@endsection


@section('css')
  <link href="{{url('public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{url('public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('js')
  <!-- Datatables -->
      <script src="{{url('public/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
      <script src="{{url('public/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
      <script src="{{url('public/vendors/jszip/dist/jszip.min.js')}}"></script>
      <script src="{{url('public/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{url('public/vendors/pdfmake/build/vfs_fonts.js')}}"></script>


  <script type="text/javascript">
      var dataRow = "";
      var csrf = "{{ csrf_token() }}";
      var getProducts = "{{url("/getProducts")}}";
      var storeProduct = "{{url("/product/store")}}";
      
  $(document).ready(function(){
    $('#ProductsRegister').DataTable( {
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
          "order": [ 9, "DESC" ],
          "ajax":{
                   "url": getProducts,
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
              { data: "bar_code_number", name: "bar_code_number"},
              { data: "price", name: "price"},
              { data: "phone", name: "phone"},
              { data: "post_type", name: "post_type" },
              { data: "languuNumber", name: "languuNumber" },
              { data: "paymentType", name: "paymentType" },
              { data: "whoName", name: "whoName" },
              { data: "upload_date", name: "upload_date" },
              { data: "whereTypeID", name: "whereTypeID", visible:false}
            ]
        });
});
$(document).ready(function(){
  $('#ProductsRegister tbody').on( 'click', 'tr', function () {
      var currow = $(this).closest('tr');
      $('#ProductsRegister tbody tr').css("background-color", "white");
      $(this).closest('tr').css("background-color", "yellow");
      dataRow = $('#ProductsRegister').DataTable().row(currow).data();
    });

});
  </script>
  <script src="{{url('public/js/ProductsRegister/ProductNew.js')}}"></script>
  <script src="{{url('public/js/ProductsRegister/ProductEdit.js')}}"></script>
@endsection
