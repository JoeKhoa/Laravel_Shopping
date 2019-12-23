<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\customers;
use categoryModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\products;

class TestController extends Controller
{
    protected $date = ['deleted_at'];

    public function index(request $req){
        // echo 'test Controler index method';
        // return view('layouts.test');
        // echo 'a'; 

        // $customers = customer::where('id','=','70')
        //             ->orderBy('name')
        //             ->take(5)
        //             ->get();
        // foreach($customers as $customer){
        //     echo $customer->name.'<br>';
        // }
            
            // COLLECTIVE
        // $customer = customers::all();
        // $customer = $customer->reject( function($customer){
        //     return $customer->id = 60;
        // });
        // dd($customer); die;


        // return view::first(['tests.test','tests.category_TEST'],['data' =>$data]);
            // **********  CHUNK ***********
        // customer::chunk(10,function($cus_2){
            //     foreach($cus_2 as $cus){
            //         echo $cus->name.'<br>';
            //     }
            //     echo '<hr>';
            // });       
                    //  CURSOR
            // foreach(customer::where('id','<',10)->cursor() as $customer){
            //     echo $customer->id.' - ' .$customer->name .'<br>';
            // }
            
            // FIND          
        // $customers = customer::find(1);
        
        // foreach($customers as $customer){
        //     // echo $customer->id.' - ' .$customer->name .'<br>';
        // }
            //TRY - CATCH
        // try {
        //     $customer = customer::findOrFail(1);
        //     //hoặc
        //     $customer = customer::where('id',1)->firstOrFail();
        // } catch (ModelNotFoundException $e) {
        //     echo $e->getMessage();
        // }
        // $customers = customer::where('id','<',5)
        //                         // ->having('id','<',5)
        //                         ->groupBy('id')
        //                         ->sum('id');
        // dd($customers);
            //UPDATE
        // $cus = customer::find(1);
        // $cus->name = 'Mr.A';
        // $cus->save();
            // MASS UPDATE
        // customer::where('id','>',3)
        //     ->update(['name' => 'update where greater than 3']);
            // SOFT-DELETE
        // $a = customer::find(2)->delete();
        //    if($a) echo 'deleted';



        // $p = $req->route()->parameters();
        // $p['test'];
        // $product_model = products::where('id',$p)->first();

        // echo '<pre>';print_r($product_model); die;

        

        
        $cart  = $req->session()->get('cart');
        // echo '<pre>';print_r($cart->items); die;

        return view('test',['cart'=> $cart]);
    
    
    }
}

