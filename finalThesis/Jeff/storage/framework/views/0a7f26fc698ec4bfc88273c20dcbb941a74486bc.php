<?php $__env->startSection('title'); ?>
        Job Order Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
  <div class="container">
    <section class="panel">
      <div class="panel panel-footer">
        <header class="panel panel-default">
          <h3> Job Order Details  </h3>
        </header>
    </div>
    <?php echo Form::open(array('route'=>'updatejo_status','id'=>'formsave','method'=>'post')); ?>

    <div class="row">
      <table class="table">
        <h5><strong>Job Order Details (Date Created: <?php echo e($araw); ?>)</strong></h5>
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Vehicle Type</th>
            <th>Plate Number</th>
            <th>Mechanic</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td><input type="text" name="Client Name" class="form-control jo_pn" value="<?php echo e($clients->lastname); ?>,<?php echo e($clients->firstname); ?>" readonly></td>
          <td><input type="text" name="Type" class="form-control jo_qty" value="<?php echo e($vehicle->model); ?> (<?php echo e($vehicle->type); ?>)" readonly></td>
          <td><input type="text" name="Plate Number" class="form-control jo_qty" value="<?php echo e($vehicle->plate_no); ?>" readonly></td>
          <td><input type="text" name="Mechanic" class="form-control jo_qty" value="<?php echo e($mechanic->last_name); ?>, <?php echo e($mechanic->first_name); ?>" readonly></td>
          <td><input type="text" name="Description" class="form-control jo_qty" value="<?php echo e($jo->remarks); ?>" readonly>
          <input type="hidden" name="job_id" class="form-control jo_qty" value="<?php echo e($jo->jo_id); ?>" readonly></td>
        </tr>
      </tbody>
      </table>
    </div>
      <thead>
        <tr>
          <th>Status</th>
        </tr>
      </thead>
    <br>
    <div class="row">
    <div class="col-lg-4 col-sm-6">
    <br>
        <?php if($jo->status!='Rendered'): ?>
        <select name="status" class="form-control bg-white" required>
          <option value="" selected disabled><?php echo e($jo->status); ?></option>
          <?php if($jo->status=='Pending'): ?>
          <option value="Ongoing">Ongoing</option>
          <option value="Cancelled">Cancelled</option>
          <?php elseif($jo->status=='Ongoing'): ?>
          <option value="Rendered">Rendered</option>
          <option value="Cancelled">Cancelled</option>
          <?php else: ?>
          <option value="Ongoing">Ongoing</option>
          <option value="Rendered">Rendered</option>
          <option value="Cancelled">Cancelled</option>
          <?php endif; ?>          
        </select>
        <?php else: ?>
        <select name="status" class="form-control bg-white" required>
          <option value="" selected disabled><?php echo e($jo->status); ?></option>
        </select>
        <?php endif; ?>
    </div>
    </div>
    <br>
    <hr>
    <div>
    <table class="table">
      <h5>List of items</h5>
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
  </div>
  <div class="col-lg-2 col-sm-2" style="margin-left:75%">
                <div class="form-group">
                <?php if($jo->status!='Rendered' && $jo->status!='Cancelled'): ?>
                <?php echo Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                <?php else: ?>
                <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                <?php endif; ?>
                </div>
        </div>
</body>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\def\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/view_service.blade.php ENDPATH**/ ?>