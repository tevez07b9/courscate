@extends('admin.layout.main')

@section('content')
<div class="content">
   <div class="container">
      <!-- Page-Title -->
      <div class="row">
         <div class="col-sm-12">
            <h4 class="page-title" style="margin-bottom: 20px;">Edit Product</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <div class="card-box">
               <h4 class="m-t-0 mb-4 header-title" ><b>Edit Product</b></h4>
               
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <form class="form-horizontal" role="form" method="post" action="{{ url('admin/products/'.$product->id) }}">
                         @csrf
                         {{ method_field('PUT') }}
                         @if (session('status'))
                            <div class="alert alert-success" style="color: green;" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form-group">
                           <label class="col-md-2 control-label">Product Name</label>
                           <div class="col-md-10">
                              <input type="text" value="{{ $product->product_name }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Product Name...">
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Product Description</label>
                           <div class="col-md-10">
                              <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Product Description...">{{ $product->product_description }}</textarea>
                              @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Product Category</label>
                           <div class="col-md-10">
                                <select name="category" class="form-control @error('category') is-invalid @enderror">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->cat_id }}" @if($product->product_category == $category->cat_id) selected @endif  >{{ $category->cat_name }}</option>
                                @endforeach
                                </select>
                              @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="col-md-2 control-label">Product Price</label>
                           <div class="col-md-10">
                              <input type="text" value="{{ $product->product_price }}" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Product Price...">
                              @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                        </div>

                        
                        
                        <div class="form-group">
                           <label class="col-md-2 control-label"></label>
                           <div class="col-md-10">
                                <button type="submit" class="btn btn-default waves-effect waves-light" >Update </button>
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
