@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <h4 class="page-title" style="margin-bottom: 20px;">Add Employee</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box">
               <h4 class="m-t-0 mb-4 header-title" ><b>Add Employee</b></h4>
               
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <form class="form-horizontal" role="form" method="post" action="{{ url('admin/employees_csv') }}" enctype="multipart/form-data">
                         @csrf
                         @if (session('status'))
                            <div class="alert alert-success" style="color: green;" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        

                        <div class="form-group">
                           <label class="col-md-2 control-label">Employee Data CSV</label>
                           <div class="col-md-10">
                           <input type="file" class="filestyle" name="csv_data" required data-size="sm">
                              @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        
                        
                        <div class="form-group">
                           <label class="col-md-2 control-label"></label>
                           <div class="col-md-10">
                                <input type="submit" name='submit' value='Import' class="btn btn-default" />
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
