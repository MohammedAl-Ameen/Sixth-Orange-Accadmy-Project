@extends('admin.master')
@section('content')
<div class="panel-header panel-header-sm">

</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          
          <h4 class="card-title"> Catigories</h4>
        
          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('category.create') }}"> Add New Category</a>
            
        </div>
        <div class="pull-right" style="padding-right: 70px; ">
          <form action="/searchCategory"  method="get" role="search">
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
                  Action
                </th>
              </thead>
              <tbody>
                @if(count($categories) > 0)
               @foreach ($categories as $category)
                  
                
                <tr>
                  <td>
                    {{$category->id;}}
                  </td>
                  <td >
                    <img src="  {{asset('public/adminImage/'.$category->category_image);}}" width="70px" height="70px" alt="Image">
                   
                  </td>
                  <td>
                    {{$category->category_name;}}
                  </td>
                  <td >
                    {{$category->category_description;}}
                  </td>
                 
                 
                  <td>
                    <form action=" {{ route('category.destroy',$category->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('category.edit',$category->id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
              @else <h5 style="color: #2F8F9D ">No Category found. Try to search again !</h5>

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