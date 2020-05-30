@extends('layouts.master')
@section('content')
    <main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Review</li>
    </ol>
    <div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
          <div class="col-lg-12 alert alert-info" style="">
            <h2>Daftar Review</h2>
            <p>Silakan balas review dibawah ini.</p>
            <!-- collapse -->

            <!-- collapse -->
          </div>
          @foreach($product_reviews as $review)
          <div class="col-lg-9 alert alert-success" style="">
            <h4>Dari : {{$review->name}}<br>Produk : {{$review->product_name}}</h4>
            <p>{{$review->content}}</p>
            <hr>
            @foreach($product_response as $response)
            @if($response->review_id==$review->id)
            <p align="right">{{$response->content}}<br>ADMIN</p>
            @else

            @endif
            @endforeach
            <hr>
            <!-- collapse -->
            <form class="" action="review/input/{{$review->id}}" method="get">
            @csrf


          <div class="form-group">
               <label for="exampleInputEmail1">Balas</label>
        <textarea class="form-control" type="text" name="response" value="" ></textarea>
      </div>  <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <!-- collapse -->
          </div>
          @endforeach


					<!--/ End Shopping Summery -->

	</div>

</div>
</main>



    <!-- Contoh Modal -->

@stop
