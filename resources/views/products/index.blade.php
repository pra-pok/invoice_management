@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-10">
            <h3>{{__('product.product_list')}}</h3>
        </div>
        <div class="col-xs-2 pull-right">
            <a href="#" class="btn btn-primary btn-sm openCreateModal">{{__('product.create_product')}}</a>
        </div>
    </div>

    @include('FlashMessage')

    <div class="panel">
        <div id="ContainerTable" data-url="{{ route('products.index') }}">
            <div class="panel-body">
                @include('products.table')
            </div>
        </div>
    </div>

    <form method="post" id="CurrentForm" action="{{ route('products.store') }}">
        @csrf
        @include('products.modal')
    </form>


@endsection
