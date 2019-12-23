
  

  @extends('layouts.masterlayout')


  @section('content')
  
  
  
  
    <!-- Main Container -->
    <div class="main-container col2-left-layout">
      <div class="container">
        <div class="row">
          <div class="col-main col-xs-12">
            <div class="shop-inner">
              <div class="page-title">
                <h2>Apple</h2>
              </div>

              <div class="product-grid-area">
                <ul class="products-grid">
                  @foreach ($CateProducts as $prod)
                      
                    <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-4" style="float:left !important;">
                      <div class="product-item ml-0 mr-0">
                        <div class="item-inner">
                          <div class="product-thumbnail">

                            @if($prod->promotion_price)
                              <div class="icon-sale-label sale-left">Sale</div>
                            @endif
                            @if($prod->new)
                              <div class="icon-new-label new-right">New</div>
                            @endif

                            <div class="pr-img-area" > 
                              <a title="Ipsums Dolors Untra" href="apple.store.vn/{{$prod->url}}.html">
                                <figure>
                                  <img class="first-img" src="source/images/products-images/{{$prod->image}}" alt="">
                                  <img class="hover-img" src="source/images/products-images/{{$prod->image}}" alt="">
                                </figure>
                              </a>
                      
                              <button type="button" class="add-to-cart-mt" id="{{$prod->id}}">
                                <i class="fa fa-shopping-cart"></i>
                                <span> Add to Cart</span>
                              </button>
                            </div>

                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a title="Ipsums Dolors Untra" href="apple.store.vn/{{$prod->url}}.html">
                                  {{$prod->name}}
                                </a>
                              </div>
                              <div class="item-content">

                                <div class="item-price">
                                  <div class="price-box">
                                    <span class="regular-price">

                                      <div class="price ">
                                        @if($prod->promotion_price)
                                          {{trim(number_format($prod->promotion_price,0,',','.').'₫')}}                                                  
                                        @else
                                        {{number_format($prod->price,0,',','.').'₫'}}
                                        @endif
                                      </div>
                                      <div class="hash-old-price ">
                                        @if($prod->promotion_price)
                                          {{number_format($prod->price,0,',','.').'₫'}}                                                  
                                        @endif
                                      </div>

                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                  @endforeach

                </ul>
              </div>
              
              <div class="pagination-area ">
                {{$CateProducts->links()}}
              </div>

            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Main Container End -->
    <!-- Footer -->

  @endsection

    