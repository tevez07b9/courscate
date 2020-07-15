@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15 " style="margin-bottom: 20px;">
                <a href="{{ url('admin/add_product') }}" class="btn btn-default waves-effect waves-light" >Add Product </a>
            </div>
            <h4 class="page-title" style="margin-bottom: 20px;">All Products</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box table-responsive">
                
                <h4 class="m-t-0 header-title"><b>All Products</b></h4>
                

                <table  class="table table-striped m-0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->cat_name }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>
                                <a href="{{ url('admin/edit_product/'.$product->id) }}" class="btn btn-default waves-effect waves-light" >Edit </a>
                                <a href="{{ url('admin/delete_product/'.$product->id) }}" class="btn btn-danger waves-effect waves-light" >Delete </a>

                            </td>
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
