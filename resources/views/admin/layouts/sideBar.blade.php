<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <span class="fa fa-user-circle fa-2x"></span>
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="{{route('dashboard.index')}}">
                    <i class="fa fa-dashboard text-purple"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users text-primary"></i>
                    <span>User Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('dashboard.users.index')}}"><i class="fa fa-eye text-blue"></i> <span>User List</span></a></li>
                    <li><a href="{{route('dashboard.users.create')}}"><i class="fa fa-plus-circle text-blue"></i> <span>Add New User</span></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o text-primary"></i>
                    <span>Proposal Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('dashboard.proposal.index')}}"><i class="fa fa-eye text-blue"></i> <span>Proposal List</span></a></li>
                    <li><a href="{{route('dashboard.proposal.create')}}"><i class="fa fa-plus-circle text-blue"></i> <span>Add New Proposal</span></a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>Settings</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-info-circle"></i> About Us</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
