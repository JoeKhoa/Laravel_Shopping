<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

// include_once 'LoadInitController.php';

class IndexController extends Controller
{
    public function index(){
        $categories = $this->categories; 
        parent::loadCartLogo();
    
        // $sliders = DB::select('select image,link,title,status from slide where status = 1 ');        
        $sliders = DB::table('slide')
                        ->where( 'status','=', 1)
                        ->get();
        $FeatureProducts = DB::table('products')
                            ->select('products.*','page_url.url')
                            ->join('page_url','page_url.id','=','products.id_url')
                            ->where('status','=',1)
                            ->Where('deleted','=',0)
                            ->offset(0)
                            ->limit(10)
                            ->get();

        // echo '<pre>'; print_r($FeatureProducts); die;

        $BestSellProducts = DB::table('products')
                            ->join('page_url','page_url.id','=','products.id_url') 
                            ->join('bill_detail','products.id', '=', 'bill_detail.id_product')
                            ->where('deleted', '=', 0)
                            ->select('products.*', 'page_url.url',
                            'bill_detail.id as id_bill_detail',DB::Raw('Sum(bill_detail.quantity) AS soldOut'))
                            ->groupBy('products.id')
                            ->orderBy('soldOut')
                            ->get();
        // echo '<pre>'; print_r($BestSellProducts); die;

                            
        return view('pages.index')->with([
                'categories' => $categories,
                'totalQty' => $this->cart->totalQty,
                'totalPromtPrice' => $this->cart->promtPrice,
                'sliders' => $sliders,
                'FeatureProducts' => $FeatureProducts,
                'BestSellProducts' => $BestSellProducts,
            ]);
    }
}
