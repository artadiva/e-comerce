@extends('layouts.user')

@section('title') Home @endsection

@section('content')
<!-- Hero Section Begin -->

<!-- Hero Section End -->

<!-- Women Banner Section Begin -->
<!-- <h1>xxxxxxxxx</h1>
<pre>

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
  <div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
                <th class="text-center">QUANTITY</th>
								<th class="text-center">UNIT PRICE</th>

                <th class="text-center">Discount</th>
                <th class="text-center">Weight</th>

								<th class="text-center">TOTAL</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>

<?php $weight = 0; ?>
              @foreach($cart as $cart)

              <?php $weight+=$cart->weight; ?>
							<tr>
								<td class="image" data-title="No">
                  @if(empty($cart->gambar))
                  <img src="{{ url('storage/produk/mickey1.jpg') }}" alt="" width="100px" height="100px"  />
                  @else
                  <img src="{{ url('storage/produk/' . $cart->gambar) }}" alt="" width="100px" height="100px" />
                  @endif
                </td>
								<td class="product-des" data-title="Description">
                  <p class="product-name"><a href="#">{{$cart->product_name}}</a><br></p>

									<p class="product-name"><a href="#"></a><br>Diskon {{$cart->percentage }} %</p>


									<!-- <p class="product-des"></p> -->
								</td>
                <td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">

										<input type="text" name="qty" class="input-number" data-min="1" data-max="100" value="{{$cart->qty}}" readonly>

									</div>
									<!--/ End Input Order -->
								</td>
								<td class="price" data-title="Price"><span>{{number_format(($cart->price),2,',','.')}} </span></td>
                <td class="price" data-title="Price"><span>{{number_format(($total = $cart->price - ($cart->price * $cart->percentage/100)),2,',','.')}}

                </span></td>
                <td class="price" data-title="Price"><span>{{$cart->weight}}

                </span></td>
								<td class="total-amount" data-title="Total"><span>{{number_format(($total * $cart->qty),2,',','.')}}</span></td>
								<td class="action" data-title="Remove"><a href="/cart/delete/{{$cart->id}}"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
              <!-- <input type="text" name="" value="" hidden> -->
               @endforeach
						</tbody>


					</table>

<div class="row">
<div class="col-md-8">
<h3 class="mt-5 mb-5">Alamat Pengiriman</h3>
<form class="" action="/cart/get_kota" method="post">
@csrf

<div class="form-group form-group--inline">
<label for="provinsi">Provinsi Tujuan</label>
<select name="province_id" id="province_id" class="form-control">
<option value="">Provinsi Tujuan</option>
@foreach ($provinsi  as $row)
<option value="{{$row['province_id']}}" namaprovinsi="{{$row['province']}}">{{$row['province']}}</option>
@endforeach
</select>
</div>
<!-- <input type="text" name="weight" value="<?php echo $weight; ?>" hidden> -->
<div class="form-group">
<input class="btn btn-primary" type="submit" value="Cek Kota"></input>
</form>
</div>
</div>
</div>

					<!--/ End Shopping Summery -->
				</div>
			</div>

		</div>
	</div>

</div>


    </div>
</section>

<script>
  $(document).ready(function(){
  //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
  //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
  $('select[name="province_id"]').on('change', function(){
  // kita buat variable provincedid untk menampung data id select province
  let provinceid = $(this).val();
  //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
  if(provinceid){
  // jika di temukan id nya kita buat eksekusi ajax GET
  jQuery.ajax({
  // url yg di root yang kita buat tadi
  url:"/cart/kota/"+provinceid,
  // aksion GET, karena kita mau mengambil data
  type:'GET',
  // type data json
  dataType:'json',
  // jika data berhasil di dapat maka kita mau apain nih
  success:function(data){
  console.log(data);
  }
  });
  }
  });
  });
</script>
<!-- Instagram Section Begin -->

<!-- Instagram Section End -->
@endsection
