@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <h4 class="page-title" style="margin-bottom: 20px;">Add Category</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box">
               <h4 class="m-t-0 mb-4 header-title" ><b>Add Category</b></h4>
               
               <div class="row justify-content-center">
                  <div class="col-md-6">
                     <form class="form-horizontal" role="form" method="post" action="{{ url('admin/categories') }}">
                         @csrf
                         @if (session('status'))
                            <div class="alert alert-success" style="color: green;" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                           <label class="col-md-2 control-label">Text</label>
                           <div class="col-md-10">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Category Name...">
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>
                        
                        <div class="form-group">
                           <label class="col-md-2 control-label"></label>
                           <div class="col-md-10">
                                <button type="submit" class="btn btn-default waves-effect waves-light" >Create </button>
                           </div>
                        </div>
                     </form>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      
   </div>
   <!-- container -->
</div>
@endsection
