<div id="openCreateModal" class="modal right fade">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fa fa-times-circle fa-2x text-danger "></i>
                    </span></button>
                <h4 class="modal-title">{{__('product.create_product')}}</h4>
            </div>
            <div class="modal-body">
                <div id="ContainerTable">
                    @include('products.fields')
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-success">Save Product</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
