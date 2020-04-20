@extends('layouts.layout_master')

@section('content')
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatable').DataTable( {
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
        "ajax":{
                 "url": "{{url("/show/admins")}}",
                 "dataType": "json",
                 "type": "post",
                 "data":{
                      _token: "{{ csrf_token() }}"
                    }
               },
        "columns": [
            { data: "id", name: "id",  render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            }},
            { data: "id", name: "id", "visible": false },
            { data: "name", name: "name"},
            { data: "email", name: "email"},
            { data: "userTypeID", name: "userTypeID"}
          ]
    });
});
$(document).ready(function(){
  $('#datatable tbody').on( 'click', 'tr', function () {
      var currow = $(this).closest('tr');
      $('#datatable tbody tr').css("background-color", "white");
      $(this).closest('tr').css("background-color", "yellow");
      dataRow = $('#datatable').DataTable().row(currow).data();
    });
});
</script>
  <div class="row clearfix">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card">
              <div class="header">
                  <div class="row clearfix">
                      <div class="col-xs-12 col-sm-6">
                          <h2>Хэрэглэгчийн эрхүүд</h2>
                      </div>
                  </div>
              </div>
              <div class="body">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Дугаар</th>
                            <th>ID</th>
                            <th>Нэр</th>
                            <th>Цахим хаяг</th>
                            <th>Төрөл</th>
                        </tr>
                    </thead>
                </table>
                <button type="button" data-toggle="modal" data-target="#modalAdminNew" class="btn btn-success waves-effect">Хэрэглэгч нэмэх</button>
              </div>
          </div>
      </div>
  </div>
  @include('admins.adminNew')
@endsection


@section('css')
  <link href="{{url('public/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('public/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('public/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('public/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('public/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('js')
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
  <script src="{{url("public/js/admin/adminNew.js")}}"></script>
@endsection
