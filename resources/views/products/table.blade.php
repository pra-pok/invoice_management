<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0">
    <thead>
        <tr>
            <th>SN</th>
            <th>{{__('product.product_name')}}</th>
            <th>{{__('product.product_name')}}</th>
            <th>{{__('product.product_qty')}}</th>
            <th>{{__('product.product_desc')}}</th>
            <th>{{__('backend.action')}}</th>
        </tr>
    </thead>
    <tbody id="tableIndex">
        @include('products.tableContent')
    </tbody>
</table>
