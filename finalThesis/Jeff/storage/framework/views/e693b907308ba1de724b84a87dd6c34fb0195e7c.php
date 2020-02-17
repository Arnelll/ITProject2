<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>

<div class="card-deck">

  <div class="col-sm-4">
    <a href="/opt_trans" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add Transaction
        </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/accounts" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-users" style=""></div>
          <br>
          Client List
        </h5>
      </div>
    </a>
  </div>
  
  <div class="col-sm-4">
    <a href="/products" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-boxes" style=""></div>
          <br>
          Inventory
        </h5>
      </div>
    </a>
  </div>

</div>
</body>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/dashboard.blade.php ENDPATH**/ ?>