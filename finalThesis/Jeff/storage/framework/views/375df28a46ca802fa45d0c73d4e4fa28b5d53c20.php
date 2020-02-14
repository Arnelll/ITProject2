<?php $__env->startSection('title'); ?>
    <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    Stock Card for <?php echo e($n['product_name']); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Job Order Transaction Log</h5>
                <h4 class="card-title">Latest Job Order Transaction Log</h4>
              </div>
              <div class="card-body">
                <div class="table-full-width table-responsive">
                  <table class="table">
                  <thead class="text-info">
                            <th style="font-weight: 500;">Jo no.</th>
                            <th style="font-weight: 500;">Status</th>
                        </thead>
                    <tbody>
                    <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td><?php echo e($row['jo_id']); ?></td>
                        <?php if($row['status']=='Rendered'): ?>
                        <td class="text-left"><h5>Product <strong><?php echo e($row['product_name']); ?></strong> with a quantity of <strong style="color:red;"><?php echo e($row['quantity']); ?></strong> has been used.</h5></td>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <?php elseif($row['status']=='Ongoing'): ?>
                        <td class="text-left"><h5>This transaction is still ongoing.</h5></td>
                        <td>
                          <div class="form-check text-left" style="color:blue;">
                              O
                          </div>
                        </td>
                        <?php elseif($row['status']=='Pending'): ?>
                        <td class="text-left"><h5>This transaction is pending.</h5></td>
                        <td>
                          <div class="form-check text-left" style="color:black;">
                              O
                          </div>
                        </td>
                        <?php elseif($row['status']=='Cancelled'): ?>
                        <td class="text-left"><h5>This transaction is cancelled.</h5></td>
                        <td>
                          <div class="form-check text-left" style="color:red;">
                              X
                          </div>
                        </td>
                        <?php endif; ?>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-check"></i>
                          </button>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card  card-tasks">
            <div class="card-header ">
                <h5 class="card-category">Walk-in Transaction Log</h5>
                <h4 class="card-title">Latest Walk-in Transaction Log</h4>
              </div>
              <div class="card-body">
              <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left"><h5><strong style="color:red;"><?php echo e($row->lastname); ?>, <?php echo e($row->firstname); ?></strong> bought <strong><?php echo e($row['product_name']); ?></strong> with a quantity of <strong><?php echo e($row['quantity']); ?></strong>.</h5></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td>
                          <div class="form-check">
                          </div>
                        </td>
                        <td class="text-left">No walk-in(s) has been rendered to this client.</td>
                      </tr>
                    <?php endif; ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:history.go(-1)" class="btn btn-secondary btn-lg" title="Return to the previous page" style="background-color: #005CA5; margin-left:45%">Return</a>
        

<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/product_profile.blade.php ENDPATH**/ ?>