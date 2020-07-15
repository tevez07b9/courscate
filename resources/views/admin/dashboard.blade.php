@extends('admin.layout.main')

@section('content')
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Dashboard</h4>
                <p class="text-muted page-title-alt">Welcome to {{ Auth::user()->name }} !</p>
            </div>
        </div>
    </div> <!-- container -->

</div> 
@endsection
