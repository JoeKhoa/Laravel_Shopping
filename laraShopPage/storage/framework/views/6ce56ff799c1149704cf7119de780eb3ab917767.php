
  

  


  <?php $__env->startSection('content'); ?>
  
  
  
  
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
                  <?php $__currentLoopData = $CateProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                    <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-4" style="float:left !important;">
                      <div class="product-item ml-0 mr-0">
                        <div class="item-inner">
                          <div class="product-thumbnail">

                            <?php if($prod->promotion_price): ?>
                              <div class="icon-sale-label sale-left">Sale</div>
                            <?php endif; ?>
                            <?php if($prod->new): ?>
                              <div class="icon-new-label new-right">New</div>
                            <?php endif; ?>

                            <div class="pr-img-area" > 
                              <a title="Ipsums Dolors Untra" href="apple.store.vn/<?php echo e($prod->url); ?>.html">
                                <figure>
                                  <img class="first-img" src="source/images/products-images/<?php echo e($prod->image); ?>" alt="">
                                  <img class="hover-img" src="source/images/products-images/<?php echo e($prod->image); ?>" alt="">
                                </figure>
                              </a>
                      
                              <button type="button" class="add-to-cart-mt" id="<?php echo e($prod->id); ?>">
                                <i class="fa fa-shopping-cart"></i>
                                <span> Add to Cart</span>
                              </button>
                            </div>

                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title">
                                <a title="Ipsums Dolors Untra" href="apple.store.vn/<?php echo e($prod->url); ?>.html">
                                  <?php echo e($prod->name); ?>

                                </a>
                              </div>
                              <div class="item-content">

                                <div class="item-price">
                                  <div class="price-box">
                                    <span class="regular-price">

                                      <div class="price ">
                                        <?php if($prod->promotion_price): ?>
                                          <?php echo e(trim(number_format($prod->promotion_price,0,',','.').'₫')); ?>                                                  
                                        <?php else: ?>
                                        <?php echo e(number_format($prod->price,0,',','.').'₫'); ?>

                                        <?php endif; ?>
                                      </div>
                                      <div class="hash-old-price ">
                                        <?php if($prod->promotion_price): ?>
                                          <?php echo e(number_format($prod->price,0,',','.').'₫'); ?>                                                  
                                        <?php endif; ?>
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

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
              </div>
              
              <div class="pagination-area ">
                <?php echo e($CateProducts->links()); ?>

              </div>

            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Main Container End -->
    <!-- Footer -->

  <?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP PLACE\htdocs\Laravel_Shopping\laraShopPage\resources\views/pages/category.blade.php ENDPATH**/ ?>