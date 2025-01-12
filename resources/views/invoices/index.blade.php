@extends('layouts.app')

@section('content')
  <div class="row">
      <div class="col-sm-10">
        <h3>{{__('invoice.invoice_list')}}</h3>
      </div>
      <div class="col-sm-2 pull-right">
          <a href1="{{ route('invoices.create') }}" class="btn btn-primary btn-sm openCreateModal">{{__('invoice.create_invoice')}}</a>
          <a href="" class="btn btn-danger btn-sm">PDF</a>
    
      </div>
  </div>
  @include('FlashMessage')
<div class="panel">
    <div id="ContainerTable" data-url="{{ route('invoices.index') }}">
       <div class="panel-body">
    @include('invoices.table')
       </div>
    </div>
</div>
<input type="hidden" id="printUrl" data-print-url="{{ route('invoices.show', ['id', 'option' => 'optionvalue']) }}">
@include('invoices.modals')


@endsection
