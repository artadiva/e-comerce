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
    <div class="col-lg-12 alert alert-info" style="text-align: left; color: black; "> All Transaction</div></a>
</section>
<section class="">
<div class="container">

		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
          <div class="col-lg-12 alert alert-info" style="">
            <h2>Daftar Transaksi</h2>
            <p>Click on the collapsible panel to open and close it.</p>
            <!-- collapse -->
            @foreach($transaksi as $row)

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="row alert alert-warning">
                <div class="panel-heading col-md-10">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse{{$row['id']}}">#transaksi id :{{$row['id']}}
                      @if($row['status'] == 'unverified' )
                     
                      <?php  $current = strtotime(date("Y-m-d"));
                      $to = strtotime(date($row['timeout']));
                       ?>
                         @if($to < $current)
                          Kadaluarsa 
                          @else
                           akan kadaluarsa pada tanggal {{$row['timeout']}}
                          @endif
                      @elseif($row['status']=='canceled' )
                      CANCELED
                      @else
                        Lunas
                      @endif


                    </a>

                  </h4>

                </div>
                <div class="col-md-2">

                <a href="/profil/cancel/{{$row['id']}}">
                  @if($row['status'] == 'unverified' )
                <span>cancel</span>
                  @elseif($row['status']=='canceled' )
                  CANCELED
                  @else

                  @endif

                </a>
              </div>
                </div>
                <hr>
                <div id="collapse{{$row['id']}}" class="panel-collapse collapse">
                  <?php $x=0; ?>
                  @foreach($transaksi_detail as $tdetail)
                  @foreach($tdetail as $x)
                  @if($row['id']==$x->transaction_id)



                  <div class="panel-body">{{$x->product_name}} x {{$x->qty}} </div>
                  @endif

                  @endforeach
                  <?php $x++; ?>
                  @endforeach
                  <hr>
                  <div class="panel-footer alert alert-light">Rp Total Belanja {{$row['sub_total']}}</div>
                    <br>
                  <div class="panel-footer">Kurir {{$row['courier_id']}} :<br> Alamat : {{$row['province']}}, {{$row['regency']}}, {{$row['address']}}</div>
                    <br>
                  <div class="alert alert-danger" role="alert">

                  <div class="panel-footer">Status {{$row['status']}} </div>
                  </div>
                  <div class="alert alert-info" role="alert">

                  <div class="panel-footer">Bukti Bayar
                    @if($row['proof_of_payment'])
                    Sudah Mengupload Bukti Bayar {{$row['proof_of_payment']}}
                    @else
                    <form action="/profil/buktibayar/{{$row['id']}}" enctype="multipart/form-data" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">

                            <input class="form-control" type="text" name="transaksi_id" value="{{$row['id']}}" hidden>

                    </div>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Upload Bukti Bayar</label>
                            <input class="form-control" type="file" name="gambarbuktibayar" id="" required="">

                    </div>
                  </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                    @endif
                    </div>
                    <div class="alert alert-info" role="alert">

                    <div class="panel-footer">Tulis review<hr>
                      @if($row['status'] == 'success' )
                      <?php $x=0; ?>
                      @foreach($transaksi_detail as $tdetail)
                      @foreach($tdetail as $x)
                      @if($row['id']==$x->transaction_id)

                      <hr>
                      <hr>
                      <div class="panel-body">{{$x->product_name}}</div>
                      <hr>
                      <form class="" action="/profil/review/{{$x->id}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                             <label for="exampleInputEmail1">Review</label>
                      <input class="form-control" type="text" name="product_id" value="{{$x->id}}" hidden >

                    </div>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Rate</label>
                  <select class="form-control" name="rate">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                  </select>
                </div>
                    <div class="form-group">
                         <label for="exampleInputEmail1">Review</label>
                  <textarea class="form-control" type="text" name="review" value="" ></textarea>
                </div>  <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <hr>
                      @endif

                      @endforeach
                      <?php $x++; ?>
                      @endforeach
                      @endif
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            @endforeach
            <!-- collapse -->
          </div>

					<!--/ End Shopping Summery -->

	</div>

</div>


    </div>
</section>
<!-- Display the countdown timer in an element -->


<script>
// Set the date we're counting down to
function createCountDown(elementId, date)
    {
    // Set the date we're counting down to
    var countDownDate = new Date(date).getTime();
    //console.log(countDownDate.getTime());
    // Update the count down every 1 second
    var x = setInterval(function()
    {

      // Get todays date and time


      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = (countDownDate) - (now);

      //Hint on converting from object to the string.
      //var distance = Date.parse(countDownDate) - Date.parse(now);

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 *
      60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById(elementId).innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0)
      {
        clearInterval(x);
        document.getElementById(elementId).innerHTML = "ORDER EXPIRED";
      }
      }, 1000);
      }
</script>
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
