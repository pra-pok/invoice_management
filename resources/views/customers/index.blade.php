@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-10">
            <h3>{{__('customer.customer_list')}}</h3>
        </div>
        <div class="col-sm-2 pull-right">
            <a href="#" class="btn btn-primary btn-sm openCreateModal">{{__('customer.create_customer')}}</a>
        </div>
    </div>
    @include('FlashMessage')
    <div class="panel">
        <div id="ContainerTable" data-url="{{ route('customers.index') }}">
            <div class="panel-body">
                @include('customers.table')
            </div>
        </div>

        <form method="post" id="CurrentForm" action="{{ route('customers.store') }}">
            @csrf
            @include('customers.modal')
        </form>
    @endsection
