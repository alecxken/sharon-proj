  <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('images/logo.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li  class="{{ (request()->is('home')) ? 'active' : '' }}"><a href="{{url('home')}}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
       
       <li class="treeview {{ (request()->is('product-create')) ? 'active' : '' }} {{ (request()->is('product-view')) ? 'active' : '' }} ">
            <a href="#"><i class="fa fa-cog"></i> <span> Product Sections</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
         
            <li>
              <a href="{{url('product-create')}}"><i class="fa fa-link"></i> <span>Create Product</span></a></li>

             <li class="{{ (request()->is('product-view')) ? 'active' : '' }}"><a href="{{url('product-view')}}" ><i class="fa fa-link"></i> <span>View Products</span></a></li>
   
           
          
            </ul>
          </li>
       <li class="treeview {{ (request()->is('reports')) ? 'active' : '' }} ">
            <a href="#"><i class="fa fa-cog"></i> <span> Report Sections</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
         
            <li>
              <a href="{{url('payments')}}" class="{{ (request()->is('loans')) ? 'active' : '' }}"><i class="fa fa-link"></i> <span>Payments Report</span></a></li>

             <li class="{{ (request()->is('loans')) ? 'active' : '' }}"><a href="{{url('loans')}}" ><i class="fa fa-link"></i> <span>Loans Report</span></a></li>
   
           
          
            </ul>
          </li>
        @role('Admin')
          <li class="treeview {{ (request()->is('job')) ? 'active' : '' }}  {{ (request()->is('admin')) ? 'active' : '' }}">
            <a href="#"><i class="fa fa-cog"></i> <span> Setting Sections</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
         
            <li>
              <a href="{{url('loan-create')}}"><i class="fa fa-link"></i> <span>Loan Settings</span></a></li>

             <li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a href="{{url('admin')}}" ><i class="fa fa-link"></i> <span>User Management</span></a></li>
   
           
          
            </ul>
          </li>
          @endrole
     

        </ul>

    
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>