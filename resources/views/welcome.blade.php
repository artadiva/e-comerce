@extends('layouts.user')

@section('title') Home @endsection

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="/user/img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="/user/img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag,kids</span>
                        <h1>Black friday</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        </p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Women Banner Section Begin -->
<!-- <h1>xxxxxxxxx</h1>
<pre>
                    <?php print_r($products) ?>
                    </pre>
                    <h1>wwwwwwww</h1> -->
<section>
    <a href="">
    <div class="col-lg-12 alert alert-success" style="text-align: left; color: black; "> Promo</div></a>
</section>
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="product-slider owl-carousel">

                     @foreach($products as $products)

                    <div class="product-item">
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
                                <li class="quick-view"><a href="/produkdetail/{{$products->id}}">+ Quick View</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coat</div>
                            <a href="#">
                                <h5>{{$products->product_name}}</h5>
                            </a>
                            <div class="product-price">
                                @if($products->percentage==0)
                               <label>${{$products->price}}</label>

                                @else
                                <label>${{$products->price - ($products->price * $products->percentage)/100}}</label>
                                <br><label style="color:red; font-size: 12px;"><br>Discounts {{$products->percentage}}%</label>
                                <span>${{$products->price}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->
<section>
    <a href="">
    <div class="col-lg-12 alert alert-info" style="text-align: left; color: black; "> All Products</div></a>
</section>
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="product-slider owl-carousel">

                     @foreach($products_top10 as $products)

                    <div class="product-item">
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
                                <li class="quick-view"><a href="/produkdetail/{{$products->id}}">+ Quick View</a></li>
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
        </div>
    </div>
</section>
<section>
    <a href="http://127.0.0.1:8000/lihatproduk">
    <div class="col-lg-12 alert alert-warning" role="alert" style="text-align: center; color: black; "> More ...</div></a>
</section>

<!-- Instagram Section Begin -->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="/user/img/insta-1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="/user/img/insta-2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="/user/img/insta-3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="/user/img/insta-4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="/user/img/insta-5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="/user/img/insta-6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">shayna_gallery</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section End -->
@endsection
