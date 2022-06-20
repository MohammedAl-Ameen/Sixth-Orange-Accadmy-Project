@extends('master') 
@section('content')  
<section style="overflow: hidden">
<form action="/Causes-product/add/{{ $product->id; }}" style="margin:10% 0; ">
<div class="row">
    <div class="col-10">
        <div class="row">
            <div class="col-7 ftco-animate mt-3">
                <div class="cause-entry">
                <a class="img" style="background-image: url('{{ asset('storage/images/' .$product->item_image) }}');"></a>

                </div>
            </div>
            <div class="col-5" style="display: flex; justify;align-items: center;justify-content: center;flex-direction: column;">
                <div><h3>{{ $product->item_name }}</h3></div>
                <div><p>{{ $product->item_description }}</p></div>
                @if (Auth::check())
                    @if ($flag)
                        <button type="button" class="btn" disabled style="pointer-events: none">Pending</button>
                    @else
                        <span class="fund-raised d-block d-flex justify-content-center" style="margin-top: 4%"><button type="submit" class="btn btn-info">Request</button></span>
                    @endif
                @else
                <span class="fund-raised d-block d-flex justify-content-center" style="margin-top: 4%"><button type="button" data-toggle="modal" data-target="#exampleModal"class="btn btn-info">Request</button></span>
                @endif
            </div>
            <div class="col-2"></div>
            </div>
        </div>
</div>

</form>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            You must login first to make a request.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection


