<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function getCategoryPage(request $req){
        $categories = $this->categories;       // for the type-bar
        parent::loadCartLogo();


        $params = $req->route()->parameters();
        $typeUrl = $params['type']; 
            // search to check Url work ?       
        $idUrl = DB::table('page_url')
                        ->select('id')
                        ->where('url','=',$typeUrl)
                        ->first();
            // var_dump($idUrl);    
        if(!isset($idUrl)){
            return redirect('/apple.store.vn/error404.html');
        }   
        $typeId = DB::table('categories')
                    ->select('id')
                    ->where('id_url','=',$idUrl->id)
                    ->first();

        $CateProducts = DB::table('products')
        ->select('products.*','page_url.url')
        ->join('page_url','page_url.id','=','products.id_url')
        ->where('products.id_type','=',$typeId->id)
        ->Where('products.deleted','=',0)
        ->paginate(8); 
        // ->get();

        
        return view('pages.category')->with([
            'categories' => $categories,
            'CateProducts' => $CateProducts,
            'totalQty' => $this->cart->totalQty,
            'totalPromtPrice' => $this->cart->promtPrice,

        ]);
    }
}


