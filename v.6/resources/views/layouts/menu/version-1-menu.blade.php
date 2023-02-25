<!-- 
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="ace-icon fa fa-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="ace-icon fa fa-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="ace-icon fa fa-users"></i>
        </button>

        <button class="btn btn-danger">
            <i class="ace-icon fa fa-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div> -->

<!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
    <li class="">
        <a href="{{ route('admin.dashboard') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>

    <!-- <li class="">
        <a href="#">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Add Payment Client </span>
        </a>

        <b class="arrow"></b>
    </li> -->

    <li class="">
        <a href="{{ route('admin.tp.create') }}">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> Add Payment Talent </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="{{ route('admin.os.index') }}">
            <i class="menu-icon fa fa-book"></i>
            <span class="menu-text"> Index Order Service </span>
        </a>

        <b class="arrow"></b>
    </li>

    <!-- <li class="">
        <a href="#">
            <i class="menu-icon fa fa-book"></i>
            <span class="menu-text"> Add Order </span>
        </a>

        <b class="arrow"></b>
    </li> -->

</ul><!-- /.nav-list -->