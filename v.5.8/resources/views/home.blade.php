@extends('layouts.app01')

@section('content-app')
    <div class="container">
        @if( Auth::user()->role == 'admin' )
            @include('admin.dashboard')
        @elseif( Auth::user()->role == 'talent' )
            @include('talent.dashboard')
        @elseif( Auth::user()->role == 'client' )
            @include('client.dashboard')
        @endif
    </div>
@endsection

@if( Auth::user()->role == 'admin' )
    @include('admin.dashboard')
@endif
