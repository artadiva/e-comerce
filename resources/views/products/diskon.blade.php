@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <form action="/products/{{$products->id}}/diskon_insert" method="POST">
                                {{csrf_field()}} <!--Untuk mendapatkan token, ini merupakan helper dari laravel-->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Stock</label>
                                    <input name="stock" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->stock}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Weight</label>
                                    <input name="weight" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->weight}}">
                                </div>
                               
                            </form>
						</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel"> <h1>Tambahkan Diskon</h1>
                            <form action="/products/diskon_insert" method="POST">
                                {{csrf_field()}} <!--Untuk mendapatkan token, ini merupakan helper dari laravel-->
                                <div class="form-group">
                                    
                                    <input name="id_product" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$products->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Persentase</label>
                                    <input name="percentage" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Mulai</label>
                                    <input name="start" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Selesai</label>
                                    <input name="end" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                                </div>
                               
                                <div class="form-group">
                                    
                                    <input name="submit" type="submit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Submit">
                                </div>
                               
                            </form>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop