<!-- import-template -->
@extends('layouts.ace')
@section('title','404 Error')

<!-- header -->
@push('header')
<!-- none -->
@endpush

<!-- breadcrumbs -->
@section('breadcrumbs')
<!-- step -->
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="/">Dashboard</a>
        </li>

        <li class="active">Error 404</li>

        <!-- <li>
                <a href="#">Other Pages</a>
            </li>
            <li class="active">Blank Page</li> -->
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
        <form class="form-search">
            <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
        </form>
    </div><!-- /.nav-search -->
</div>
@endsection

<!-- page-header -->
@section('page-header')
<!-- none -->
@endsection

<!-- main -->
@section('main')
    <!-- none -->
    <div class="error-container">
        <div class="well">
            <h1 class="grey lighter smaller">
                <span class="blue bigger-125">
                    <i class="ace-icon fa fa-sitemap"></i>
                    404
                </span>
                Page Not Found
            </h1>

            <hr />
            <h3 class="lighter smaller">We looked everywhere but we couldn't find it!</h3>

            <div>
                <form class="form-search">
                    <span class="input-icon align-middle">
                        <i class="ace-icon fa fa-search"></i>

                        <input type="text" class="search-query" placeholder="Give it a search..." />
                    </span>
                    <button class="btn btn-sm" type="button">Go!</button>
                </form>

                <div class="space"></div>
                <h4 class="smaller">Try one of the following:</h4>

                <ul class="list-unstyled spaced inline bigger-110 margin-15">
                    <li>
                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                        Re-check the url for typos
                    </li>

                    <li>
                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                        Read the faq
                    </li>

                    <li>
                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                        Tell us about it
                    </li>
                </ul>
            </div>

            <hr />
            <div class="space"></div>

            <div class="center">
                <a href="javascript:history.back()" class="btn btn-grey">
                    <i class="ace-icon fa fa-arrow-left"></i>
                    Go Back
                </a>

                <a href="#" class="btn btn-primary">
                    <i class="ace-icon fa fa-tachometer"></i>
                    Dashboard
                </a>
            </div>
        </div>
    </div>
@endsection

<!-- script -->
@push('script')
<!-- none -->
@endpush


<!-- inline_scripts -->
@push('inline_scripts')
<!-- none -->
@endpush