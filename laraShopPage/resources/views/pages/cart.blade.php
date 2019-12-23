    

  @extends('layouts.masterlayout')


  @section('content')
  
  
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
            
            
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">name</th>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                      <th>Avail.</th>
                      <th>Unit</th>
                      <th>Qty</th>
                      <th style="width:200px !important;">Total</th>
                      <th  class="action"><i class="fa fa-trash-o" style="cursor:pointer"></i></th>
                    </tr>
                  </thead>
                  <tbody class="allCart">
                    @foreach ($cart as $cart)                        
                        <tr id="productRow-{{$cart['item']->id}}">
                          <td class="cart_product"><a href="apple.store.vn/{{$cart['item']->url}}.html">{{$cart['item']->name}}</a></td>
                          <td class="cart_product"><a href="apple.store.v"><img src="source/images/products-images/{{$cart['item']->image}}" alt="Product"></a></td>
                          <td class="cart_description"><p class="product-name"><a href="#">{{$cart['item']->name}}</</a></p>
                            <small><a href="#">Color : Red</a></small><br>
                            <small><a href="#">Size : M</a></small></td>
                          <td class="availability in-stock"><span class="label">In stock</span></td>
                          <td class=" row">
                            <span class="col-12 row">
                              {{number_format($cart['item']->promotion_price,0,',','.')}}₫
                            </span>
                            <span class="col-12 row" style="text-decoration: line-through;">
                              {{
                                $cart['item']->price !== $cart['item']->promotion_price?
                                number_format($cart['item']->price,0,',','.').'₫':''
                              }}
                            </span>
                          </td>
                          <td id="qty-{{$cart['item']->id}}" class="qty">
                            <i id="{{$cart['item']->id}}" class="fas fa-edit" style=" cursor: pointer;"></i>

                            <input class="form-control input-sm" type="text" value="{{$cart['qty']}}">
                          </td>
                          <td class="">
                            <span class="col-12 row" id="product-promotionPrice-{{$cart['item']->id}}">
                              {{ number_format($cart['promotionPrice'],0,',','.')}}₫ 
                            </span>
                            <span class="col-12 row" style="text-decoration: line-through;" id="product-price-{{$cart['item']->id}}">
                              {{
                                $cart['price'] !== $cart['promotionPrice'] ? number_format($cart['price'],0,',','.').'₫':''
                              }}
                            </span>
                          </td>
                          <td class="action"><a style="cursor:pointer"><i id="{{$cart['item']->id}}" class="icon-close"></i></a></td>
                        </tr>
                    @endforeach 

                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td class="totalPrice" colspan="2"style="text-decoration: line-through;">
                        {{ number_format($totalPrice,0,',','.')}}₫ 
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>Total</strong></td>
                      <td  colspan="2"><strong class="totalPromtPrice">{{ number_format($totalPromtPrice,0,',','.')}}₫</strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="#"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="#"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  
  
  @endsection
  