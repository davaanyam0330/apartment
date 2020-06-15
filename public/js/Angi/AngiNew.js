$(document).ready(function(){
  var fileName = "hooson bn";
  $("#btnAngiNew").click(function(){

    $("#AngiNew").modal("show");



  });
  // $('input[type="file"]').change(function(e){
  //          fileName = e.target.files[0].name;
  //         // alert('The file "' + fileName +  '" has been selected.');
  // });
  $("#btnNewAngi").click(function(e){
    e.preventDefault();
    var isInsert = true;

    if($("#komandlal").val()=="-1"){
        alertify.error("Та заавал Командлал сонголно уу!!!");
        isInsert = false;
    }

    if($("#angi").val()==""||$("#angi").val()==null){
        alertify.error("Та заавал Ангийн дугаар оруулна уу!!!");
        isInsert = false;
    }

    if($("#angiCodeID").val()==""||$("#angiCodeID").val()==null){
        alertify.error("Та заавал Ангийн код үүсгэж өгөнө үү!!!");
        isInsert = false;
    }


    if(isInsert == false){return;}


    $.ajax({
      type: 'get',
      url: storeAngi,
      data: $("#frmNewAngi").serialize(),
      // data: {
      //     _token: csrf,
      //     komandlal: $("#komandlal").val(),
      //     angiCodeID : $("#angiCodeID").val(),
      //     angi: $("#angi").val(),
      //     imgUrl: fileName,
      //     address: $("#address").val()
      // },
      success:function(response){
          // alert(response);
            // swal("Good job!", "You clicked the button!", "success");
          alertify.alert( response);
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
