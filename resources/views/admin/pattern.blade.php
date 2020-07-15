@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <h4 class="page-title" style="margin-bottom: 20px;">Your Pattern</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box table-responsive">
            {!! $pattern !!}
            <a href="{{ url('admin/make_loop') }}" class="btn btn-default waves-effect waves-light" >Try Again </a>

            </div>
      </div>
      
   </div>
   <!-- container -->
</div>
@endsection
