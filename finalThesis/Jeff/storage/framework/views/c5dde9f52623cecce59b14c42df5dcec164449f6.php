<?php $__env->startSection('title'); ?>
    New Transaction
    <a href="javascript:history.go(-1)" class="d-inline p-2" title="Return to the previous page" style="background-color: #005CA5;"><- Return</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>

<div class="card-deck">

  <div class="col-sm-4">
    <a href="/new_sales" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add New Sales
        </h5>
      </div>
    </a>
  </div>

  <div class="col-sm-4">
    <a href="/new_jooo" style="text-decoration: none;">
      <div class="card" style="padding: 100px; width: 100%;" onMouseOver="this.style.background='#DCDCDC'" onMouseOut="this.style.background='#fff'">
        <h5 class="card-title" style="text-align: center; color: #005CA5;">
          <div class="fas fa-plus-circle" style=""></div>
          <br>
          Add New Service/Job Order
        </h5>
      </div>
    </a>
  </div>
</div>
</body>

<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/transaction_option.blade.php ENDPATH**/ ?>