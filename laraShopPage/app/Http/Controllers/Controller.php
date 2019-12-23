<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsNumeric;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\helpers\cart;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $categories = 'load-categories';
    public $cart = [];
    public function __construct(request $req){
        $this->categories = DB::select("select c.* , p.url
                                        from categories c
                                        join page_url p 
                                        on c.id_url = p.id ");        
    }
    public function loadCartLogo(){
        $this->cart = request()->session()->get('cart','');
        if(!$this->cart){
            $this->cart = new cart;
        }
    }
    public function loadCommonView(){
        $view =  request()->route()->getName();
        $this->loadCartLogo();
        return view('pages.'.$view)->with([
            'categories' =>$this->categories,
            'totalQty' => $this->cart->totalQty,
            'totalPromtPrice' => $this->cart->promtPrice,
        ]);
    }
}
