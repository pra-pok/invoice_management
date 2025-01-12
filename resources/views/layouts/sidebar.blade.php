 <!-- Sidebar Menu -->
 <ul class="sidebar-menu">
    <li class="header">MENU</li>
    <!-- Menu 0.1 -->
    <!-- Menu 1 -->
     <li class="treeview {{ Request::is('invoices*') ? 'active' : '' }}">
      <a href="#"><i class="fa fa-file-text-o"></i> <span>{{__('menu.invoices')}}</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          @if (Request::is('invoices*'))
            <li><a href="#" class="openCreateModal"><i class="fa fa-plus"></i>{{__('invoice.create_invoice')}}</a></li>
          @endif
        <li><a href="{{ route('invoices.index') }}"><i class="fa fa-list"></i>{{__('invoice.invoice_list')}}</a></li>
      </ul>
    </li>
    <!-- Menu 2 -->
     <li class="treeview {{ Request::is('products*') ? 'active' : '' }}">
      <a href="#"><i class="fa fa-archive"></i><span>{{__('menu.products')}}</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        @if (Request::is('products*'))
        <li><a href="#" class="openCreateModal"><i class="fa fa-plus"></i>{{__('product.create_product')}}</a></li>
        @endif

        <li><a href="{{ route('products.index') }}"><i class="fa fa-list"></i>{{__('product.product_list')}}</a></li>
      </ul>
    </li>
    <!-- Menu 3 -->
    <li class="treeview {{ Request::is('customers*') ? 'active' : '' }}">
      <a href="#"><i class="fa fa-users"></i><span>{{__('menu.customers')}}</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        @if (Request::is('customers*'))
        <li><a href="#" class="openCreateModal"><i class="fa fa-plus"></i>{{__('invoice.create_invoice')}}</a></li>
        @endif
        <li><a href="{{ route('customers.index') }}"><i class="fa fa-list"></i> {{__('invoice.invoice_list')}}</a></li>
      </ul>
    </li>
    <li class="treeview {{ Request::is('settings*') ? 'active' : '' }}">
        <a href="{{ route('setting.index') }}"><i class="fa fa-cog"></i> <span>{{__('menu.system_setting')}}</span>
        </a>
      </li>
  </ul>
  <!-- /.sidebar-menu -->
