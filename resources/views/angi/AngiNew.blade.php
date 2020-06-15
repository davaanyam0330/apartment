<!-- Modal -->
<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="AngiNew" >
   <div class="modal-dialog modal-lg">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title mt-0" id="myLargeModalLabel">Анги нэмэх</h5>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           </div>
           <div class="modal-body">
              <form id="frmNewAngi"  action="{{ action('angiController@store')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <div class="form-group row">
                  <div class="form-group col-md-4">
                      <label class="col-form-label">Командлал</label>
                      <select class="form-control" name="komandlal" id="komandlal">
                          <option value="-1">Сонгон уу</option>
                          @foreach ($komandlals as $komandlal)
                              <option value="{{$komandlal->id}}">{{$komandlal->comandlalName}}</option>
                          @endforeach
                      </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label class="col-form-label">Ангийн код:</label>
                    <input class="form-control"  type="number" name="angiCodeID" id="angiCodeID" value="">
                    <p>Жишээ: 65086</p>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Анги:</label>
                    <input class="form-control"  type="text" name="angi"  id="angi" value="">
                    <p>Жишээ: 065-086-р анги</p>
                  </div>
                </div>


                <div class="form-group row">
                  <div class="col-md-12">
                    <label class="col-form-label">Хаяг:</label>
                    <textarea class="form-control" name="address" id="address" rows="5" cols="80"></textarea>
                  </div>
                </div>

              </form>

           </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnNewAngi">Бүртгэх</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
       </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
