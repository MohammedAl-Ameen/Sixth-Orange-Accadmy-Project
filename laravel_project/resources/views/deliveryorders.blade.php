@extends('master')
@section('content')
<section class="ftco-section bg-light">
    <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4"  style="color:#2F8F9D">Voluntary medical equipment delivery</h2>
                </div>
            </div>
            @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
            <div class="row">
                @foreach ($orders as $order)
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <h3 class="heading mb-4"><a href="#">{{ $order->item_name }}</a></h3>
                            <p>{{ $order->item_description }}</p>
                            <p>         
                             <form action="{{ route('deliveryorders.update',[$order->id,]) }}" method="Post">
                                @csrf
                                @method('PUT')
                                <button type="submit"  class="btn-block btn-primary" style="color:white">Deliver</button>
                                </form>
                            
                            </p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        

        </div>
    </div> 
        </section>
        @endsection