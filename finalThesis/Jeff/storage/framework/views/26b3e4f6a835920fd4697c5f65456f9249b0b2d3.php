<?php $__env->startSection('title'); ?>
        Product Checkout Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
  <div class="container">
    <section class="panel">
      <div class="panel panel-footer">
        <header class="panel panel-default">
          <h3> Product Checkout </h3>
        </header>
    </div>
    <div class="row">
      <table class="table">
        <h5>Product Checkout Details</h5>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Vehicle Type</th>
            <th>Plate Number</th>
            <th>Mechanic</th>
            <th>Service</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td><input type="text" name="Client Name" class="form-control jo_pn" value="<?php echo e($clients->lastname); ?>,<?php echo e($clients->firstname); ?>" readonly></td>
          <td><input type="text" name="Type" class="form-control jo_qty" value="<?php echo e($vehicle->model); ?> (<?php echo e($vehicle->type); ?>)" readonly></td>
          <td><input type="text" name="Plate Number" class="form-control jo_qty" value="<?php echo e($vehicle->plate_no); ?>" readonly></td>
          <td><input type="text" name="Mechanic" class="form-control jo_qty" value="<?php echo e($mechanic->last_name); ?>, <?php echo e($mechanic->first_name); ?>" readonly></td>
          <td><input type="text" name="Description" class="form-control jo_qty" value="<?php echo e($jo->remarks); ?>" readonly>
        </tr>
      </tbody>
      </table>
    </div>
    <br>
    <hr>
    <div>
    <table class="table">
      <h5>Job Order list of items</h5>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="<?php echo e($row['product_name']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="<?php echo e($row['quantity']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="<?php echo e($row['retail_price']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="<?php echo e($row['quantity']*$row['retail_price']); ?>" readonly></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    </div>
    <br>
    <hr>
    <div>
    <table class="table">
      <h5>List of items used:</h5>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $products2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><input type="text" name="jo_pn" class="form-control jo_pn" value="<?php echo e($row['product_name']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="<?php echo e($row['quantity']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="<?php echo e($row['retail_price']); ?>" readonly></td>
          <td><input type="text" name="jo_qty" class="form-control jo_qty" value="<?php echo e($row['quantity']*$row['retail_price']); ?>" readonly></td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\def\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/view_prodco.blade.php ENDPATH**/ ?>