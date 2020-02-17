<?php $__env->startSection('title'); ?>
        Delivery profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
  <div class="container">
    <section class="panel">
      <div class="panel panel-footer">
        <header class="panel panel-default">
          <h3> </h3>
        </header>
    </div>
    <br>
    <div class="row">
  <table class="table">
  <h3>Delivery Details</h3>
      <thead>
        <tr>
          <th>Supplier Name</th>
          <th>Product</th>
          <th>Quantity</th>
          <th>Delivery Date</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn bg-white" value="<?php echo e($row['name']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty bg-white" value="<?php echo e($row['product_name']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty bg-white" value="<?php echo e($row['quantity']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty bg-white" value="<?php echo e($row['delivery_date']); ?>" readonly></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    </div>
  </div>
  <div class="col-lg-2 col-sm-2" style="margin-left:75%">
                <div class="form-group">
                <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                </div>
        </div>
        </body>


<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/delivery_profile.blade.php ENDPATH**/ ?>