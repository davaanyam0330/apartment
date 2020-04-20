
$(document).ready(function(){
  $("#btnEditProduct").click(function(e){
    e.preventDefault();
    if(dataRow == ""){
            alertify.error('Та засах мөрөө дарж сонгоно уу!!!');
            return;
        }

        $("#ebarCode").val(dataRow["bar_code_number"]);
        $("#eimgUrl").val(dataRow["imageUrl"]);
        $("#eprice").val(dataRow["price"]);
        $("#ephone").val(dataRow["phone"]);
        $("#epostType").val(dataRow["post_type"]);
        $("#ewho").val(dataRow["who"]); // 1 байх ёстой
        $("#elanguuniiNumber").val(dataRow["languuNumber"]);
        $("#epaymentType").val(dataRow["payment"]); // байх ёстой
        $("#edescription").val(dataRow["description"]);
      $('#productEdit').modal('show');
  })

  $("#ebtnNewProductAdd").click(function(e){
    e.preventDefault();
    alert($("#ebarCode").val());
    var isInsert = true;

    if($("#barCode").val()==""||$("#barCode").val()==null){
        alertify.error("Та заавал <b>BAR CODE</b> оруулна уу!!!");
        isInsert = false;
    }
    if(isInsert == false){return;}
    $.ajax({
      type: 'post',
      url: storeProduct,
      data: $("#frmNewProduct").serialize(),
      // data: {
      //     _token: csrf,
      //     barCode: $("#barCode").val()
      // },
      success:function(response){
          alertify.alert(response);
          emptyNewModal();
          // hunhuchRefresh();
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
  $("#barCode").val("");
  $("#imgUrl").val("");
  $("#price").val("");
  $("#phone").val("");
  $("#postType").val("");
  $("#who").val("1"); // 1 байх ёстой
  $("#languuniiNumber").val("");
  $("#paymentType").val("0"); // байх ёстой
  $("#description").val("");
}
