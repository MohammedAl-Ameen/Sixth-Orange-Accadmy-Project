@extends('admin.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Products</h4>
          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('product.create') }}"> Add New Product</a>
        </div>
        <div class="pull-right" style="padding-right: 70px; ">
          <form action="/searchProduct"  method="get" role="search">
          @csrf
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search..." name="search">
              <div class="input-group-append">
                <div class="input-group-text">
                  <button type="submit" style="border: none; color:  #2F8F9D"><i class="now-ui-icons ui-1_zoom-bold"></i></button>
                </div>
              </div>
            </div>
          </form>
       
        </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Image
                </th>
                <th>
                  Name
                </th>
                <th >
                  Description
                </th>
                <th >
                    Category
                  </th>
                  <th >
                    Status
                  </th>
                <th >
                  Action
                </th>
              </thead>
              <tbody>
                @if(count($products) > 0)
               @foreach ($products as $product)
                  
                
                <tr>
                  <td>
                    {{$product->id;}}
                  </td>
                  <td >
                    <img src="  {{asset('storage/images/'.$product->item_image);}}" width="70px" height="70px" alt="Image">
                   
                  </td>
                  <td>
                    {{$product->item_name;}}
                  </td>
                  <td >
                    {{$product->item_description;}}
                  </td>
                 <td>
                  {{$product->category_name ;}}
                 </td>
                 <td>
                  {{$product->state ;}}
                 </td>
                  <td>
                    <form action=" {{ route('product.destroy',$product->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('product.edit',$product->id) }}">Edit</a>

                      @csrf
                      @method('DELETE')
                      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
                @else <h5 style="color: #2F8F9D ">No Product found. Try to search again !</h5>

                @endif
                
              </tbody>

            </table>
           
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>


      @endsection