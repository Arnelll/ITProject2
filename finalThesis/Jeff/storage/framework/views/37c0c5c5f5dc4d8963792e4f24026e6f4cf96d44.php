<?php $__env->startSection('title'); ?>
    + Edit Vehicle
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
        <?php echo Form::open(array('route'=>'vehicle_update','id'=>'formupdate','method'=>'post')); ?>

        <div class="row">
        <input type="hidden" value="<?php echo e($result->vehicle_id); ?>" id="vehicleid" name="vehicleid">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                Owner<input type="text" id="plateno" name="plateno" class="form-control" value="<?php echo e($result->firstname); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                Plate No.<input type="text" id="plateno" name="plateno" class="form-control" value="<?php echo e($result->plate_no); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Type<input type="text" id="type" name="type" class="form-control" value="<?php echo e($result->type); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Model<input type="text" id="model" name="model" class="form-control" value="<?php echo e($result->model); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Color<input type="text" id="color" name="color" class="form-control" value="<?php echo e($result->color); ?>">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                Description<input type="text" id="desc" name="desc" class="form-control" value="<?php echo e($result->description); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2" style="margin-left:85%;">
                <div class="form-group">
                <?php echo Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/edit_vehicle.blade.php ENDPATH**/ ?>