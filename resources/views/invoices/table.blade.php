<table class="table table-striped table-hover table-bordered" id="data-table" cellspacing="0">
    <thead>
        <tr>
            <th>SN</th>
            <th>{{__('invoice.invoice_number')}}</th>
            <th>{{__('invoice.customer')}}</th>
            <th>{{__('invoice.issue_date')}}</th>
            <th>{{__('invoice.due_date')}}</th>
            <th>{{__('invoice.type')}}</th>
            <th>{{__('invoice.status')}}</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody id="tableIndex">
        @include('invoices.tableContent')
    </tbody>
</table>
