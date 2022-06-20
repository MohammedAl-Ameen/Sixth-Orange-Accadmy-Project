
      @extends('master') 
      @section('content')  


      
    <div class="hero-wrap" style="background-image:url('https://i0.wp.com/post.medicalnewstoday.com/wp-content/uploads/sites/3/2020/05/GettyImages-1184019336_header-1024x575.jpg?w=1155&h=1528');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
              {{-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Causes</span></p> --}}
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donations</h1>
            @if (session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="alert alert-success" role="alert">
              <p class="mb-0" style="color: black;">{{ session('message') }}</p>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <form class="form-inline" style="display: flex;justify-content: flex-end;align-items: center;margin-top: 5%;margin-right:5%" action="/search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="height: auto" name="search">
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">
    </form>
    <section class="ftco-section" style="overflow: hidden; padding: 2em 0;" id="product_section">
      <div class="row">
        <div class="col-2">
          <div class="container">
            <div class="list-group list-group-light">
              <a class="list-group-item list-group-item-action px-3 border-0 disabled mt-3">Categories</a>
              <a href="/causes#product_section" class="list-group-item list-group-item-action px-3 border-0" aria-current="true">
                All</a>
            @foreach ($categories as $category)
              <a href="/causes/{{$category->id}}#product_section" class="list-group-item list-group-item-action px-3 border-0" aria-current="true">
                {{ $category->category_name }}</a>
                
            @endforeach
            </div>
          </div>
        </div>
        @if (count($pages) != 0)
          
        <div class="col-10">
          <div class="container">
          <div class="row">
            @if (!isset($_GET["page"]))
            @foreach ( $pages[0] as $product )
            @if ($product->state == "pending" || $product->state == "refused")
            {{ dd($product) }}
              @if (count($pages) == 1)
                <div class="col-10">
                <h1>There is no Items</h1>
                </div>
              @endif
              @continue
            @endif
            <div class="col-md-4 ftco-animate mt-3">
              <div class="cause-entry">
                <a class="img" style="background-image: url('{{ asset('storage/images/' .$product->item_image) }}');"></a>
                <div class="text p-3 p-md-4">
                  <h3>{{ $product->item_name }}</h3>
                  <p>{{ $product->item_description }}</p>
                  <span class="donation-time mb-3 d-block"></span>
                  <span class="fund-raised d-block d-flex justify-content-center"><a href="/Causes-product/{{$product->id}}"><button type="button" class="btn btn-info">More Info</button></a></span>
                </div>
              </div>
            </div>
            @endforeach
            @else
            @foreach ($pages[$_GET["page"] - 1] as $product)
            @if ($product->state == "pending" || $product->state == "Refused")
          @endif
            <div class="col-md-4 ftco-animate mt-3">
                <div class="cause-entry">
                  <a class="img"  style="background-image: url('{{ asset('storage/images/' .$product->item_image) }}');"></a>
                  <div class="text p-3 p-md-4">
                    <h3>{{ $product->item_name }}</h3>
                    <p>{{ $product->item_description }}</p>
                    <span class="donation-time mb-3 d-block"></span>
                    <span class="fund-raised d-block d-flex justify-content-center"><a href="/product/{{$product->id}}"><button type="button" class="btn btn-info">More Info</button></a></span>
                  </div>
                </div>
              </div>
            @endforeach
            @endif
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                @if ($type == "index")
                @if (isset($_GET["page"]))
                <li style="display:none;"><a href=""></a></li>
                <li><a href="causes?page=@if($_GET["page"] - 1 == 0)1
                @else{{$_GET["page"]-1}}@endif#product_section">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="causes?page={{ $i }}#product_section">{{ $i }}</a></span></li>
                @endfor
                <li><a href="causes?page=@if($_GET["page"] + 1 == $pages_number + 1){{$pages_number}}
                  @else{{$_GET["page"]+1}}@endif#product_section">&gt;</a></li>
                @else
                <li style="display:none;"><a href=""></a></li>
                <li><a href="causes?page=1#product_section">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="causes?page={{ $i }}#product_section">{{ $i }}</a></span></li>
                @endfor
                <li><a href="causes?page=2#product_section">&gt;</a></li>
                @endif
                @elseif ($type == "ShowProductCategory")
                @if (isset($_GET["page"]))
                <li style="display:none;"><a href=""></a></li>
                <li><a href="/causes/{{$category_id}}?page=@if($_GET["page"] - 1 == 0)1
                @else{{$_GET["page"]-1}}@endif#product_section">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="/causes/{{$category_id}}?page={{ $i }}#product_section">{{ $i }}</a></span></li>
                @endfor
                <li><a href="/causes/{{$category_id}}?page=@if($_GET["page"] + 1 == $pages_number + 1){{$pages_number}}
                  @else{{$_GET["page"]+1}}@endif#product_section">&gt;</a></li>
                @else
                <li style="display:none;"><a href=""></a></li>
                <li><a href="/causes/{{$category_id}}?page=1#product_section">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="/causes/{{$category_id}}?page={{ $i }}#product_section">{{ $i }}</a></span></li>
                @endfor
                <li><a href="/causes/{{$category_id}}?page=2#product_section">&gt;</a></li>
                @endif
                {{-- @elseif ($type == "search") --}}
                {{-- @if (isset($_GET["page"]))
                <li style="display:none;"><a href=""></a></li>
                <li><a href="/search?search={{$_GET["search"]}}@if($_GET["page"] - 1 == 0)1
                @else{{$_GET["page"]-1}}@endif#product_section">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="/search?search={{$_GET["search"]}}#product_section">{{ $i }}</a></span></li>
                @endfor
                <li><a href="/search?search={{$_GET["search"]}}@if($_GET["page"] + 1 == $pages_number + 1){{$pages_number}}
                  @else{{$_GET["page"]+1}}@endif#product_section">&gt;</a></li>
                @else
                <li style="display:none;"><a href=""></a></li>
                <li><a href="/search?search={{$_GET["search"]}}=1#product_section">&lt;</a></li>
                @for ($i = 1; $i <= $pages_number; $i++)
                <li><span><a href="/search?search={{$_GET["search"]}}?page={{ $i }}#product_section">{{ $i }}</a></span></li>
                @endfor
                <li><a href="/search?search={{$_GET["search"]}}?page=2#product_section">&gt;</a></li>
                @endif --}}
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="col-10">
      <h1>There is no Items</h1>
    </div>
    @endif
    </div>
      
    </section>
		

    @endsection

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
