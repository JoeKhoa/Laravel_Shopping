<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(request $req){
        $categories = $this->categories;        
        parent::loadCartLogo();
        $params = $req->route()->parameters();
        $typeUrl = $params['type']; 
            // search to check Url work ?       
        $idUrl = DB::table('page_url')
                        ->select('id')
                        ->where('url','=',$typeUrl)
                        ->first();
            
        if(!isset($idUrl)){
            return redirect('/apple.store.vn/error404.html');
        }   
        $detailProduct = DB::table('products')
                    ->where('id_url','=',$idUrl->id)
                    ->first();

        // echo $detailProduct->id_type; die;                    
        $relatedProducts = DB::table('products')
                    ->select('products.*','page_url.url')
                    ->where('products.id_type', '=', $detailProduct->id_type)
                    ->join('page_url', 'page_url.id','=','products.id_url')
                    ->orderByDesc('products.price')
                    ->limit(7)
                    ->get();
        // dd($relatedProducts); die;

        return view('pages.detail')->with([
            'categories' => $categories,
            'totalQty' => $this->cart->totalQty,
            'totalPromtPrice' => $this->cart->promtPrice,
            'detailProduct' => $detailProduct,
            'relatedProducts' => $relatedProducts,
            ]);
    }
}
