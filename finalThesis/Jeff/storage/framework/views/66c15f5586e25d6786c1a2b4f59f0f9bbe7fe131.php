<?php $__env->startSection('title'); ?>
    + Vehicle
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Vehicle Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        <?php echo Form::open(array('route'=>'vehicle_insert','id'=>'formsave','method'=>'post')); ?>

        <h4><strong>Enter Vehicle Details</strong><a href="/new_jooo" class="btn btn-primary btn-sm btn-round d-inline p-2" style="margin-left:50%; background-color: #005CA5;">+ Job Order</a></h4>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                Client<select name="client_id" class="form-control bg-white" required>
                        <option value="" selected="true" disabled="true">Select Client</option>
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo $key; ?>"><?php echo $c; ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                Plate Number<input type="text" name="plateno" class="form-control bg-white" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                Type<input type="text" name="type" class="form-control bg-white" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                Model<input type="text" name="model" class="form-control bg-white" required>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="form-group">
                Color<input type="text" name="color" class="form-control bg-white" required>
                </div>
            </div>
            <div class="col-lg-5 col-sm-3">
                <div class="form-group">
                Description<input type="text" name="desc" class="form-control bg-white" required>
                </div>
            </div>
</div>
        <div class="col-lg-2 col-sm-2" style="margin-left:80%">
                <div class="form-group">
                <?php echo Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page" style="background-color: #005CA5;">Return</a>
                </div>
        </div>
        <?php echo Form::hidden('_token',csrf_token()); ?>

        <?php echo Form::close(); ?>

            </div>
        </section>
    </div>
</body>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/vehicle_new.blade.php ENDPATH**/ ?>