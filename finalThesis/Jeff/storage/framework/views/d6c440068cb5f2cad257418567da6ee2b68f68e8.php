<?php $__env->startSection('title'); ?>
    <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Vehicle profile for Plate No. <strong style="color:red;"><?php echo e($n['plate']); ?></strong>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<br>
	<a href="javascript:history.go(-1)" style="margin-left:83%;" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
<br>
<br>
<br>
<div class="row justify-content-center">
    <div class="col-md-3">
      <div class="card-body">
        <div class="card">
        <div class="card-user">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="../assets/img/Arnel.jpg" alt="...">
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5 class="title"><?php echo e($row['lastname']); ?>, <?php echo e($row['firstname']); ?></h5>
              </a>
                <p class="description text-center"> Email: <?php echo e($row['email']); ?> </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="btn-group">
                <button type="button" class="btn btn-danger">Change Owner</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#clientModal">Existing Client</a>
                  <a class="dropdown-item" href="/change_owner/<?php echo e($id['vehicle_id']); ?>">New Client</a>
                </div>
              </div>
            </div>
          </div>
       
      </div>
    </div>
  </div>
</div>
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Vehicle</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Type</label>
                        
                        <input type="text" class="form-control" disabled="" placeholder="vehicle_type" value="<?php echo e($n['type']); ?>(Model: <?php echo e($n['model']); ?>)">
                        
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Plate No.</label>
                        <input type="text" class="form-control" disabled="" placeholder="plate_no" value="<?php echo e($n['plate_no']); ?>">
                      </div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Color</label>
                        <input type="email" class="form-control" disabled="" placeholder="color" value="<?php echo e($n['color']); ?>">
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </form>
              </div>
            </div>
          </div>
          </div>

          <div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">To be owned by:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php echo Form::open(array('route'=>'change_own2','id'=>'formsave','method'=>'post')); ?>

      <div class="modal-body">
        <input type="hidden" name="vId" value="<?php echo e($id['vehicle_id']); ?>"></input>
        <select name="cId">
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($client['client_id']); ?>"><?php echo e($client['lastname']); ?>, <?php echo e($client['firstname']); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php echo Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg')); ?>

      </div>
    </div>
  </div>
</div>
<?php echo Form::hidden('_token',csrf_token()); ?>

            <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/dashboard/vehicle_profile.blade.php ENDPATH**/ ?>