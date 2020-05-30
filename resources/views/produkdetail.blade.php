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
    <div class="col-lg-12 alert alert-info" style="text-align: left; color: black; ">Product Detail</div></a>
</section>
<section class="">
    <div class="container">
        <div class="container theme-showcase">



            <div class="page-header">
            <h4>{{$products->product_name}}</h4>
            </div>
            <hr>
            <div class="row">
            <div class="col-md-6">
            <img class="img-thumbnail" alt="200x200" style="width: 500px; height: 700px;" src="{{ url('storage/produk/' . $products->gambar) }}" />
            </div>

                <div class="col-md-6">
                <div class="col-md-12 btn btn-warning">
                    <form action="/cart/tambah" method="post">
                         @csrf
                        @guest
                        <b>Login/Register dahubu sebelum memulai berbelanja</b>
                        @else
                        <input type="text" name="product_id" value="{{$products->id}}" hidden>

                        <input type="text" name="user_id" value="{{ Auth::user()->id}}" hidden>
                        <label>Quantity</label>
                        <input type="number" name="qty" min="1" max="{{$products->stock}}" required>
                        <button type="submit " class="btn btn-warning">Tambahkan ke keranjang</button>
                        @endguest
                    </form>

                </div>
                <hr>
                <div class="col-md-12">
                    <div class="well">
                    <h5>Description</h5>
                    <hr>
                    <p>{{$products->description}}</p>
                    </div>
                    <hr>
                </div>
                </div>

            </div>
            <hr>


            <hr>
            <div class="row">

                <div class="col-md-3" style="text-align:left;"><b>REVIEW</b></div>


            <div class="col-md-3"style="text-align:right;">


            </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr/>
                    <div class="review-block">
                      @if($products_review)
                      @foreach($products_review as $row)
                      <div class="row">
                          <div class="col-md-3 left">

                              <div class="review-block-name"><a href="#">{{$row->name}}</a></div>
                              <div class="review-block-date">{{$row->created_at}}</div>
                          </div>
                          <div class="col-md-9 right">
                              <div class="review-block-rate">
                              <?php for ($i=0; $i <$row->rate ; $i++) {
                              ?>
                              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                              </button>
                              <?php
                              } ?>


                              </div>
                              <div class="review-block-title">Mengatakan</div>
                              <div class="">{{$row->content}}
                              </div>
                              @foreach($product_response as $response)
                              @if($response->review_id==$row->id)
                              <hr>
                              <div class="">
                              
                              <p align="right">{{$response->content}}<br>ADMIN</p>
                            </div>
                              @else

                              @endif
                              @endforeach
                          </div>
                      </div>
                      <hr/>
                      @endforeach
                      @endif





                    </div>
                </div>
            </div>




    </div>
</section>


<!-- Instagram Section Begin -->

<!-- Instagram Section End -->
@endsection
