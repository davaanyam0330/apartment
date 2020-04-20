<div id="modalAdminNew" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><strong>Хэрэглэгч нэмэх</strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4 text-right">
                    <label class="" for="">Хэрэглэгчийн нэр:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtNewName" name="" value="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Цахим хаяг:</label>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="txtNewEmail" name="" value="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Хэрэглэгчийн төрөл:</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="cmbNewAdminType" name="">
                        <option value="0">Сонгоно уу</option>
                        <option value="1">Бээжин</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Зураг:</label>
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control" name="" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Нууц үг:</label>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="txtNewPassword" name="" value="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-right">
                    <label for="">Нууц үгээ давтана уу:</label>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="txtNewPasswordRepeat" name="" value="" />
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-success" id="btnNewAdmin" name="" value="Хадгалах" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

  </div>
</div>
