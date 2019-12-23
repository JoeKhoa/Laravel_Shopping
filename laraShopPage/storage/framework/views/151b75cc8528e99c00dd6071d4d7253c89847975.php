
  

  


  <?php $__env->startSection('content'); ?>
  
  <div class="row col-12 " style="margin:20px;">
      <?php $__currentLoopData = $CateProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="product row col-4 bg-col bg-info m-1" style=" float:left;width :24%;margin:5px !important;">
            <p><?php echo e($prod->name); ?></p>
          </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  </div>

  <div class="link">
      <?php echo e($CateProducts->links()); ?>

  </div>

  <?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.masterlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP PLACE\htdocs\laraShopPage\resources\views/tests/category_TEST.blade.php ENDPATH**/ ?>