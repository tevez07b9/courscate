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
                     <form class="form-horizontal" role="form" method="post" action="{{ url('admin/employees') }}">
                         @csrf
                         @if (session('status'))
                            <div class="alert alert-success" style="color: green;" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                           <label class="col-md-2 control-label">Employee Name</label>
                           <div class="col-md-10">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Employee Name...">
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Employee Email</label>
                           <div class="col-md-10">
                              <input type="email" class="form-control @error('emp_email') is-invalid @enderror" name="emp_email" placeholder="Employee Email...">
                              @error('emp_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Employee Description</label>
                           <div class="col-md-10">
                              <textarea class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Employee Address..."></textarea>
                              @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Employee Phone</label>
                           <div class="col-md-10">
                              <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Employee Phone...">
                              @error('phone')
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
