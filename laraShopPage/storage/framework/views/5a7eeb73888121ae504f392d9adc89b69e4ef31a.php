    

  


  <?php $__env->startSection('content'); ?>
  
  
  
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
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                        <tr id="productRow-<?php echo e($cart['item']->id); ?>">
                          <td class="cart_product"><a href="apple.store.vn/<?php echo e($cart['item']->url); ?>.html"><?php echo e($cart['item']->name); ?></a></td>
                          <td class="cart_product"><a href="apple.store.v"><img src="source/images/products-images/<?php echo e($cart['item']->image); ?>" alt="Product"></a></td>
                          <td class="cart_description"><p class="product-name"><a href="#"><?php echo e($cart['item']->name); ?></</a></p>
                            <small><a href="#">Color : Red</a></small><br>
                            <small><a href="#">Size : M</a></small></td>
                          <td class="availability in-stock"><span class="label">In stock</span></td>
                          <td class=" row">
                            <span class="col-12 row">
                              <?php echo e(number_format($cart['item']->promotion_price,0,',','.')); ?>₫
                            </span>
                            <span class="col-12 row" style="text-decoration: line-through;">
                              <?php echo e($cart['item']->price !== $cart['item']->promotion_price?
                                number_format($cart['item']->price,0,',','.').'₫':''); ?>

                            </span>
                          </td>
                          <td id="qty-<?php echo e($cart['item']->id); ?>" class="qty">
                            <i id="<?php echo e($cart['item']->id); ?>" class="fas fa-edit" style=" cursor: pointer;"></i>

                            <input class="form-control input-sm" type="text" value="<?php echo e($cart['qty']); ?>">
                          </td>
                          <td class="">
                            <span class="col-12 row" id="product-promotionPrice-<?php echo e($cart['item']->id); ?>">
                              <?php echo e(number_format($cart['promotionPrice'],0,',','.')); ?>₫ 
                            </span>
                            <span class="col-12 row" style="text-decoration: line-through;" id="product-price-<?php echo e($cart['item']->id); ?>">
                              <?php echo e($cart['price'] !== $cart['promotionPrice'] ? number_format($cart['price'],0,',','.').'₫':''); ?>

                            </span>
                          </td>
                          <td class="action"><a style="cursor:pointer"><i id="<?php echo e($cart['item']->id); ?>" class="icon-close"></i></a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td class="totalPrice" colspan="2"style="text-decoration: line-through;">
                        <?php echo e(number_format($totalPrice,0,',','.')); ?>₫ 
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>Total</strong></td>
                      <td  colspan="2"><strong class="totalPromtPrice"><?php echo e(number_format($totalPromtPrice,0,',','.')); ?>₫</strong></td>
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

  
  
  
  <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP PLACE\htdocs\Laravel_Shopping\laraShopPage\resources\views/pages/cart.blade.php ENDPATH**/ ?>