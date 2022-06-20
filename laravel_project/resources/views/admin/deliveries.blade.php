@extends('admin.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Deliveries</h4>
          <div class="pull-left">
           
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
                {{-- <th>
                  Image
                </th> --}}
                <th>
                  Name
                </th>
                <th >
                  Email
                </th>
                <th >
                  Address
                </th>
                <th >
                  Mobile Number
                </th>
                <th >
                  Action
                </th>
              </thead>
              <tbody>
                @foreach ($deliveries as $delivery)
                  
                
                <tr>
                  <td>
                    {{$delivery->id;}}
                  </td>
                  {{-- <td>
                    <img src="  {{asset('public/adminImage/'.$user->user_image);}}" width="70px" height="70px" alt="Image">
                   
                  </td> --}}
                  <td>
                    {{$delivery->delivery_name;}}
                  </td>
                  <td >
                    {{$delivery->delivery_email;}}
                  </td>
                  <td >
                    {{$delivery->delivery_address;}}
                  </td>
                  <td >
                    {{$delivery->delivery_mobile;}}
                  </td>
                  <td>
                    <form action=" {{ route('delivery.destroy',$delivery->id) }}" method="POST"> 
                      {{-- <a class="btn btn-info" href="{{ route('delivery.edit' ,$delivery->id) }}">Edit</a> --}}
                      @csrf
                      @method('DELETE')
                      
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  </td>
                </tr>
                @endforeach
                
              </tbody>

            </table>
           
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>


      @endsection