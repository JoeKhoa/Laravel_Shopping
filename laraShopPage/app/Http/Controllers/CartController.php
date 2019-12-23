<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Dotenv\Regex\Success;
use Illuminate\Http\Request;
\App\Http\Middleware\VerifyCsrfToken::class;
use App\products;
use App\categories;
use App\bill_detail;
use App\bills;
use App\page_url;

use App\helpers\cart;

class CartController extends Controller
{
    public function index(request $req){
        $categories = $this->categories;       // for the type-bar
        parent::loadCartLogo();
        return view('pages.cart')->with([
            'categories' => $this->categories,
            'cart' => $this->cart->items,
            'totalPrice' => $this->cart-> totalPrice, 
            'totalPromtPrice' =>$this->cart->promtPrice,
            'totalQty'=> $this->cart->totalQty,
        ]);
    }
    public function addToCart(request $req){
        if(!isset($_POST['addCartId'])) {
            echo 'abc';
            return redirect('/');
        }
        $id = $_POST['addCartId'];
        $A_product = products::where('id',$id)
                                    ->first();
        $oldCart  = $req->session()->get('cart');
        $cart  = new Cart($oldCart);
        $qty = 1;
        $cart->add($A_product,$qty);
        $req->session()->put('cart',$cart); 
        echo json_encode([
                // product to add to cart
            'id' => $id,
            'name' => $A_product->name,
            'price' => $A_product->price,
            'promtPrice' => $A_product->promptPrice,
            'image' =>$A_product->image,
            'success' =>true,
            'totalPromtPrice' => $cart->promtPrice,
            'totalQty'=> $cart->totalQty,
            
        ]);
    }
    public function deleteItem(request $req){
        if(!isset($_POST['delItemId'])){
            return redirect('/'); // choose again
        }
            $id = $_POST['delItemId'];
        $oldCart = $req->session()->get('cart');
        $cart  = new Cart($oldCart);
        $cart->removeItem($id);
        $req->session()->put('cart',$cart);
        echo json_encode([
            'cart' => $cart->items,
            'totalPrice' => $cart->totalPrice, 
            'totalPromtPrice' => $cart->promtPrice,
            'totalQty'=> $cart->totalQty,
            'success' => true,
            'id' => $id,
        ]);
    }
    public function deleteAllItem(){
        if(!isset($_POST['action']) && !($_POST['action'] = 'deleteAllItem')){
            return redirect('/'); // choose again
        }
        request()->session()->put('cart','');
        echo json_encode([
            'success' => true,
        ]);
    }


    public function updateItems(){
        if(!isset($_POST['action']) && !($_POST['action'] = 'updateItems')){
            return redirect('/'); // choose again
        }
        $id = $_POST['id'];
        $qty = $_POST['qty'];
        $product = products::where('id',$id)->first();
        $oldCart = request()->session()->get('cart','');
        $cart = new Cart($oldCart);
        $cart->update($product,$qty);
        request()->session()->put('cart',$cart);
        // echo '<pre>';print_r ($product->name); die;
        // echo '<pre>';print_r($cart->items[$id]); die;
        echo json_encode([
            // 'cart' => $cart->items,
            'price' => $cart->items[$id]['price'], 
            'promtPrice' => $cart->items[$id]['promotionPrice'],
            'productQty' => $cart->items[$id]['qty'],
            'totalPrice' => $cart->totalPrice, 
            'totalPromtPrice' => $cart->promtPrice,
            'totalQty'=> $cart->totalQty,
            'success' => true,
        ]);

        // request()->session()->put('cart','');
        //nothing
    }
}
