<!-- Modal -->
<div class="modal fade" v-bind:id="'myModal' + address.id" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">
           编辑收货地址
        </h4>
      </div>
      <div class="modal-body">
         <div class="form-bb">
         @include('smartisan.checkout.address.form')
         </div><!--/form-bb-->
      </div><!--/modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          关闭
        </button>
        <button type="button" class="btn btn-success" v-on:click="updateAddress(address)">
          保存
        </button>
      </div>
    </div>
  </div>
</div>
