@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15 " style="margin-bottom: 20px;">
                <a href="{{ url('admin/add_employee') }}" class="btn btn-default waves-effect waves-light" >Add Employee </a>
                <a style="margin-left: 10px;" href="{{ url('admin/add_employee_csv') }}" class="btn btn-default waves-effect waves-light" >Upload CSV </a>
            </div>
            <h4 class="page-title" style="margin-bottom: 20px;">All Employees</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="m-t-0 header-title"><b>All Employees</b></h4>
                

                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    </thead>

                    <tbody>
                    
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->emp_name }}</td>
                            <td>{{ $employee->emp_email }}</td>
                            <td>{{ $employee->emp_mobile }}</td>
                            <td>{{ $employee->emp_address }}</td>
                        </tr>
                    @endforeach
                    
                    
                    </tbody>
                </table>
                </div>
            </div>
      </div>
      
   </div>
   <!-- container -->
</div>
@endsection
