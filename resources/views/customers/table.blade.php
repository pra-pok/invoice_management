<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0">
    <thead>
        <tr>
            <th>SN</th>
            <th>{{__('customer.name')}}</th>
            <th>{{__('customer.email')}}</th>
            <th>{{__('customer.phone')}}</th>
            @if (!Request::is('invoices*'))
            <th>{{__('customer.country')}}</th>
            @endif
            <th>{{__('backend.action')}}</th>

        </tr>
    </thead>
    <tbody id="tableIndex">
        @include('customers.tableContent')
    </tbody>
</table>
