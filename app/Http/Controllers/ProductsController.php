<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
class ProductsController extends Controller
{
    public function index()
    {
        $data_products= \App\Products::all();
        return view('products.index',compact('data_products'));
    }
    public function create(Request $request) //Membuat function untuk create data pada tabel products
    {
        // $this->validate($request, [
        // 'image' => 'required|image|mimes:png,jpeg,jpg' //GAMBAR DIVALIDASI HARUS BERTIPE PNG,JPG DAN JPEG
        //                 ]);
        $file = $request->file('gambar');

        $filename = time() .'.' . $file->getClientOriginalExtension();

        $file->storeAs('public/produk/', $filename);
        // \App\Products::create($request->all());
        // $test = "gambarrrrr";
        $product_id = DB::table('products')->insertGetId([
            'product_name' => $request->product_name,


            'description' => $request->description,

            'price' => $request->price,
            'stock' => $request->stock,
            'gambar' => $filename,
            'weight' => $request->weight


        ]);
        DB::table('product_images')->insert([

            'product_id' => $product_id,
            'image_name' => $filename

        ]);
        // print_r($file);
        // print_r($filename);
        return redirect('/products')->with('sukses','Data berhasil dimasukkan');
        //with ini berarti untuk menambahkan pesan sukses
    }
    public function edit($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        return view('products/edit', ['products' => $products]); //memanggil file edit.blade.php pada folder products dan passing value
    }
    public function lihat($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        $product_detail = DB::table('products')
                        ->leftjoin('discounts','products.id' ,'=','discounts.id_product')
                        ->leftjoin('product_category_details','products.id' ,'=','product_category_details.product_id')
                        ->leftjoin('categories','product_category_details.category_id' ,'=','categories.id')
                        ->select('products.*', 'discounts.id_product', 'discounts.percentage', 'discounts.start','discounts.end','categories.category_name')
                        ->where('products.id','=',$id)


                        ->get();
        return view('products/lihat', ['products' => $products,'products_detail' => $product_detail]); //memanggil file edit.blade.php pada folder products dan passing value
    }
    public function update(Request $request,$id) // parameter request untuk menangkap data dari form
    {
        $products = \App\Products::find($id);
        $products->update($request->all());
        return redirect('/products')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $products = \App\Products::find($id);
        $products->delete();
        return redirect('/products')->with('sukses','Data berhasil didelete');
    }
    public function diskon($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        return view('products/diskon', ['products' => $products]); //memanggil file edit.blade.php pada folder products dan passing value
    }
    public function diskon_insert(Request $request)
    {
       DB::table('discounts')->insert([
        'id_product' => $request->id_product,
        'percentage' => $request->percentage,
        'start' => $request->start,
        'end' => $request->end
        ]);
       return redirect('/products')->with('sukses','Data berhasil dimasukkan');
    }
    public function category($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        $category = \App\Category::all();
        return view('products/category', ['products' => $products,'category' => $category]); //memanggil file edit.blade.php pada folder products dan passing value
    }
    public function category_insert(Request $request)
    {
       DB::table('product_category_details')->insert([
        'product_id' => $request->id_product,
        'category_id' => $request->category_id
        ]);
       return redirect('/products')->with('sukses','Data berhasil dimasukkan');
    }
    public function gambar($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        return view('products/gambar', ['products' => $products]); //memanggil file edit.blade.php pada folder products dan passing value
    }
}
