<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// use Illuminate\Routing\Redirector;
// use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
// use Illuminate\Http\Request;
use lluminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});



Route::get('apple.store.vn','IndexController@index');
Route::prefix('apple.store.vn')->group(function(){
    // Route::get('/','IndexController@index');
    Route::get('/detail.html','DetailController@index');
    Route::get('/category.html','CategoryController@getCategoryPage');
    Route::get('/cart.html','CartController@index');
    Route::post('/cart.html','CartController@addToCart');
    Route::post('/cart.html/deleteItem','CartController@deleteItem');
    Route::post('/cart.html/deleteAllItem','CartController@deleteAllItem');
    Route::post('/cart.html/updateItems','CartController@updateItems');


    // ->middleware('api');
        // quick test cart-controller
    Route::get('/test.html','CartController@addToCart');

    Route::get('/contact.html','Controller@loadCommonView')->name('contact');
    Route::get('/account.html','Controller@loadCommonView')->name('account');
    Route::get('/about_us.html','Controller@loadCommonView')->name('about_us');
    Route::get('/login.html','Controller@loadCommonView')->name('login');
    Route::get('/register.html','RegisterController@loadCommonView')->name('register');
    Route::get('/error404.html','Controller@loadCommonView')->name('error404');
    Route::get('{type}', function($type){
    })->where([
    'type' => '^([a-zA-Z0-9\(\-\)\%\,\–]+)',
    ])->uses('CategoryController@getCategoryPage');

    Route::get('{type}.html', function($type){
    })->where([
    'type' => '^([a-zA-Z0-9\(\-\)\%\,\–]+)',
    ])->uses('DetailController@index');


            // ********* mean that : /apple.store.vn/ {Sthin is not define}
    // Route::fallback(function () {
    //     return redirect('/apple.store.vn/error404.html');    
    // });
});

            // Use to test-view 
    Route::get('test/{test}', function($test){
    })->where([
    'test' => '^([a-zA-Z0-9\(\-\)\%\,\–]+)',
    ])->uses('TestController@index');


    // Route::get('/create', function () {
    //     $customer = new App\customer;
    //     $customer->name = "Bai viet so 1";
    //     $customer->email = "abc@123";
    //     $customer->save();
    // });



Route::get('test', function() {
    // Session::put('progress', '5%');
    // dd(Session::get('progress'));
})->uses('TestController@index');



// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
