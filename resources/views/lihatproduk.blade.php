@extends('layouts.user')

@section('title') Home @endsection

@section('content')
<!-- Hero Section Begin -->

<!-- Hero Section End -->

<!-- Women Banner Section Begin -->
<!-- <h1>xxxxxxxxx</h1>
<pre>
                    <?php print_r($products) ?>
                    </pre>
                    <h1>wwwwwwww</h1> -->

<section>
    <a href="">
    <div class="col-lg-12 alert alert-info" style="text-align: left; color: black; "> All Products</div></a>
</section>
<section class="">
    <div class="container">
        <div class="container">
     
 
        <div class="row">
            
                

                     @foreach($products_top10 as $products)

                    <div class="product-item col-md-4">
                        <div class="pi-pic">
                            @if(empty($products->gambar))
                            <img src="{{ url('storage/produk/mickey1.jpg') }}" alt="" width="200px" height="600px"  />
                            @else
                            <img src="{{ url('storage/produk/' . $products->gambar) }}" alt="" width="200px" height="600px" />
                            @endif
                            <ul>
                                <li class="w-icon active">
                                    <a href="#"><i class="icon_bag_alt"></i></a>
                                </li>
                                <li class="quick-view"><a href="/produkdetail/{{$products->id}}">+ Lihat Detail</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>{{$products->product_name}}</h5>
                            </a>
                            <div class="product-price">
                                
                               <label>${{$products->price}}</label>
                               
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
               
        </div>
    </div>
</section>


<!-- Instagram Section Begin -->

<!-- Instagram Section End -->
@endsection