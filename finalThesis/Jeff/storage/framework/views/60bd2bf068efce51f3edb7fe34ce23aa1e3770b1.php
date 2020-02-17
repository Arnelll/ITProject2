<?php $__env->startSection('title'); ?>
  Account details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<br>
<a href="javascript:history.go(-1)" style="margin-left:83%;" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
    <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card-body">
        <div class="card">
        <div class="card-user">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
              <h5 class="title text-info"><?php echo e($result->lastname); ?>, <?php echo e($result->firstname); ?></h5>
            </a>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
<div class="row justify-content-center">
<div class="col-md-9">
      <div class="card">
        <div class="card card-body">
          <div class="col-md-12 ml-auto mr-auto col-xl-12">
            <div class="card-header">
              <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-info" href="#about" role="tab" data-toggle="tab">
                      About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#vehicle" role="tab" data-toggle="tab">
                      Vehicle
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#walk-in" role="tab" data-toggle="tab">
                      Walk-in
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#services" role="tab" data-toggle="tab">
                      Services
                    </a>
                </li>
              </ul>
            </div>
            <div class="tab-content tab-space">
              <div class="tab-pane active text-center gallery" id="about">
              <br>  
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control text-center" id="input1" aria-describedby="input1Help" placeholder="<?php echo e($result->email); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact No.</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="<?php echo e($result->contact_no); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="<?php echo e($result->address); ?>" readonly>
                    </div>
                </form>
  			      </div>
              <div class="tab-pane text-center gallery" id="vehicle">
                  <form>
                    <?php $__empty_1 = true; $__currentLoopData = $vehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <h4><label for="exampleInputEmail1"><strong><?php echo e($row['color']); ?> <?php echo e($row['type']); ?></strong></label></h4>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Plate No.</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="<?php echo e($row['plate_no']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Model</label>
                        <input type="text" class="form-control text-center" id="input2"  aria-describedby="input2Help" placeholder="<?php echo e($row['model']); ?>" readonly>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <br>
                    <div class="form-group">
                        This client has no registered vehicle.
                    </div>
                    <?php endif; ?>
                  </form>
  			      </div>
              <div class="tab-pane text-center gallery" id="walk-in">
                <form>
                <div class="table-full-width table-responsive">
                  <br>
                  <table class="table">
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                        <td>
                          <div class="form-check">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <td class="text-left">Bought <strong><?php echo e($row['product_name']); ?></strong> with a quantity of <strong><?php echo e($row['quantity']); ?></strong>.</td>
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
                </form>
  			      </div>
              <div class="tab-pane text-center gallery justify-content-center" id="services">
                <form>
                <div class="table-full-width table-responsive justify-content-center">
                  <table class="table justify-content-center">
                  <br>
                  <thead class="text-info">
                            <th style="font-weight: 500;">Job Order No.</th>
                            <th class="text-left" style="font-weight: 500;">Status</th>
                        </thead>
                    <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <tr>
                      <td><?php echo e($row['jo_id']); ?></td>
                        <?php if($row['status']=='Rendered'): ?>
                        <td class="text-left">Rendered</td>
                        <td>
                          <div class="form-check text-left">
                              <i style="color:green;" class="now-ui-icons ui-1_check"></i>
                          </div>
                        </td>
                        <?php elseif($row['status']=='Ongoing'): ?>
                        <td class="text-left">Ongoing</td>
                        <td>
                          <div class="form-check text-left" style="color:blue;">
                              O
                          </div>
                        </td>
                        <?php elseif($row['status']=='Cancelled'): ?>
                        <td class="text-left">Cancelled</td>
                        <td>
                          <div class="form-check text-left" style="color:red;">
                              X
                          </div>
                        </td>
                        <?php elseif($row['status']=='Pending'): ?>
                        <td class="text-left">Pending</td>
                        <td>
                          <div class="form-check text-left" style="color:black;">
                              O
                          </div>
                        </td>
                        <?php endif; ?>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td>
                          <div class="form-check">
                          </div>
                        </td>
                        <td class="text-left">No record of service(s) to this client is found.</td>
                      </tr>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>
                </form>
  			      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    



<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/view_accounts.blade.php ENDPATH**/ ?>