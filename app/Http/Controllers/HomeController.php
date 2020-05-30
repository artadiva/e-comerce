<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
    	// $test="nyammm";
    	$products_join = DB::table('products')
    					->leftjoin('discounts','products.id' ,'=','discounts.id_product')
    					->select('products.*', 'discounts.id_product', 'discounts.percentage', 'discounts.start','discounts.end')
                        ->whereRaw('Date(discounts.start) <= CURDATE() AND Date(discounts.end) >= CURDATE()')
                        ->distinct()
    					->get();
         $products_top10 = DB::table('products')

                        ->select('*')->limit(10)

                        ->distinct()
                        ->get();



    	return view('welcome',['products' =>$products_join , 'products_top10' =>$products_top10]);

    }
    public function lihatproduk()
    {
        // $test="nyammm";
        $products_join = DB::table('products')
                        ->leftjoin('discounts','products.id' ,'=','discounts.id_product')
                        ->select('products.*', 'discounts.id_product', 'discounts.percentage', 'discounts.start','discounts.end')
                        ->whereRaw('Date(discounts.start) <= CURDATE() AND Date(discounts.end) >= CURDATE()')
                        ->distinct()
                        ->get();
         $products_top10 = DB::table('products')

                        ->select('*')->limit(10)

                        ->distinct()
                        ->get();



        return view('lihatproduk',['products' =>$products_join , 'products_top10' =>$products_top10]);

    }
    public function produkdetail($id){
        $products = \App\Products::find($id);
        $products_review=DB::select("SELECT `product_reviews`.`created_at`,users.`name`,`product_reviews`.`rate`, `product_reviews`.`content`,`product_reviews`.`id` FROM `product_reviews`
        JOIN `products`
        ON `product_reviews`.`product_id`=`products`.`id`
        JOIN users
        ON `product_reviews`.`user_id`=users.`id`
        WHERE product_id=$id");
        $product_response= DB::table('response')->get();
        return view('produkdetail',['products' =>$products,'products_review' =>$products_review,'product_response' =>$product_response]);
    }
}
