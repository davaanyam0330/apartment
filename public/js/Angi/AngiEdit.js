
$(document).ready(function(){
  $("#productEdit").on('hidden.bs.modal', function () {
    $(this).data('bs.modal', null);
});
  $("#btnEditAngi").click(function(e){
    e.preventDefault();
    if(dataRow == ""){
            alertify.alert('Та засах мөрөө дарж сонгоно уу!!!');
            return;
        }
        $imagePath = ""+dataRow['id']+"-"+dataRow['idangi'];
        $.ajax({
          type: 'post',
          url: angiImagePath,
          data: {
              _token: csrf,
              path: $imagePath,
              angiID:dataRow['id']
          },
          success:function(response){
            $.ajax({
              url:angifetch,
              success:function(data)
              { $('#uploaded_image').html("");
                $('#uploaded_image').html(data);
              }
            });
              // swal(response);
              // emptyNewModal();
              // angiRefresh();
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
        // imageJsRefresh();
        emptyNewModal();
        $("#getID").val(dataRow['id']);
        $("#ekomandlal").val(dataRow["komandlal"]);
        $("#eangiCodeID").val(dataRow["idangi"]);
        $("#eangi").val(dataRow["ner"]);
        $("#eaddress").val(dataRow["angiAddress"]);
      $('#productEdit').modal('show');
  })

  $("#ebtnNewAngiAdd").click(function(e){
    e.preventDefault();
    // alert($("#ebarCode").val());
    var isInsert = true;

    if($("#ekomandlal").val()==-1){
        swal("Та заавал Командлал сонгоно уу!!!");
        isInsert = false;
    }
    if($("#eangi").val()==-1){
        swal("Та заавал Анги сонгоно уу!!!");
        isInsert = false;
    }
    if(isInsert == false){return;}

    $.ajax({
      type: 'post',
      url: updateAngi,
      data: $("#frmUpdateAngi").serialize(),
      // data: {
      //     _token: csrf,
      //     barCode: $("#barCode").val()
      // },
      success:function(response){
          alertify.alert(response);
          emptyNewModal();
          angiRefresh();
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

function emptyNewModal(){
  $("#ekomandlal").val("-1");
  $("#eangiCodeID").val("")
  $("#eangi").val("");
  $("#eaddress").val("");
}

function angiRefresh(){
  $('#angiTable').DataTable().fnDestroy();
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
      }).ajax.reload();
}

function imageJsRefresh(){
  // Dropzone.options.dropzone.fnDestroy();
  Dropzone.options.dropzone =
      {
          maxFilesize: 12,
          renameFile: function (file) {
              var dt = new Date();
              var time = dt.getTime();
              return time + file.name;
          },
          acceptedFiles: ".jpeg,.jpg,.png,.gif",
          addRemoveLinks: true,
          timeout: 50000,
          removedfile: function (file) {
              var name = file.upload.filename;
              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  },
                  type: 'get',
                  url: angiImageDelete,
                  data: {filename: name},
                  success: function (data) {
                    load_images();
                      console.log("File has been successfully removed!!");
                  },
                  error: function (e) {
                      console.log(e);
                  }
              });
              var fileRef;
              return (fileRef = file.previewElement) != null ?
                  fileRef.parentNode.removeChild(file.previewElement) : void 0;
          },

          success: function (file, response) {
              console.log(response);
              this.on("complete", function(){
                load_images();
              });
          },
          error: function (file, response) {
              return false;
          }
      };
}
