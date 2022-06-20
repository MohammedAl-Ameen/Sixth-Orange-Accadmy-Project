@extends('admin.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" style="padding-left: 90px; width: 1500px">
  <div class="row">
    <div class="col-md-8" >
      <div class="card">
        <div class="card-header">
          <h5 class="title">Edit Product</h5>
        </div>
        
        <div class="card-body" >
            @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

          <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" value='{{$product->item_name}}' name='pname'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea class="form-control" style="height:100px" name="pdescription" placeholder=".....">{{$product->item_description}}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-select" aria-label="Default select example" name="category" value='{{$product->cetegory_name}}'>
                        <option selected>Choose Category..</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                       @endforeach
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Status   </label>
              <select class="form-select" aria-label="Default select example" name="status">
                <option value="1">Accept</option>
                <option value="0">Reject</option>
              </select>
                  </div>
                </div>
              </div>
        <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control"  name='image'>
              </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left" style="padding-left: 40px">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
       
      </div>
    </div>
  </div>
</div>

@endsection