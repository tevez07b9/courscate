@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <h4 class="page-title" style="margin-bottom: 20px;">All Categories</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="m-t-0 header-title"><b>All Categories</b></h4>
                

                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                    </thead>

                    <tbody>
                    
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->cat_name }}</td>
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
