<!-- Modal -->
  <div class="modal fade" id="productEdit" >
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Засвар хийх хэсэг</h4>
        </div>
        <form id="frmEditProduct"  action="{{ action('RegisterProductsController@store')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
          @csrf
        <div class="modal-body">
          <div class="form-group row">
            <div class="col-md-6">
              <label for>Bar code:</label>
              <input class="form-control" type="text" name="barCode" id="ebarCode" placeholder="Bar code" required>
            </div>
            <div class="form-group col-md-4">
              <label for="">Зургийн зам:</label>
              <input class="form-control" type="file" name="imgUrl" id="eimgUrl" value="">
            </div>
            <div class="col-md-2">
              <label>Үнэ:</label>
              <input class="form-control" type="number" name="price" id="eprice"  placeholder="Үнэ">
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label>Утас:</label>
              <input class="form-control" type="text" name="phone" id="ephone" placeholder="Утас">
            </div>
            <div class="form-group col-md-4">
              <label>Шуудангийн төрөл:</label>
              <input class="form-control" type="text" name="postType" id="epostType"  placeholder="Шуудангийн төрөл">
            </div>

            <div class="form-group col-md-2">
              <label>Хэн:</label>
              <select class="form-control" name="who" id="ewho">
                @foreach ($getWhoItem as $WhoItem)
                <option value="{{$WhoItem->id}}">{{$WhoItem->who_name}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-md-4">
              <label for="">Лангууны дугаар:</label>
              <input class="form-control" type="text" name="languuniiNumber" id="elanguuniiNumber"  placeholder="Лангууны дугаар">
            </div>
            <div class="form-group col-md-4">
              <label>Төлбөр:</label>
              <select class="form-control" name="paymentType" id="epaymentType">
                @foreach ($getPaymentItem as $PaymentItem)
                    <option value="{{$PaymentItem->id}}">{{$PaymentItem->payment_type}}</option>
                @endforeach

              </select>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="form-group">
              <label class="control-label col-md-1" >Тайлбар:</label>
              <div class="col-md-11">
                  <textarea class="form-control" id="edescription" name="description" autocomplete="off" placeholder="Тайлбар"></textarea>
              </div>
          </div>
          <div class="clearfix"></div>

         </div> {{-- body end --}}

        <div class="modal-footer">
          <button type="submit" id="ebtnNewProductAdd" class="btn btn-warning" >Засах</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Хаах</button>
        </div>
       </form>{{-- form end --}}
      </div>

    </div>
  </div>

</div>
