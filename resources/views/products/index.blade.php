@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Products</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal1"><i class="lnr lnr-plus-circle"></i></button>


                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="display table table-hover " id="example" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Pict</th>
                                            <th>PRODUCT NAME</th>
                                            <th>PRICE</th>
                                            <th>DESCRIPTION</th>
                                            <th>STOCK</th>
                                            <th>WEIGHT</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_products as $products) <!--Melakukan perulangan pengambilan data-->
                                        <tr>
                                            <td><img src="{{ url('storage/produk/' . $products->gambar) }}" width="100px" height="100px"></td>

                                            <td>{{$products->product_name}}</td>
                                            <td>{{$products->price}}</td>
                                            <td>{{$products->description}}</td>
                                            <td>{{$products->stock}}</td>
                                            <td>{{$products->weight}}</td>
                                            <td>
                                                <a href="/products/{{$products->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                                                <a href="/products/{{$products->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data?')">DELETE</a>
                                                <a href="/products/{{$products->id}}/diskon" class="btn btn-success btn-sm">Diskon</a>
                                                 <!-- <a href="/products/{{$products->id}}/gambar" class="btn btn-info btn-sm">Gambar</a> -->
                                                 <a href="/products/{{$products->id}}/category" class="btn btn-info btn-sm">Category</a>
                                                <!-- <a href="/products/{{$products->id}}/diskon" class="btn btn-danger btn-sm" >Diskon</a> -->

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="raw" >
      <div class="col-md-3">

      </div>
        <div class="col-md-9" role="document">
            <div class="">
                <div class="">
                    <h1 class="" id="">Tambah Data</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m">
                    <form action="/products/create" enctype="multipart/form-data" method="POST">
                    {{csrf_field()}} <!--Untuk mendapatkan token, ini merupakan helper dari laravel-->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stock</label>
                            <input name="stock" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Weight</label>
                            <input name="weight" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                             <label for="exampleInputEmail1">gambar</label>
                                <input class="form-control" type="file" name="gambar" id="" required="">

                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>



    <!-- Contoh Modal -->

@stop
