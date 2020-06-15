<!-- Modal -->
<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="productEdit" >
   <div class="modal-dialog modal-lg">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title mt-0" id="myLargeModalLabel">Анги засах</h5>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           </div>
           <div class="modal-body">
              <form id="frmUpdateAngi"  action="{{ action('angiController@update')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <input type="hidden" name="ID" id="getID" value="">
                <div class=" row">
                  <div class="form-group col-md-4">
                      <label class="col-form-label">Командлал</label>
                      <select class="form-control" name="komandlal" id="ekomandlal">
                          <option value="-1">Сонгон уу</option>
                          @foreach ($komandlals as $komandlal)
                              <option value="{{$komandlal->id}}">{{$komandlal->comandlalName}}</option>
                          @endforeach
                      </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label class="col-form-label">Ангийн код:</label>
                    <input class="form-control"  type="text" name="angiCodeID" id="eangiCodeID" value="">
                    <p>Жишээ: 65086</p>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="col-form-label">Анги:</label>
                    <input class="form-control"  type="text" name="angi"  id="eangi" value="">
                    <p>Жишээ: 065-086-р анги</p>
                  </div>
                </div>
                <div class=" row">
                  <div class="col-md-12">
                    <label class="col-form-label">Ангийн хаяг:</label>
                    <textarea class="form-control" name="address" id="eaddress" rows="5" cols="80"></textarea>
                  </div>
                </div>

              </form>

                <div class="form-group col-md-12 ">
                  {{-- <button type="button" onclick="BrowseServer('image');">Нүүр зураг сонгох</button>
                  <button type="button" name="button" onclick="BtnImg()" id="buttonImg">Зураг сонгох</button> --}}

                  <label  class="col-form-label">Зургийн зам:</label>
                  <form method="post" action="{{url('/angi/uploadImage')}}" enctype="multipart/form-data"
                        class="dropzone" id="dropzone">
                      @csrf
                      <div class="row">
                        <button type="button" class="btn btn-info" id="submit-all">Upload</button>
                      </div>
                  </form>
                </div>
                {{-- <style media="screen">
                #galleryall img {
                transition: -webkit-transform 0.25s ease;
                }

                #galleryall img:active {
                -webkit-transform: scale(2);
                }
                </style> --}}
                <div class="col-md-12">
                    <h3 class="panel-title">Uploaded Image</h3>
                      <div class="panel-body" id="uploaded_image">
                      </div>
                </div>
                {{-- <div class="form-group col-md-4">
                  <img height="100px" width="auto" src="{{url("public/images/angiImage/no-image-icon.png")}}" alt="" id="image">
                </div> --}}

           </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="ebtnNewAngiAdd">Засах</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
       </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
