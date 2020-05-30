@extends('layouts.master')
@section('content')
    <main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
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
                      akan kadaluarsa pada tanggal {{$row['timeout']}}
                      @elseif($row['status']=='canceled' )
                      CANCELED
                      @else
                        Lunas
                      @endif


                    </a>

                  </h4>

                </div>
                <div class="col-md-2">

                <!-- <a href="/profil/cancel/{{$row['id']}}"><span>cancel</span></a> -->
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


                  <div class="panel-footer">Upadate Status</div>
                  <form class="form-group" action="/transaksi/updatestatus/{{$row['id']}}" method="get">
                    {{csrf_field()}}

                    <div class="form-group">
                      <select class="form-control" type="text" name="status_update">
                        <option value="delivered">canceled</option>
                        <option value="delivered">delivered</option>
                        <option value="expired">expired</option>
                        <option value="success">success</option>
                        <option value="unverified">unverified</option>
                        <option value="verified">verified</option>
                      </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  </form>
                  </div>

                  <div class="alert alert-info" role="alert">

                  <div class="panel-footer">Bukti Bayar
                    @if($row['proof_of_payment'])
                    <?php $buktibayar = $row['proof_of_payment']; ?>
                    Sudah Mengupload Bukti Bayar <a href="{{ url('storage/buktibayar/') }}/{{$row['proof_of_payment']}}" target="_blank">LIHAT</a>
                    @else
                    Belum Mengupload Bukti Bayar
                    @endif
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
</main>



    <!-- Contoh Modal -->

@stop
