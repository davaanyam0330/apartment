$("#btnDeleteAngi").click(function(e){
        if(dataRow == ""){
            alertify.error('Та Устгах мөрөө дарж сонгоно уу!!!');
            return;
        }

        alertify.confirm( "Та устгахдаа итгэлтэй байна уу?", function (e) {
          if (e) {
            $.ajax({
                type: 'post',
                url: angiDelete,
                data: {_token: csrf, id : dataRow['id']},
                success:function(response){
                    alertify.alert(response);
                    // refreshExecEdit(dataRow["companyID"]);
                    // emptyVal();
                    angiRefresh();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alertify.error("Status: " + textStatus); alertify.error("Error: " + errorThrown);
                }
            })
          } else {
              alertify.error('Устгах үйлдэл цуцлагдлаа.');
          }
        });
      });
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
